<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    private int $home;

    public function __construct(int $home = 0, int $away = 0)
    {
        $this->away = $away;
        $this->home = $home;
    }

    public function getHome(): int
    {
        return $this->home;
    }

    public function incrementHome(int $home): void
    {
        $this->guardAgainstLessThanOneRun($home);
        $this->home += $home;
    }

    public function getAway(): int
    {
        return $this->away;
    }

    public function incrementAway(int $away): void
    {
        $this->guardAgainstLessThanOneRun($away);
        $this->away += $away;
    }

    protected function guardAgainstLessThanOneRun(int $teamScoreIncrement): void
    {
        if ($teamScoreIncrement < 1) {
            throw new Exception('You must add at least one run');
        }
    }
}
