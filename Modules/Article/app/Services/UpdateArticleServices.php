<?php
namespace  Modules\Article\Services;

use Modules\Article\Models\Article;

class UpdateArticleServices
{
    protected $data;
    public function __construct($data)
    {
//        dd($data);
        $this->data = $data;


    }
    public function store()
    {
//        dd($this->data->id);
        $article=Article::find($this->data['id']);
        $file_name = $this->data['title'] . '-' . time() . '.' . $this->data['image']->extension();
        $this->data['image']->move(public_path('images'), $file_name);
        $article->image = 'images/' . $file_name;
        $article->title=$this->data['title'];
        $article->body=$this->data['body'];
        $status=$article->save();
        return $status;


    }

}
