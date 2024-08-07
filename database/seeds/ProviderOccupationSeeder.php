<?php

use Illuminate\Database\Seeder;
use App\Occupation;
use App\Provider;
use App\ProviderOccupation;

class ProviderOccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProviderOccupation::truncate();
        $items = [];
        $item = new ProviderOccupation;
		$item->provider_id = Provider::whereEmail('Alfonso@mail.com')->first()->id;
		$item->occupation_id = Occupation::whereName('photographer')->first()->id;
		$items[] = $item;

        $item = new ProviderOccupation;
		$item->provider_id = Provider::whereEmail('GustavoMotos@gmail.com')->first()->id;
		$item->occupation_id = Occupation::whereName('mechanic_motorcycles')->first()->id;
		$items[] = $item;

        $item = new ProviderOccupation;
		$item->provider_id = Provider::whereEmail('TanyTallerDeMotos@gmail.com')->first()->id;
		$item->occupation_id = Occupation::whereName('mechanic_motorcycles')->first()->id;
		$items[] = $item;

        $item = new ProviderOccupation;
		$item->provider_id = Provider::whereEmail('RubíBelleza@gmail.com')->first()->id;
		$item->occupation_id = Occupation::whereName('stylist')->first()->id;
		$items[] = $item;

        $item = new ProviderOccupation;
		$item->provider_id = Provider::whereEmail('Jose.Pacheco10@gmail.com')->first()->id;
		$item->occupation_id = Occupation::whereName('web_developer')->first()->id;
		$items[] = $item;

        $item = new ProviderOccupation;
		$item->provider_id = Provider::whereEmail('almanza.marfrancisco@gmail.com')->first()->id;
		$item->occupation_id = Occupation::whereName('web_developer')->first()->id;
		$items[] = $item;

		foreach ($items as $item) {
			$item->timestamps = false;
			$item->save();
		}
    }
}
