<?php

namespace Modules\Search\Livewire;

use Livewire\Component;

class FormSearch extends Component
{
    public function render()
    {
        return view('search::livewire.form-search')->layout('homepagemodule::layouts.app');

    }
}
