<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Person;
use App\Models\Division;
use App\Models\District;
use App\Models\Upazila;
use App\Models\Category;
use App\Models\Vaccination_Center;
use App\Models\Vaccine;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Person::factory(30)->create();


        // \App\Models\User::factory(10)->create();
        $user = new User();
        $user->name = 'Shahriar Islam';
        $user->email = 'shahriar@gmail.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('12345678');
        $user->remember_token = Str::random(10);
        $user->save();

        // creating divisions
        foreach (tika_bd_divisions() as $division) {
            $divisionModel = new Division();
            $divisionModel->name = $division['name'];
            $divisionModel->save();
        }


        // creating districts
        foreach (tika_bd_districts() as $district) {
            $districtModel = new District();
            $districtModel->name = $district['name'];
            $districtModel->division_id = $district['division_id'];
            $districtModel->save();
        }
          
      

        // creating upazilas
        foreach (tika_bd_upazilas() as $upazila) {
            $upazilaModel = new Upazila();
            $upazilaModel->name = $upazila['name'];
            $upazilaModel->district_id = $upazila['district_id'];
            $upazilaModel->save();
        }


        // creating categories
        foreach (tika_bd_categories() as $category) {
            $categoryModel = new Category();
            $categoryModel->name = $category['name'];
            $categoryModel->min_age = $category['min_age'];
            $categoryModel->save();
        }


        // creating vaccines
        $available_vaccines = ['Pfizer', 'Moderna', 'AstraZeneca', 'Sinopharm', 'Sputnik V'];
        foreach ($available_vaccines as $available_vaccine) {
            $vaccine = new Vaccine();
            $vaccine->name = $available_vaccine;
            $vaccine->save();
        }

        Vaccination_Center::factory(200)->create();
    }
}
