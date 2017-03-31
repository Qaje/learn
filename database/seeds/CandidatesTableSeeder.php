<?php

use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->insert([
          'name' => str_random(10),
          'email' => str_random(10).'@gmail.com',
          'phone' => int_random('secret'),
          'latitude' => str_random(10),
          'longitude' => str_random(10),
          'street' => str_random(10),
          'city' => str_random(10),
          'state' => str_random(5),
          'date' => date_random(),
          ]);
    }
}
