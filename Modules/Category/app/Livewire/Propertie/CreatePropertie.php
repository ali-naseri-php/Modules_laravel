<?php

namespace Modules\Category\Livewire\Propertie;

use Livewire\Component;
use Modules\Category\Services\Category\AllCategoryServics;

class CreatePropertie extends Component
{
    public $name;
    public $id_category;
    public function render(AllCategoryServics $allCategoryServics)
    {
        return view('category::livewire.propertie.create-propertie', array('categorys' => $allCategoryServics->all_category()))->layout('homepagemodule::layouts.app');
    }
}
