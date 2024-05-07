<?php

namespace Database\Seeders;

use App\Models\ModelCategoria;
use App\Models\User;
use App\Models\Ave;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //ModelCategoria::Factory(10)->create();

        Ave::Factory(10)->create();

        //User::factory()->create([
          //  'name' => 'Test User',
           // 'email' => 'test@example.com',
       // ]);
    }
}
