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

    /**
     * @test
     */
    public function can_start_a_new_game_with_two_teams()
    {
        $team1 = Team::factory()->make();
        $team2 = Team::factory()->make();
        $game = new Game();
        $game->setTeam($team1);
        $game->setTeam($team2);
        $game->start();

        $this->assertTrue($game->start());
    }

    /**
     * @test
     */
    public function trying_to_start_a_new_game_with_less_than_two_teams_throws_an_exception()
    {
        $team1 = Team::factory()->make();
        $game = new Game();
        $game->setTeam($team1);

        $this->expectException('Exception');
        $this->assertTrue($game->start());
    }
}
