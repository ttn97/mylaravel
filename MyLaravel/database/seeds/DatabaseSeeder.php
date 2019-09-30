<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
public function run()
    {
        //
        for($i = 1; $i <= 10;$i++)
        {
        	DB::table('users')->insert(
	        	[
	        		'name' => 'User_'.$i,
	            	'email' => 'user_'.$i.'@mymail.com',
	            	'password' => bcrypt('123456'),
                    'created_at' => new DateTime(),
                    'level'=> 0,
	        	]
        	);
        }
    }
}


