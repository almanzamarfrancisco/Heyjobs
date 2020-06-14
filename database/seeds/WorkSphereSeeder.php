<?php

use Illuminate\Database\Seeder;
use App\WorkSphere;

class WorkSphereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		WorkSphere::truncate();
        $workspheres = [];
		$ws = new WorkSphere;
		$ws->name = 'technical_assistance';
		$ws->slug = 'Asistencia Técnica';
		$workspheres[] = $ws;

		$ws = new WorkSphere;
        $ws->name = 'automotive_industry';
        $ws->slug = 'Autos';
        $workspheres[] = $ws;

		$ws = new WorkSphere;
        $ws->name = 'design_and_technology';
        $ws->slug = 'Diseño y tecnología';
        $workspheres[] = $ws;

		$ws = new WorkSphere;
		$ws->name = 'fashion_and_beauty';
		$ws->slug = 'Moda y belleza';
		$workspheres[] = $ws;
        $ws = new WorkSphere;

		$ws = new WorkSphere;
        $ws->name = 'health';
        $ws->slug = 'Salud';
        $workspheres[] = $ws;

		$ws = new WorkSphere;
        $ws->name = 'lessons';
        $ws->slug = 'Lecciones';
        $workspheres[] = $ws;

		$ws = new WorkSphere;
        $ws->name = 'consultancy';
        $ws->slug = 'Consultoría';

		$ws = new WorkSphere;
        $ws->name = 'social_events';
        $ws->slug = 'Eventos sociales';

		$ws = new WorkSphere;
        $ws->name = 'construction_and_maintenance';
        $ws->slug = 'Construcción y mantenimiento';
        $workspheres[] = $ws;

		$ws = new WorkSphere;
        $ws->name = 'domestic_services';
        $ws->slug = 'Servicios domésticos';
        $workspheres[] = $ws;

		foreach ($workspheres as $ws) {
			$ws->save();
		}
    }
}
