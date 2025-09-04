<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employeeID' => $this->faker->unique()->numerify('EMP###'),   // e.g. EMP123
            'name'       => $this->faker->name(),                         // full name
            'department' => $this->faker->randomElement([
                                'IT', 'Finance', 'HR', 'Marketing', 'Operations'
                             ]),                                          // realistic departments
            'role'       => $this->faker->jobTitle(),                     // real job title
            'location'   => $this->faker->city(),                         // city/location
        ];
    }
}
