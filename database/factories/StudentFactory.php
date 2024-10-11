<?php

namespace Database\Factories;
use App\Models\Classroom;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'number' => $this->faker->unique()->randomNumber(9, true),
            'classroom_id'=>Classroom::inRandomOrder()->first()->id,
            'birthday' => $this->faker->date('Y-m-d'),
            'status'=>$this->faker->randomElement([
                "active",
                "inactive",
            ]),

        ];
    }
}
