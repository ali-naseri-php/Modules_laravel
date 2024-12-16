<?php

namespace Modules\Search\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Category\Events\CategoryCreated;
use Modules\Search\Models\Searchable;

class AddCategoryToSearch
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
    public function handle(CategoryCreated $event): void
    {
        $category = $event->category;
        Searchable::firstOrCreate(
            ['searchable_id' => $category->id, 'searchable_type' => 'category'],
            ['title' => $category->name]
        );
    }
}
