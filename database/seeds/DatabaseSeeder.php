<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	// public function run()
	// {
	// 	Model::unguard();

	// 	// $this->call('UserTableSeeder');
	// }


public function run()
   {
       // $this->call(UsersTableSeeder::class);
       
         DB::table('users')->insert([
         'email' => '111@gmail.com',
         'username'=>'qwert',
               'password'=>bcrypt('123456'),
        'level' =>'1'
         ]);

   }

}
