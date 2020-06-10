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
		$provider->email = 'alguien@e-vanhost.net';
        $provider->rfc = 'VECJ880326XXX';
        $provider->payment_method = 'efectivo';
		$provider->password = bcrypt('12341234');
		$providers[] = $provider;

		
		foreach ($providers as $provider) {
			$provider->save();
		}
    }
}
