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
		$view->route = '/client_engagements';
		$view->name = 'client_engagements';
		$view->slug = 'Contrataciones';
		$view->icon = 'nc-paper';
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
		$view->route = '/engagements_dashboard';
		$view->name = 'engagements_dashboard';
		$view->slug = 'Tablero de contratos';
		$view->icon = 'nc-paper';
		$view->user_type = 'providers';
		$views[] = $view;

		$view = new View;
		$view->route = '/search';
		$view->name = 'search_view';
		$view->slug = 'Buscar';
		$view->icon = 'nc-zoom-split';
		$view->user_type = 'users';
		$views[] = $view;

		
		foreach ($views as $view) {
			$view->save();
		}
    }
}
