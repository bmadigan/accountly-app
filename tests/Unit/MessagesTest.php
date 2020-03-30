<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Message;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MessagesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_message_can_be_subscribed_to()
    {
        // Given I have a user
        $user = $this->signIn();

        // Given I have a message
        $message = factory(Message::class)->create();

        // A user can subscribe to message
        $message->subscribe($user);

        // assertions
        $this->assertTrue($message->is_subscribed());
    }
}
