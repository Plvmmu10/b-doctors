<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Typology;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typologies = [
            ['name' => 'Dermatologo'],
            ['name' => 'Cardiologo'],
            ['name' => 'Pediatra'],
            ['name' => 'Ortopedico'],
            ['name' => 'Ginecologo'],
            ['name' => 'Neurologo'],
            ['name' => 'Psichiatra'],
            ['name' => 'Oculista'],
            ['name' => 'Odontoiatra'],
            ['name' => 'Chirurgo Generale'],
        ];


        foreach ($typologies as $typology) {
            $newTypology = new Typology();
            $newTypology->name = $typology['name'];
            $newTypology->save();
        }
    }
}
