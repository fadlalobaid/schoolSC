<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'classname' => $this->faker->words(1, true),
            'academic_level' => $this->faker->words(1, true),
            'status'=>$this->faker->randomElement([
                "active",
                "inactive",
            ]),
        ];
    }
}
