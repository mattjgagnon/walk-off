<?php

namespace Tests\Unit;

use App\Models\Team;
use Tests\TestCase;

class TeamTest extends TestCase
{
    /**
     * @test
     */
    public function can_increment_a_team_win_and_get_team_wins()
    {
        $team = Team::factory()->make();
        $team->setWin();

        $this->assertEquals(1, $team->getWins());
    }

    /**
     * @test
     */
    public function can_increment_a_team_loss_and_get_team_losses()
    {
        $team = Team::factory()->make();
        $team->setLoss();

        $this->assertEquals(1, $team->getLosses());
    }

    /**
     * @test
     */
    public function can_get_team_win_percentage()
    {
        $team = Team::factory()->make();
        $team->setWin();

        $this->assertEquals(100, $team->getWinPercentage());

        $team->setLoss();

        $this->assertEquals(50, $team->getWinPercentage());
    }

    /**
     * @test
     */
    public function can_set_and_get_a_name()
    {
        $team = Team::factory()->make();
        $team->setName('Boston Red Sox');
        $this->assertEquals('Boston Red Sox', $team->getName());
    }

    /**
     * @test
     */
    public function setting_an_invalid_name_generates_an_exception()
    {
        $this->expectException('Exception');
        $team = Team::factory()->make();
        $team->setName('An Invalid Team Name');
    }

    /**
     * @test
     */
    public function can_get_all_team_names()
    {
        $team = Team::factory()->make();
        $this->assertCount(30, $team->getAll());
    }
}
