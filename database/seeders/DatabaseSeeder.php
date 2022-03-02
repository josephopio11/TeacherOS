<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create();
        // \App\Models\Subject::factory(1)->create();
        // \App\Models\Teacher::factory(1)->create();
        // \App\Models\StudentClass::factory(13)->create();
        \App\Models\Lesson::factory(1)->create();
    }
}
