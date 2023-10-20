<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $doctors = config('users.users');

        $user = User::all();

        foreach ($doctors as $key => $doctor) {
            $new_doctor = new Doctor();
            $new_doctor->user_id = $user[$key]->id;
            $new_doctor->description = $doctor['description'];
            $new_doctor->services = $doctor['services'];
            $new_doctor->address = $doctor['address'];
            $new_doctor->photo = $doctor['photo'];
            $new_doctor->visible = $doctor['visible'];
            $new_doctor->slug = Str::slug($user[$key]->name, '-');
            $new_doctor->save();
            $new_doctor->typologies()->attach($doctor['typologies']);
            $new_doctor->stars()->attach($doctor['vote']);

        }
    }
}
