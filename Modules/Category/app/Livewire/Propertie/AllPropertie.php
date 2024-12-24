<?php

namespace Modules\Category\Livewire\Propertie;


use Illuminate\Http\Request;
use Livewire\Component;
use Modules\Category\Services\Propertie\AllPropertieServies;

class AllPropertie extends Component
{
    public function render(AllPropertieServies $allPropertieServies,Request $request)
    {
        return view('category::livewire.propertie.all-propertie',['propertis'=>$allPropertieServies->all($request->page)])->layout('homepagemodule::layouts.app');
    }
}
