<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    private bool $start;
    private array $teams;

    public function __construct()
    {
        parent::__construct();
        $this->teams = [];
    }

    public function start(): bool
    {
        if (count($this->teams) > 1) {
            $this->start = true;
        } else {
            throw new \Exception('Not enough teams to start a game');
        }

        return $this->start;
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
