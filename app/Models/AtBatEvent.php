<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtBatEvent extends Model
{
    use HasFactory;

    private Player $player;
    private AtBat $atBat;

    public function __construct(Player $player, AtBat $atBat)
    {
        $this->atBat = $atBat;
        $this->player = $player;
    }

    /**
     * @todo Implement
     */
    public function isAFairBall(): bool
    {
        return true;
    }

    /**
     * @todo Implement
     */
    public function isAGoAheadRBI(): bool
    {
        return true;
    }

    public function isAHit()
    {
        if ($this->player->makesContact() && $this->isAFairBall() && !$this->isBallCaught()) {
            return true;
        }

        return false;
    }

    /**
     * @todo Implement
     */
    public function isAHomeRun(): bool
    {
        return true;
    }

    /**
     * @todo Implement
     */
    public function isAPlayerFromHomeTeam(): bool
    {
        return true;
    }

    /**
     * @todo Implement
     */
    public function isBallCaught(): bool
    {
        return false;
    }

    /**
     * @todo Implement
     */
    public function isNinthInningOrLater(): bool
    {
        return true;
    }
}
