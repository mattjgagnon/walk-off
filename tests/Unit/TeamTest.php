<?php

namespace Tests\Unit;

use App\Models\Team;
use PHPUnit\Framework\TestCase;

class TeamTest extends TestCase
{
    /**
     * @test
     */
    public function can_set_and_get_a_name()
    {
        $team = new Team();
        $team->setName('Boston Red Sox');
        $this->assertEquals('Boston Red Sox', $team->getName());
    }

    /**
     * @test
     */
    public function setting_an_invalid_name_generates_an_exception()
    {
        $this->expectException('Exception');
        $team = new Team();
        $team->setName('An Invalid Team Name');
    }
}
