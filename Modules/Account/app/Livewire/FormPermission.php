<?php

namespace Modules\Account\Livewire;

use Livewire\Component;

class FormPermission extends Component
{
    public function render()
    {
        return view('account::livewire.form-permission')->layout('homepagemodule::layouts.app');
    }
}
