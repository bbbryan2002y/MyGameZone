<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// se importa el model User.
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //llamos el modelo - Crear un modelo en BD
        User::Create([
            'name' => 'El Bryan',
            'email' => 'bbb@.nada.com',
            'password' => bcrypt('nada123')
        ]);



    }
}
