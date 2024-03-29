<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtBat extends Model
{
    use HasFactory;

    private int $balls = 0;
    private int $strikes = 0;
    private Player $player;

    public function __construct(int $balls = 0, int $strikes = 0)
    {
        parent::__construct();
        $this->setBalls($balls);
        $this->setStrikes($strikes);
    }

    public function getBalls()
    {
        return $this->balls;
    }

    /**
     * @return array: balls, strikes
     */
    public function getCount(): array
    {
        return [$this->balls, $this->strikes];
    }

    public function getStrikes(): int
    {
        return $this->strikes;
    }

    public function isFullCount(): bool
    {
        if ($this->balls == 3 && $this->strikes == 2) {
            return true;
        }

        return false;
    }

    public function isHitterAheadInCount()
    {
        if ($this->balls > $this->strikes) {
            return true;
        }

        return false;
    }

    public function isPitcherAheadInCount()
    {
        if ($this->balls < $this->strikes) {
            return true;
        }

        return false;
    }

    public function isAStrikeout(): bool
    {
        if ($this->strikes == 3) {
            return true;
        }

        return false;
    }

    public function isAWalk(): bool
    {
        if ($this->balls == 4) {
            return true;
        }

        return false;
    }

    public function setBalls(int $balls = 0): void
    {
        if ($this->balls + $balls > 4) {
            throw new \Exception('There can be no more than four balls in an at bat.');
        }

        $this->balls = $balls;
    }

    public function setPlayer(Player $player): void
    {
        $this->player = $player;
    }

    public function setStrikes(int $strikes = 0): void
    {
        if ($this->strikes + $strikes > 3) {
            throw new \Exception('There can be no more than three strikes in an at bat.');
        }

        $this->strikes = $strikes;
    }
}
