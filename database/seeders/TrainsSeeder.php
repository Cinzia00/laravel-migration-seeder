<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;


class TrainsSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 150; $i++) {
            $new_train = new Train(); 
            $new_train->azienda = $faker->randomElement(['Trenitalia', 'Freccia Rossa', 'Italo', 'Trenino']);
            $new_train->stazione_di_partenza = $faker->randomElement(['Roma', 'Verona', 'Catania', 'Milano', 'Palermo', 'Bari', 'Napoli', 'Cagliari', 'Firenze', 'Bologna', 'Perugia']);
            $new_train->stazione_di_arrivo = $faker->randomElement(['Roma', 'Verona', 'Catania', 'Pisa', 'Palermo', 'Bari', 'Napoli', 'Genova', 'Firenze', 'Bologna', 'Perugia']);
            $new_train->orario_di_partenza = $faker->date('Y_m_d');
            $new_train->orario_di_arrivo = $faker->date('Y_m_d');
            $new_train->codice_treno = $faker->numerify('########');
            $new_train->numero_totale_posti = $faker->numberBetween(50, 100);
            $new_train->numero_totale_passeggeri = $faker->numberBetween(1, 100);
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();
            $new_train->save();
        }
    }
}
