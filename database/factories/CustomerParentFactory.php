<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerParent>
 */
class CustomerParentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'      => fake()->name(),
            'phone'     => $this->faker->phoneNumber,
            'address'   => $this->faker->address,
            'email'     => $this->faker->safeEmail,
            'nik'       => fake()->randomNumber(8, true),
            'birthdate' => $this->faker->date(),
        ];

        /*
        $table->string('name');
        $table->string('phone');
        $table->string('address');
        $table->string('email')->nullable();
        $table->string('nik')->nullable();
        $table->date('birthdate')->nullable();
        $table->text('note')->nullable();

        return [
            "name" => $this->faker->name(),
            "email" => $this->faker->safeEmail,
            "mobile" => $this->faker->phoneNumber,
            "age" => $this->faker->numberBetween(25, 45),
            "gender" => $this->faker->randomElement([
                "male",
                "female",
                "others"
            ]),
            "address_info" => $this->faker->address
        ];
        */
    }
}
