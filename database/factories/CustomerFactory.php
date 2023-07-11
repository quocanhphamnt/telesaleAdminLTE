<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone'=> $this->faker->phoneNumber,
            'email'=> $this->faker->email,
            'address'=> $this->faker->address,
            'describe'=> $this->faker->text,
            'region'=> $this->faker->numberBetween(1,63),
            'gender'=> $this->faker->numberBetween(1,2),
            'id_group'=> $this->faker->numberBetween(1,4),
            'id_status'=> $this->faker->numberBetween(1,5),
        ];
    }
}
