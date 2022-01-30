<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentClassFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $num = 1;
        return [
            'name' => $num++,
        ];
    }
}
