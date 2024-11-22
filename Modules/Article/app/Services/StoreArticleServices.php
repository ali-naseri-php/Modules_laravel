<?php
namespace  Modules\Article\Services;

use Modules\Article\Models\Article;

class StoreArticleServices
{
    protected $data;
    public function __construct($data)
    {
//        dd($data);
        $this->data = $data;


    }
    public function store()
    {
        $newArticle=new Article;
        $file_name = $this->data['title'] . '-' . time() . '.' . $this->data['image']->extension();
        $this->data['image']->move(public_path('images'), $file_name);
        $newArticle->image = 'images/' . $file_name;
        $newArticle->title=$this->data['title'];
        $newArticle->body=$this->data['body'];
        $status=$newArticle->save();
        return $status;


    }

}
