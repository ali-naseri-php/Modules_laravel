<?php

namespace Modules\Search\Services;

use Modules\Search\Models\Searchable;

class SearchWithWhereServices
{
    public function search($name,$where)
    {

        $data =Searchable::where('title', 'LIKE', "%$name%")
            ->where('searchable_type','=',$where)->get();
      dd($data);
        return  $data;

    }
}

