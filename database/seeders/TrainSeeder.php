<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //ciclo for per generare tot record nella tabella con i dati relativi
        for ($i=0; $i < 10; $i++) {
            $new_train = new Train();
            $new_train->azienda = $faker->company();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->time();
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->codice_treno = $faker->bothify('???-#####');
            $new_train->numero_carrozze = $faker->numberBetween(1, 20);
            $new_train->in_orario = $faker->randomElement([true,false]);
            $new_train->cancellato = $faker->numberBetween(['si', 'no']);
            $new_train->save();
        }
    }
}