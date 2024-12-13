<?php

namespace Modules\Article\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Article\Services\AccessServices;

class ArticlePolicy
{
    use HandlesAuthorization;

    public function store()
    {
        $accessServices = app(AccessServices::class);

        return $accessServices->auth('article-store');

    }
    public function delete()
    {
        $accessServices = app(AccessServices::class);

        return $accessServices->auth('article-delete');

    }

}
