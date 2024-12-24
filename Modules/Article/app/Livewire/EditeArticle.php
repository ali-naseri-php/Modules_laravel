<?php

namespace Modules\Article\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Modules\Article\Models\Article;

class EditeArticle extends Component
{
    public $article;
    public  function validateId($id)
    {
       $this->article= Article:: where('id','=',$id)->first();
//dd($article);
        if ( !isset($this->article->id)){
            return abort(404);
        }
   }

    public function render(Request $request)
    {
        $this->validateId($request->id);
        return view('article::livewire.edite-article')->layout('homepagemodule::layouts.app');
    }
}
