<?php

namespace Tests\Unit;

use App\Models\Player;
use Tests\TestCase;

class PlayerTest extends TestCase
{
    /**
     * @test
     */
    public function can_set_and_get_name()
    {
        $player = Player::factory()->make();

        $this->assertIsString($player->getName());
    }
}
