<?php

namespace Database\Factories;

use App\Models\Conference;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConferenceFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Conference::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'acronym' => $this->faker->acronym(),
            'name' => $this->faker->name(),
            'description' => $this->faker->description(),
            'local' => $this->faker->local(),
            'updated_at ' => $this->faker->updated_at(),
            'created_at' => $this->faker->created_at(),
            'conferenceDate' => $this->faker->conferenceDate()
        ];
    }
} 