<?php

namespace App\Listeners;

use App\Events\ActivationEvent;
use Mail;
use App\Mail\ActivationMailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActivationEmailSender
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ActivationEvent  $event
     * @return void
     */
    public function handle(ActivationEvent $event)
    {
        $user = $event->user;
        $activation = $event->activation;
        $detail = [
            'id'=> $user->id,
            'email'=> $user->email,
            'code'=> $activation->code,
        ];
        Mail::to($user->email)->queue(new ActivationMailable($detail));
    }
}
