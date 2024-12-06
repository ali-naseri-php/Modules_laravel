<?php

namespace Modules\Account\Services;


use Modules\Account\Models\User;


class  AllUserServices
{
    public function all()
    {
     $allUser = User::all();
     return $allUser;
    }
}
