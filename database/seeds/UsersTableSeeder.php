<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

// Creacion de usuario Maru en la base de datos
     public function run()
     {
       // Creacion de usuario en la base de datos
        DB::table('users')->insert([
          'username' => 'Maria Elisa',
          'email' => 'maru@gmail.com',
          'password' => bcrypt('marucapa'),
      ]);

// Creacion de usuario Naza en la base de datos

        DB::table('users')->insert([
          'username' => 'Nazarena',
          'email' => 'naza@gmail.com',
          'password' => bcrypt('nazacapa'),
 ]);

// Creacion de usuario MP en la base de datos

        DB::table('users')->insert([
          'username' => 'Maria Paula',
          'email' => 'mariap@gmail.com',
          'password' => bcrypt('mpcapa'),
 ]);
}
}
