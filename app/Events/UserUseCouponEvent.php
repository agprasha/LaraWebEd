<?php

namespace App\Events;

use App\Events\Event;
use App\Models\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\Models\Coupon;

class UserUseCouponEvent extends Event
{
    use SerializesModels;

    public $coupon, $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Coupon $coupon, User $user)
    {
        $this->coupon = $coupon;
        $this->user = $user;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
