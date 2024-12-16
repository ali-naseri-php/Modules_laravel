<?php

namespace Modules\Search\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Article\Events\ArticleCreated;
use Modules\Search\Models\Searchable;

class AddArticleToSearch
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ArticleCreated $event): void
    {
        $article = $event->article;
        Searchable::firstOrCreate(
            ['searchable_id' => $article->id, 'searchable_type' => 'article'],
            ['title' => $article->title]
        );
    }
}
