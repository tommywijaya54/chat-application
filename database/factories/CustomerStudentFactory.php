<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerStudent>
 */
class CustomerStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'school' => $this->faker->randomElement([
                "Tzu Chi",
                "Permai Plus",
                "Penabur",
                "SIS",
                "IPEKA",
                "SPH",
                "Cikal",
                "Bent Tree",
            ]),
            'grade' => $this->faker->randomElement([
                "2",
                "3",
                "4",
                "5",
                "6",
                "7",
                "8",
                "9",
                "10",
                "11",
                "12",
            ]),
            'phone'     => $this->faker->phoneNumber,
            'email'     => $this->faker->safeEmail,
            'customer_parent_id' => "1",

        ];
    }
}
