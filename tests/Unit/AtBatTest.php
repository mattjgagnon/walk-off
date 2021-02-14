<?php

namespace Tests\Unit;

use App\Models\AtBat;
use Tests\TestCase;

class AtBatTest extends TestCase
{
    /**
     * @test
     */
    public function is_a_full_count()
    {
        $atBat = new AtBat(3, 2);

        $this->assertTrue($atBat->isFullCount());
    }

    /**
     * @test
     */
    public function is_not_a_full_count()
    {
        $atBat = new AtBat(3, 1);

        $this->assertFalse($atBat->isFullCount());
    }

    /**
     * @test
     */
    public function is_a_strikeout()
    {
        $atBat = new AtBat(3, 3);

        $this->assertTrue($atBat->isAStrikeout());
    }

    /**
     * @test
     */
    public function is_not_a_strikeout()
    {
        $atBat = new AtBat(3, 0);

        $this->assertFalse($atBat->isAStrikeout());
    }

    /**
     * @test
     */
    public function has_no_more_than_four_balls()
    {
        $atBat = new AtBat();
        $atBat->setBalls(4);

        $this->assertEquals(4, $atBat->getBalls());
    }

    /**
     * @test
     */
    public function more_than_four_balls_throws_an_exception()
    {
        $atBat = new AtBat();

        $this->expectException('Exception');
        $atBat->setBalls(5);
    }

    /**
     * @test
     */
    public function has_no_more_than_three_strikes()
    {
        $atBat = new AtBat();
        $atBat->setStrikes(3);

        $this->assertEquals(3, $atBat->getStrikes());
    }

    /**
     * @test
     */
    public function more_than_three_strikes_throws_an_exception()
    {
        $atBat = new AtBat();

        $this->expectException('Exception');
        $atBat->setStrikes(4);
    }
}
