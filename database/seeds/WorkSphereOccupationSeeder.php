<?php

use Illuminate\Database\Seeder;
use App\WorkSphere;
use App\Occupation;
use App\WorkSphereOccupation;

class WorkSphereOccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkSphereOccupation::truncate();
        $worksphereoccupations = [];
		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('technical_assistance')->first()->id;
		$wso->occupation_id = Occupation::whereName('technical_home_appliances')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('technical_assistance')->first()->id;
		$wso->occupation_id = Occupation::whereName('technical_consoles_and_computers')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('technical_assistance')->first()->id;
		$wso->occupation_id = Occupation::whereName('technical_stereo')->first()->id;
		$worksphereoccupations[] = $wso;

		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('automotive_industry')->first()->id;
		$wso->occupation_id = Occupation::whereName('alarms')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('automotive_industry')->first()->id;
		$wso->occupation_id = Occupation::whereName('electrical_mechanic')->first()->id;
		$wso = new WorkSphereOccupation;
		$worksphereoccupations[] = $wso;
		$wso->work_sphere_id = WorkSphere::whereName('automotive_industry')->first()->id;
		$wso->occupation_id = Occupation::whereName('mechanic')->first()->id;
		$worksphereoccupations[] = $wso;

		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('motomotive_industry')->first()->id;
		$wso->occupation_id = Occupation::whereName('mechanic_motorcycles')->first()->id;
		$worksphereoccupations[] = $wso;

		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('design_and_technology')->first()->id;
		$wso->occupation_id = Occupation::whereName('web_designer')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('design_and_technology')->first()->id;
		$wso->occupation_id = Occupation::whereName('web_developer')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('design_and_technology')->first()->id;
		$wso->occupation_id = Occupation::whereName('animator')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso->work_sphere_id = WorkSphere::whereName('design_and_technology')->first()->id;
		$wso->occupation_id = Occupation::whereName('photographer')->first()->id;
		$worksphereoccupations[] = $wso;

		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('fashion_and_beauty')->first()->id;
		$wso->occupation_id = Occupation::whereName('stylist')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('fashion_and_beauty')->first()->id;
		$wso->occupation_id = Occupation::whereName('makeup_artist')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso->work_sphere_id = WorkSphere::whereName('fashion_and_beauty')->first()->id;
		$wso->occupation_id = Occupation::whereName('manicurist_pedicurist')->first()->id;
		$worksphereoccupations[] = $wso;

		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('health')->first()->id;
		$wso->occupation_id = Occupation::whereName('chiropractor')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('health')->first()->id;
		$wso->occupation_id = Occupation::whereName('psychologist')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso->work_sphere_id = WorkSphere::whereName('health')->first()->id;
		$wso->occupation_id = Occupation::whereName('nurse')->first()->id;
		$worksphereoccupations[] = $wso;

		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('lessons')->first()->id;
		$wso->occupation_id = Occupation::whereName('university_advisor')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('lessons')->first()->id;
		$wso->occupation_id = Occupation::whereName('swimming_teacher')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso->work_sphere_id = WorkSphere::whereName('lessons')->first()->id;
		$wso->occupation_id = Occupation::whereName('clothes_designer')->first()->id;
		$worksphereoccupations[] = $wso;

		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('consultancy')->first()->id;
		$wso->occupation_id = Occupation::whereName('lawyer')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('consultancy')->first()->id;
		$wso->occupation_id = Occupation::whereName('economist')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso->work_sphere_id = WorkSphere::whereName('consultancy')->first()->id;
		$wso->occupation_id = Occupation::whereName('translator')->first()->id;
		$worksphereoccupations[] = $wso;

		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('social_events')->first()->id;
		$wso->occupation_id = Occupation::whereName('dj')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('social_events')->first()->id;
		$wso->occupation_id = Occupation::whereName('host')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso->work_sphere_id = WorkSphere::whereName('social_events')->first()->id;
		$wso->occupation_id = Occupation::whereName('decorator')->first()->id;
		$worksphereoccupations[] = $wso;

		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('construction_and_maintenance')->first()->id;
		$wso->occupation_id = Occupation::whereName('painter')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('construction_and_maintenance')->first()->id;
		$wso->occupation_id = Occupation::whereName('locksmith')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso->work_sphere_id = WorkSphere::whereName('construction_and_maintenance')->first()->id;
		$wso->occupation_id = Occupation::whereName('builder')->first()->id;
		$worksphereoccupations[] = $wso;

		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('domestic_services')->first()->id;
		$wso->occupation_id = Occupation::whereName('babysitter')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso = new WorkSphereOccupation;
		$wso->work_sphere_id = WorkSphere::whereName('domestic_services')->first()->id;
		$wso->occupation_id = Occupation::whereName('cook')->first()->id;
		$worksphereoccupations[] = $wso;
		$wso->work_sphere_id = WorkSphere::whereName('domestic_services')->first()->id;
		$wso->occupation_id = Occupation::whereName('dog_walker')->first()->id;
		$worksphereoccupations[] = $wso;
		
		foreach ($worksphereoccupations as $wso) {
			$wso->timestamps = false;
			$wso->save();
		}
    }
}
