<?php

namespace Database\Seeders;

use App\Models\CustomerParent;
use App\Models\CustomerStudent;
use Database\Factories\CustomerParentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerParentAndStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // CustomerParentFactory::factory()->create();

        $parent1 = CustomerParent::factory()->create();
        CustomerStudent::factory()->create(['customer_parent_id' => $parent1->id,]);
        CustomerStudent::factory()->create(['customer_parent_id' => $parent1->id,]);

        $parent2 = CustomerParent::factory()->create();
        CustomerStudent::factory()->create(['customer_parent_id' => $parent2->id,]);

        $parent3 = CustomerParent::factory()->create();
        CustomerStudent::factory()->create(['customer_parent_id' => $parent3->id,]);
        CustomerStudent::factory()->create(['customer_parent_id' => $parent3->id,]);
        CustomerStudent::factory()->create(['customer_parent_id' => $parent3->id,]);
        CustomerStudent::factory()->create(['customer_parent_id' => $parent3->id,]);


        /*
        $parent1 = CustomerParent::create([
            'name' => fake()->name(),
            'phone' => '',
            'address' => '',
        ]);

        /*
        $table->string('name');
        $table->string('phone');
        $table->string('address');
        $table->string('email')->nullable();
        $table->string('nik')->nullable();
        $table->date('birthdate')->nullable();
        $table->text('note')->nullable();
        */
        // CustomerParentAndStudentSeeder
        // CustomerParentAndStudentSeeder
        /*
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
