<?php

namespace Modules\Category\Livewire\Propertie;


use Illuminate\Http\Request;
use Livewire\Component;
use Modules\Category\Services\Category\AllCategoryServics;
use Modules\Category\Services\Propertie\ShowPropertieServices;


class EditePropertie extends Component
{
    public $id;
    public function mount($id)
    {
        $this->id = $id;
    }
    public function render(AllCategoryServics $allCategoryServics, ShowPropertieServices $propertieServices )
    {

        return view('category::livewire.propertie.edite-propertie',[
            'categorys'=>$allCategoryServics->all_category(),
            'data'=>$propertieServices->show($this->id)
        ])->layout('category::layouts.app');
    }
}
