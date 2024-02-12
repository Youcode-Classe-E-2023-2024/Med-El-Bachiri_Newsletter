<?php

namespace App\Listeners;

use App\Events\MemberSubscribed;
use App\Mail\MemberSubscribedMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmailOwnerAboutSubscription
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
    public function handle(MemberSubscribed $event): void
    {
        DB::table('members')->insert([
            'email' => $event->email
        ]);

        Mail::to($event->email)->send(new MemberSubscribedMessage($event->email));
    }
}
