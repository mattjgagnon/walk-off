<?php

namespace Tests\Integration;

use App\Models\Game;
use App\Models\Team;
use Tests\TestCase;

class GameTest extends TestCase
{
    private Game $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game();
    }

    /**
     * @test
     */
    public function can_add_only_two_different_teams()
    {
        $this->initGame();

        $this->assertCount(2, $this->game->getTeams());

        $this->expectException('Exception');
        $team3 = Team::factory()->make();
        $this->game->setTeam($team3);
    }

    /**
     * @test
     */
    public function can_start_a_new_game_with_two_teams()
    {
        $this->initGame();

        $this->assertTrue($this->game->start());
    }

    /**
     * @test
     */
    public function trying_to_start_a_new_game_with_less_than_two_teams_throws_an_exception()
    {
        $team1 = Team::factory()->make();
        $this->game->setTeam($team1);

        $this->expectException('Exception');
        $this->assertTrue($this->game->start());
    }

    private function initGame(): void
    {
        $team1 = Team::factory()->make();
        $team2 = Team::factory()->make();
        $this->game = new Game();
        $this->game->setTeam($team1);
        $this->game->setTeam($team2);
    }
}
