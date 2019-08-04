<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       // Tags creation in the DatabaseSeeder
        DB::table('tags')->insert([
          'tagName' => 'Vegana',
        ]);

        DB::table('tags')->insert([
          'tagName' => 'Vegetariana',
        ]);

        DB::table('tags')->insert([
          'tagName' => 'Salada',
        ]);

        DB::table('tags')->insert([
          'tagName' => 'Dulce',
        ]);

        DB::table('tags')->insert([
          'tagName' => 'Pastas',
        ]);

        DB::table('tags')->insert([
          'tagName' => 'Carnes',
        ]);

        DB::table('tags')->insert([
          'tagName' => 'Postres',
        ]);

        DB::table('tags')->insert([
          'tagName' => 'Sin TACC',
        ]);

        DB::table('tags')->insert([
          'tagName' => 'Light',
        ]);

        DB::table('tags')->insert([
          'tagName' => 'China',
        ]);

        DB::table('tags')->insert([
          'tagName' => 'Bebidas',
        ]);

        DB::table('tags')->insert([
          'tagName' => 'Chocolatosa',
        ]);

        DB::table('tags')->insert([
          'tagName' => 'Bomba de azúcar',
        ]);
      }
}
