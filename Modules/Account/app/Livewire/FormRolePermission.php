<?php

namespace Modules\Account\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Modules\Account\Services\AllPermissionServices;
use Modules\Account\Services\AllRoleServices;

class FormRolePermission extends Component
{
    public function render(AllRoleServices $allRoleServices,AllPermissionServices $allPermissionServices)
    {
        return view('account::livewire.form-role-permission',[
            'roles' => $allRoleServices->all(),
            'permissions' => $allPermissionServices->all()
            ])->layout('homepagemodule::layouts.app');
    }
}
