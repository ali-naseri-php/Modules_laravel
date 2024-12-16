<?php

namespace Modules\Article\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Modules\Article\Models\Article;

class ArticleCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
public $article;
    /**
     * Create a new event instance.
     */
    public function __construct(Article $article)
    {
        $this->article = $article;

    }

    /**
     * Get the channels the event should be broadcast on.
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
