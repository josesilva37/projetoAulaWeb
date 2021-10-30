<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('conferences')->insert([
            'acronym' => String::random(3),
            'name' => String::random(10),
            'description' => String::random(20),
            'local' => String::random(20),
        ]);

        DB::table('speakers')->insert([
            'name'  => String::random(10),
            'affiliation' => String::random(10),
            'biography' => String::random(30),
            'speakerType' => String::random(10),
            'socialNetworks' => String::random(10),
            'pageLink' => String::random(10)
        ]);

        DB::table('sponsors')->insert([
            'name' => String::random(10),
            'category' => String::random(10),
        ]);

        DB::table('speakar_type')->insert([
            'description' => String::random(20)
        ]);

        DB::table('user_type')->insert([
            'description' => String::random(20)
        ]);

        DB::table('conf_partificant')->insert([
            'conferenceID' => Int::random(6),
            'participantID' => Int::random(6),
        ]);

        DB::table('conf_speaker')->insert([
            'conferenceID' => Int::random(6),
            'speakerID' => Int::random(6)
        ]);
        
        DB::table('conf_sponser')->insert([
            'conferenceID' => Int::random(6),
            'speakerID' => Int::random(6)
        ]);

        DB::table('users')->insert([
            'name' => String::random(10),
            'email' => String::random(10).'@gmail.com',
            'password' =>  Hash::make('password')

        ]);
    }
}
