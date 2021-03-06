    <?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->truncate();

    	factory(App\User::class)->create([
        	'name' => 'Javier',
        	'email' => 'admin@styde.net',
         	'role' => 'admin',
         	'password'=> 'admin'
        	]);
        factory(App\User::class, 49)->create();
    }
}
