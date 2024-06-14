<?php

namespace Database\Seeders;

use App\DB\Models\Employee;
use App\DB\Models\Goal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

         Employee::query()->create([
             'first_name' => 'Grzegorz',
             'last_name' => 'Szydłowski',
         ]);

        Goal::query()->create([
            'name' => 'rozwiazac_zadanie_rek',
            'description' => 'Zrobic zadanie rekrutacyjne',
        ]);
    }
}
