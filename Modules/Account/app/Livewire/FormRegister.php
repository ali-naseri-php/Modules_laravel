<?php

namespace Modules\Account\Livewire;

use Livewire\Component;

class FormRegister extends Component
{
    public function render()
    {
        return view('account::livewire.form-register')->layout('account::layouts.app');
    }
}
