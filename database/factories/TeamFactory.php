<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class TeamFactory extends Factory
{
    use WithFaker;

    private array $teamNames = [
        'Boston Red Sox',
        'Los Angeles Angels of Anaheim',
        'Los Angeles Dodgers',
        'New York Yankees',
        'Toronto Blue Jays',
    ];

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement($this->teamNames),
        ];
    }
}
