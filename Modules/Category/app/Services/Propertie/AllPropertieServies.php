<?php
namespace Modules\Category\Services\Propertie;

use Modules\Category\Models\Propertie;

class AllPropertieServies
{
    public function all($page)
    {
//        dd($page);
return Propertie::paginate(5);
 }
}


