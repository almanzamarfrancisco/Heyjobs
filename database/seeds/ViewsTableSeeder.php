<?php

use Illuminate\Database\Seeder;
use App\View;
class ViewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        View::truncate();
        $views = [];
		$view = new View;
		$view->route = '/home';
		$view->name = 'home';
		$view->slug = 'Inicio';
		$view->icon = 'nc-bank';
		$view->user_type = 'users';
		$views[] = $view;

		$view = new View;
		$view->route = '/home_providers';
		$view->name = 'home_providers';
		$view->slug = 'Inicio';
		$view->icon = 'nc-bank';
		$view->user_type = 'providers';
		$views[] = $view;

		$view = new View;
		$view->route = '/search';
		$view->name = 'search';
		$view->slug = 'Buscar';
		$view->icon = 'nc-pin-3';
		// $view->user_type = 'users';
		$views[] = $view;

		
		foreach ($views as $view) {
			$view->save();
		}
    }
}
