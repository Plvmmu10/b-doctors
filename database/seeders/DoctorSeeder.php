<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = [
            [   
                'user_id' => '1',
                'description' => 'lorem',
                'services' => 'ciao',
                'address' => 'via Roma, 3',
                'photo' => 'loremmmm',
                
            ],
            [
                'user_id' => '2',
                'description' => 'lorem 2',
                'services' => 'ciao',
                'address' => 'via Milano, 1',
                'photo' => 'loremmm',
                
            ],
        ];


        foreach ($doctors as $doctor) {
            $new_doctor = new Doctor();
            $new_doctor->user_id = $doctor['user_id'];
            $new_doctor->description = $doctor['description'];
            $new_doctor->services = $doctor['services'];
            $new_doctor->address = $doctor['address'];
            $new_doctor->photo = $doctor['photo'];
            $new_doctor->save();
        }
    }
}