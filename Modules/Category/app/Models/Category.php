<?php

namespace Modules\Category\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Category\Database\Factories\CategoryFactory;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'categorys';
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory(): CategoryFactory
    {
        //return CategoryFactory::new();
    }

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_category');
    }

    // متدی برای برگرداندن نام دسته‌بندی والد
    public function name_catagory()
    {
        // بررسی می‌کنیم آیا دسته‌بندی والد دارد یا نه
        if ($this->parentCategory) {
            return $this->parentCategory->name; // نام دسته‌بندی والد را برمی‌گرداند
        }
        return null; // در صورتی که والد نداشته باشد، مقدار null برمی‌گرداند
    }

    public function properties()
    {
        return $this->hasOne(Propertie::class, 'id_category');
    }
}
