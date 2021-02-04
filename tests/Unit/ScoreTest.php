<?php

namespace Tests\Unit;

use App\Models\Score;
use PHPUnit\Framework\TestCase;

class ScoreTest extends TestCase
{
    /**
     * @test
     */
    public function can_increment_team_scores()
    {
        $score = new Score();
        $score->incrementHome(3);
        $score->incrementAway(1);

        $this->assertEquals(3, $score->getHome());
        $this->assertEquals(1, $score->getAway());
    }

    /**
     * @test
     */
    public function incrementing_home_team_score_by_less_than_one_throws_exception()
    {
        $score = new Score();

        $this->expectException('Exception');
        $score->incrementHome(-1);
    }

    /**
     * @test
     */
    public function incrementing_away_team_score_by_less_than_one_throws_exception()
    {
        $score = new Score();

        $this->expectException('Exception');
        $score->incrementAway(0);
    }

    /**
     * @test
     */
    public function can_tell_if_home_team_is_winning()
    {
        $score = new Score();
        $score->incrementHome(3);
        $score->incrementAway(1);

        $this->assertTrue($score->getHome() > $score->getAway());
    }
}
