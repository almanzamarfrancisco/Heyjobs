<?php

use Illuminate\Database\Seeder;
use App\Provider;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provider::truncate();
        $providers = [];
		$provider = new Provider;
		$provider->name = 'Alguien';
		$provider->email = 'alguien@mail.com';
        $provider->rfc = 'VECJ880326XXX';
        // $provider->payment_method = 'efectivo';
		$provider->password = bcrypt('12341234');
		$providers[] = $provider;

        $provider = new Provider;
        $provider->name = 'Gustavo Motos - Taller de motos';
        $provider->email = 'GustavoMotos@gmail.com';
        $provider->rfc = 'RFCJ880326ABC';
        // $provider->payment_method = 'efectivo';
        $provider->password = bcrypt('12341234');
        $providers[] = $provider;

        $provider = new Provider;
        $provider->name = 'Tany - Taller de Motos';
        $provider->email = 'TanyTallerDeMotos@gmail.com';
        $provider->rfc = 'RFCJ880326DEF';
        // $provider->payment_method = 'efectivo';
        $provider->password = bcrypt('12341234');
        $providers[] = $provider;

        $provider = new Provider;
        $provider->name = 'Estética Rubí';
        $provider->email = 'RubíBelleza@gmail.com';
        $provider->rfc = 'RFCA880326ABC';
        // $provider->payment_method = 'efectivo';
        $provider->password = bcrypt('12341234');
        $providers[] = $provider;

        $provider = new Provider;
        $provider->name = 'José Pacheco';
        $provider->email = 'José.Pacheco10@gmail.com';
        $provider->rfc = 'RFCB880326ABC';
        // $provider->payment_method = 'efectivo';
        $provider->password = bcrypt('12341234');
        $providers[] = $provider;

		foreach ($providers as $provider) {
			$provider->save();
		}
    }
}
