<?php

namespace Modules\ProductManagement\Livewire\Kala;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Modules\ProductManagement\Http\Requests\CreateKalaRequest;
use Modules\ProductManagement\Services\Kala\PropertiForAddKalaServices;


class CreateKala extends Component
{
    public function mount(CreateKalaRequest $request)
    {

    }
    public function render(PropertiForAddKalaServices $addKalaServices)
    {

        return view('productmanagement::livewire.kala.create-kala',['properti'=>$addKalaServices->all()])->layout('productmanagement::layouts.app');
    }
}
