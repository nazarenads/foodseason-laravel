<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public function run()
     {
// Creacion de recetas de Maru en la base de datos
              DB::table('recipes')->insert([
                'title' => 'Grisines de harina de maíz',
                'recipeBody' => '(Puede ser semita o polenta) Ingredientes: 2 tazas de harina blanca o integral fina / 1 huevo (opción) / 3 cas. de aceite / 1 cda al ras de levadura / 1 cdita de sal marina / Agua tibia cantidad necesaria (+/- 2 tazas). Receta: Se diluye en el agua tibia la levadura, aceite y sal. Luego se agrega la harina. Se puede agregar a la masa un poco de orégano, cebolla rallada ( p/ copetín). Dejar reposar ½ hora tapado. Luego se hacen los palitos. Y se colocan en la asadera aceitada y enharinada. Va 30 minutos a horno moderado. Con la misma masa se pueden hacer tortitas tipo galleta marinera (se pincha con tenedor, y luego se le espolvorea sésamo. En vez de sal, se puede agregar miel o frutas secas.',
                'photoName' => '',
                'user_id' => '1',
                'tag_id' => '3',
                'image' => '',
            ]);
    }
}
