<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Producte;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(1)->create([
        	"name"=>"aleix",
        	"email"=>"aleix@gmail.com",
        	"password"=>bcrypt("password")
        ]);

        Producte::factory()->times(20)->create();
    }
}
