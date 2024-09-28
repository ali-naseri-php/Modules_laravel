<?php

namespace Modules\Category\Services\Propertie;


use Modules\Category\Models\Propertie;

class DestroyPropertieServies
{
    public function destroy($id)
    {
        $propertie = Propertie::find($id);
        $states = $propertie->delete();
        return $states;

    }

}
