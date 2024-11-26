<?php
namespace  Modules\Article\Services;

use Modules\Article\Models\Article;

class DeleteArticleServices
{

    public function delete($id)
    {
        $status= Article::find($id)->delete();
        return $status;


    }

}
