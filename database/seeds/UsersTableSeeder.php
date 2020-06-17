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
		$user->email = 'admin@mail.com';
        $user->rfc = 'VECJ880326XXX';
        $user->payment_method = 'cash';
		$user->password = bcrypt('12341234');
		$users[] = $user;
        $user = new User;

        $user->name = 'Alejandro Almanza';
        $user->email = 'almanza.marfrancisco@gmail.com';
        $user->rfc = 'VECJ880326456';
        $user->payment_method = 'cash';
        $user->password = bcrypt('12341234');
        $users[] = $user;

        $user->name = 'Yara Donis';
        $user->email = 'Yara.donis.1000@gmail.com';
        $user->rfc = 'VECJ880326456';
        $user->payment_method = 'cash';
        $user->password = bcrypt('12341234');
        $users[] = $user;

        $user->name = 'Andree Giovanni Silva Villegas';
        $user->email = 'andree.villegas.escom@gmail.com';
        $user->rfc = 'VECJ990326456';
        $user->payment_method = 'cash';
        $user->password = bcrypt('12341234');
        $users[] = $user;

        $user->name = 'José Eduardo Díaz Morales';
        $user->email = 'josehalo117jose57@gmail.com';
        $user->rfc = 'RFCJ990326456';
        $user->payment_method = 'cash';
        $user->password = bcrypt('12341234');
        $users[] = $user;

		
		foreach ($users as $user) {
			$user->save();
		}
    }
}
