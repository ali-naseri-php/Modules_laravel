<?php

    namespace Modules\Article\Livewire;

    use Livewire\Component;
    use Modules\Article\Models\Article;

    class ArticleShow extends Component
    {
        public function render()
        {
            return view('article::livewire.article-show',
                ['articles' => Article::all()])->layout('homepagemodule::layouts.app');
        }
    }
