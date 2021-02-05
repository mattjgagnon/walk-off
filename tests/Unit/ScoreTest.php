<?php

namespace Tests\Unit;

use App\Models\Score;
use PHPUnit\Framework\TestCase;

class ScoreTest extends TestCase
{
    private Score $score;

    protected function setUp(): void
    {
        parent::setUp();
        $this->score = new Score();
    }

    /**
     * @test
     */
    public function can_increment_team_scores()
    {
        $this->score->incrementHome(3);
        $this->score->incrementAway(1);

        $this->assertEquals(3, $this->score->getHome());
        $this->assertEquals(1, $this->score->getAway());
    }

    /**
     * @test
     */
    public function incrementing_home_team_score_by_less_than_one_throws_exception()
    {
        $this->expectException('Exception');
        $this->score->incrementHome(-1);
    }

    /**
     * @test
     */
    public function incrementing_away_team_score_by_less_than_one_throws_exception()
    {
        $this->expectException('Exception');
        $this->score->incrementAway(0);
    }

    /**
     * @test
     */
    public function can_tell_if_home_team_is_winning()
    {
        $this->score->incrementHome(3);
        $this->score->incrementAway(1);

        $this->assertTrue($this->score->isHomeTeamWinning());
    }
}
