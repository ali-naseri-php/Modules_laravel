<?php

namespace Modules\Search\Services;

use Modules\Search\Models\Searchable;

class SearchAllServices
{
    public function search($name)
    {
        dd('all');
        $data =Searchable::where('title', 'LIKE', "%$name%")->get();
      dd($data);
        return  $data;

    }
}
