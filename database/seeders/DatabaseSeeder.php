<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Person;

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
    }
}
