<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Sentinel,Activation;
use App\User;

class ActivationEvent
{
    use InteractsWithSockets, SerializesModels;
    public $user;
    public $activation;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $activation)
    {
        $this->user=$user;
        $this->activation=$activation;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
