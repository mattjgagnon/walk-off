<?php

namespace App\Models;

class Game
{
    private array $teams;

    public function getTeams(): array
    {
        return $this->teams;
    }

    public function setTeam(Team $team): void
    {
        $this->teams[] = $team;
    }
}
