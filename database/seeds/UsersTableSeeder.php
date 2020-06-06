<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $users = [];
		$user = new User;
		$user->name = 'Administrador';
		$user->email = 'admin@e-vanhost.net';
		$user->password = bcrypt('12341234');
		$users[] = $user;

		
		foreach ($users as $user) {
			$user->save();
		}
    }
}
