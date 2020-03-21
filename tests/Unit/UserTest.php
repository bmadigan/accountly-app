<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function a_user_has_teams()
    {
        $user = $this->signIn();

        $this->assertInstanceOf(Collection::class, $user->teams);
    }
}
