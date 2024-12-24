<?php

namespace Modules\Account\Livewire;

use Livewire\Component;

class FormRole extends Component
{
    public function render()
    {
        return view('account::livewire.form-role')->layout('homepagemodule::layouts.app');
    }
}
