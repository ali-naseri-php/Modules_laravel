<?php

namespace Modules\Article\Livewire;

use Livewire\Component;

class CreateArticle extends Component
{
    public function mount()
    {

    }
    public function render()
    {

        return view('article::livewire.create-article')->layout('homepagemodule::layouts.app');
    }
}
