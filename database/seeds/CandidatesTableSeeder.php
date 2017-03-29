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
      'name',
      'email',
      'phone',
      'latitude',
      'longitude',
      'street',
      'city',
      'state',
      'date'

      DB::table('users')->insert([
          'name' => str_random(10),
          'email' => str_random(10).'@gmail.com',
          'phone' => int_random('secret'),
          'latitude' => str_random(10),
          
      ]);
    }
}
