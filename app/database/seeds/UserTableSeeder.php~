<?php
class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Sylos Stavrogin',
			'username' => 'stylos',
			'email'    => 'verdas301@gmail.com',
			'password' => Hash::make('awesome'),
		));
	}

}
?>
