<?php

namespace Modules\Account\Livewire;

use Livewire\Component;

class FormLogin extends Component
{
    public function render()
    {
        return view('account::livewire.form-login')->layout('homepagemodule::layouts.app');
    }
}
