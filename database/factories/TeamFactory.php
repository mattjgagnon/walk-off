<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class TeamFactory extends Factory
{
    use WithFaker;

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
        $team = new Team();
        $allTeams = $team->getAll();
        return [
            'losses' => $this->faker->randomDigit,
            'name' => $this->faker->unique()->randomElement($allTeams),
            'wins' => $this->faker->randomDigit,
        ];
    }
}
