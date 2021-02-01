<?php

namespace Tests\Unit;

use App\Models\Game;
use App\Models\Team;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /**
     * @test
     */
    public function has_two_teams()
    {
        $team1 = new Team();
        $team1->setName('Boston Red Sox');
        $team2 = new Team();
        $team2->setName('New York Yankees');
        $game = new Game();
        $game->setTeam($team1);
        $game->setTeam($team2);
        $this->assertCount(2, $game->getTeams());
    }
}
