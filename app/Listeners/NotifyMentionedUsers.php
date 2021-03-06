<?php

namespace App\Listeners;

use App\Notifications\YouWhereMentioned;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyMentionedUsers
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $event->reply->mentionedUsers()->each->notify(new YouWhereMentioned($event->reply));
    }
}
