<?php

namespace Tests\Unit;

use App\Models\Game;
use App\Models\Team;
use Tests\TestCase;

class GameTest extends TestCase
{
    /**
     * @test
     */
    public function can_add_only_two_different_teams()
    {
        $team1 = Team::factory()->make();
        $team2 = Team::factory()->make();
        $game = new Game();
        $game->setTeam($team1);
        $game->setTeam($team2);

        $this->assertCount(2, $game->getTeams());

        $this->expectException('Exception');
        $team3 = Team::factory()->make();
        $game->setTeam($team3);
    }
}
