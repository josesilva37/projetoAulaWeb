<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        // \App\Models\User::factory(10)->cInt::random(6)reate();
        DB::table('conferences')->insert([
            'acronym' => Str::random(3),
            'name' =>$faker->name(),
            'description' => Str::random(20),
            'local' => Str::random(20),
            'updated_at' => now(),
            'created_at' => now(),
            'conferenceDate' => now(),
        ]);

        DB::table('speakers')->insert([
            'name'  => Str::random(10),
            'affiliation' => Str::random(10),
            'biography' => Str::random(30),
            'speakerType' => Str::random(10),
            'socialNetworks' => Str::random(10),
            'pageLink' => Str::random(10)
        ]);

        DB::table('sponsors')->insert([
            'name' => Str::random(10),
            'category' => Str::random(10),
        ]);

        DB::table('speakar_type')->insert([
            'description' => Str::random(20)
        ]);


        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' =>  Hash::make('password')

        ]);
    }
}
