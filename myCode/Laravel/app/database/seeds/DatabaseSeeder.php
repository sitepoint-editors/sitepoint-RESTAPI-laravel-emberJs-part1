<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$user = new UserTableSeeder();
            
	        $user->run();
	            
	        // $this->call('UserTableSeeder'); // Or you can use this
	}

}
