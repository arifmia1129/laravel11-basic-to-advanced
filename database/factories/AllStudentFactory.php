<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AllStudent>
 */
class AllStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->name(),
            'class'=> fake()->randomAscii(),
            'student_id'=> fake()->randomAscii(),
            'description'=>fake()->paragraph()
        ];
    }
}
