<?php

namespace Modules\Account\Livewire;

use Livewire\Component;
use Modules\Account\Services\AllRoleServices;
use Modules\Account\Services\AllUserServices;

class FormRoleUser extends Component
{
    public function render(AllRoleServices $allRoleServices,AllUserServices $allUserServices)
    {
        return view('account::livewire.form-role-user',[
            'roles' => $allRoleServices->all(),
            'users' => $allUserServices->all()
        ])->layout('homepagemodule::layouts.app');
    }
}
