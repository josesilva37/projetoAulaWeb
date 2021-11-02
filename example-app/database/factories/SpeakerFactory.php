<?php

namespace Database\Factories;

use App\Models\Speaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpeakerFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Speaker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'affiliation' => $this->faker->affiliation(),
            'biography' => $this->faker->biography(),
            'speakerType' => $this->faker->speakerType(),
            'socialNetworks' => $this->faker->socialNetworks(),
            'pageLink' => $this->faker->pageLink(), 
        ];
    }
}    