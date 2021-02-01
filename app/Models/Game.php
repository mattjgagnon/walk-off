<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    private array $teams;

    public function __construct()
    {
        parent::__construct();
        $this->teams = [];
    }

    public function getTeams(): array
    {
        return $this->teams;
    }

    public function setTeam(Team $team): void
    {
        if (count($this->teams) > 1) {
            throw new \Exception('Only two teams are allowed');
        }

        $this->teams[] = $team;
    }
}
