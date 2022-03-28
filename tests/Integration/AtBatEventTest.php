<?php

namespace Tests\Integration;

use App\Models\AtBat;
use App\Models\AtBatEvent;
use App\Models\Game;
use App\Models\Player;
use Tests\TestCase;

class AtBatEventTest extends TestCase
{
    /**
     * @test
     * @todo Implement fully
     */
    public function can_hit_a_walkoff_home_run(): void
    {
        $player = new Player();
        $atBat = new AtBat(3, 2);
        $atBat->setPlayer($player);
        $atBatEvent = new AtBatEvent($player, $atBat);
        $atBatEvent->setIsAFairBall(true);
        $game = new Game();
        $game->setAtBatEvent($atBatEvent);

        $this->assertTrue($atBatEvent->isAHit());
        $this->assertTrue($atBatEvent->isAHomeRun());
        $this->assertTrue($atBatEvent->isAGoAheadRBI());
        $this->assertTrue($atBatEvent->isAPlayerFromHomeTeam());
        $this->assertTrue($game->IsNinthInningOrLater());
    }

    /** @test */
    public function can_not_get_a_hit(): void
    {
        $player = new Player();
        $atBat = new AtBat(3, 2);
        $atBat->setPlayer($player);
        $atBatEvent = new AtBatEvent($player, $atBat);
        $atBatEvent->setIsBallCaught(true);
        $atBatEvent->setIsAFairBall(true);

        $this->assertFalse($atBatEvent->isAHit());
    }
}
