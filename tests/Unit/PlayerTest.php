<?php

namespace Tests\Unit;

use App\Models\Player;
use Tests\TestCase;

class PlayerTest extends TestCase
{
    /** @test */
    public function can_set_and_get_name(): void
    {
        $player = new Player();
        $player->setName('Matt Gagnon');

        $this->assertIsString($player->getName());
    }
}
