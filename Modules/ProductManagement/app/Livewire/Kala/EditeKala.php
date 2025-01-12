<?php

namespace Modules\ProductManagement\Livewire\Kala;


use Illuminate\Http\Request;
use Livewire\Component;
use Modules\ProductManagement\Models\Kala;
use Modules\ProductManagement\Services\Kala\AllCategoryServices;
use Modules\ProductManagement\Services\Kala\PropertiForKalaServices;
use Modules\ProductManagement\Services\Kala\SelectCtegoryForKalaServices;

class EditeKala extends Component
{
    protected $category_kala;
    protected $id;
    public function mount(SelectCtegoryForKalaServices $kalaServices,$id)
    {
        $this->id=$id;
         $this->category_kala=$kalaServices->selects();
//dd($this->category_kala);


    }
    public function render(PropertiForKalaServices $propertiForKalaServices ,)
    {
//        dd($this->category_kala);
        return view('productmanagement::livewire.kala.edite-kala',[
            'category'=>$this->category_kala,
            'kala'=>Kala::find($this->id),
            'properti'=>$propertiForKalaServices->all($this->category_kala->id)
        ])->layout('homepagemodule::layouts.app');
    }
}
