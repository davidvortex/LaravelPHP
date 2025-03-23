<?php

namespace Database\Seeders;

use App\Models\Prueba;
use App\Models\User;
use Database\Seeders\prueba as SeedersPrueba;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PruebaSeeder::class
        ]);


        $user = new User();
        $user->name = 'david jesus coronado';
        $user->email = 'davidjesusu@hotmail.com';
        $user->password = '12323234';
        $user->save();

        $user = new User();
        $user->name = 'Alejandra ortiz';
        $user->email = 'aleortiz@hotmail.com';
        $user->password = '17239683';
        $user->save();
    }
}
