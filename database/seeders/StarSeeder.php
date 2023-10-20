<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Star;

class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $votes = [
            '0',
            '5',
            '10',
            '15',
            '20',
            '25'
        ];

        foreach ($votes as $vote) {
            $newStar = new Star();
            $newStar->vote = $vote;
            $newStar->save();
        }
    }
}
