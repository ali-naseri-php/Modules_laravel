<?php

namespace Modules\Search\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\ProductManagement\Events\ProductCreated;
use Modules\Search\Models\Searchable;

class AddProductToSearch
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
    public function handle(ProductCreated $event)
    {
        $kala = $event->kala;

        // اضافه کردن داده‌ها به جدول جستجو
        Searchable::firstOrCreate(
            ['searchable_id' => $kala->id, 'searchable_type' => 'product'],
            ['title' => $kala->name]
        );
    }
}
