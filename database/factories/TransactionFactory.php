<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $amount = $this->faker->randomFloat(2, 0.01, 9999999.99);
        $type = $this->faker->randomElement(['buy', 'sell']);

        return [
            'user_id' => 1, // Hardcoded user ID for example, replace as needed
            'amount' => $amount,
            'detail' => $this->faker->paragraph(),
            'type' => $type,
        ];
    }
}
