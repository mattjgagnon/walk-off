<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    private string $name;
    private array $allTeams = [
        'Arizona Diamondbacks',
        'Atlanta Braves',
        'Baltimore Orioles',
        'Boston Red Sox',
        'Chicago White Sox',
        'Chicago Cubs',
        'Cincinnati Reds',
        'Cleveland Indians',
        'Colorado Rockies',
        'Detroit Tigers',
        'Houston Astros',
        'Kansas City Royals',
        'Los Angeles Angels',
        'Los Angeles Dodgers',
        'Miami Marlins',
        'Milwaukee Brewers',
        'Minnesota Twins',
        'New York Yankees',
        'New York Mets',
        'Oakland Athletics',
        'Philadelphia Phillies',
        'Pittsburgh Pirates',
        'San Diego Padres',
        'San Francisco Giants',
        'Seattle Mariners',
        'St. Louis Cardinals',
        'Tampa Bay Rays',
        'Texas Rangers',
        'Toronto Blue Jays',
        'Washington Nationals',
    ];

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        if (!in_array($name, $this->allTeams)) {
            throw new \Exception('Only valid MLB team names allowed');
        }

        $this->name = $name;
    }
}
