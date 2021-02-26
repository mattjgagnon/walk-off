<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtBatEvent extends Model
{
    use HasFactory;

    private Player $player;
    private AtBat $atBat;
    private bool $isBallCaught = false;

    public function __construct(Player $player, AtBat $atBat)
    {
        parent::__construct();
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

    public function isBallCaught(): bool
    {
        return $this->isBallCaught;
    }

    public function setIsBallCaught(bool $isBallCaught): void
    {
        $this->isBallCaught = $isBallCaught;
    }
}
