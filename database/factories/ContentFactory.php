<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illluminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Content>
 */
class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Content_Id'=>$this->faker->randomNumber(5),
            'Project_Id'=>$this->faker->randomNumber(5),
            'filename'=>$this->faker->lastName(),
            'status'=>$this->faker->boolean()

        ];
    }
}
