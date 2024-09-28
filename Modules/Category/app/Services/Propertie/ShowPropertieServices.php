<?php

namespace Modules\Category\Services\Propertie;




use Modules\Category\Models\Propertie;

class  ShowPropertieServices
{

    public function  show($id)
    {
//        dd($id);
        return Propertie::find( $id);



    }

}
