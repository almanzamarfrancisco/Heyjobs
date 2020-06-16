<?php

use Illuminate\Database\Seeder;
use App\Occupation;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		Occupation::truncate();
        $occupations = [];
		// technical_assistance
			$o = new Occupation;
			$o->name = 'technical_home_appliances';
			$o->slug = 'Técnic@ Electrodomésticos';
			$o->professional = 0;
			$occupations[] = $o;

			$o = new Occupation;
			$o->name = 'technical_consoles_and_computers';
			$o->slug = 'Técnic@ Consolas y computadoras';
			$o->professional = 0;
			$occupations[] = $o;

			$o = new Occupation;
			$o->name = 'technical_stereo';
			$o->slug = 'Técnic@ de equipo de sonido';
			$o->professional = 0;
			$occupations[] = $o;
		// automotive_industry
			$o = new Occupation;
			$o->name = 'alarms';
			$o->slug = 'Alarmas';
			$o->professional = 0;
			$occupations[] = $o;

			$o = new Occupation;
			$o->name = 'electrical_mechanic';
			$o->slug = 'Auto eléctrico';
			$o->professional = 0;
			$occupations[] = $o;

			$o = new Occupation;
			$o->name = 'mechanic';
			$o->slug = 'Mecánico en general';
			$o->professional = 0;
			$occupations[] = $o;
		// motomotive_industry
			$o = new Occupation;
			$o->name = 'mechanic_motorcycles';
			$o->slug = 'Mecánico de motos';
			$o->professional = 0;
			$occupations[] = $o;
        // design_and_technology
			$o = new Occupation;
			$o->name = 'web_designer';
			$o->slug = 'Diseñador/Diseñadora Web';
			$o->professional = 0;
			$occupations[] = $o;

			$o = new Occupation;
			$o->name = 'web_developer';
			$o->slug = 'Desarrolador/Desarroladora Web';
			$o->professional = 0;
			$occupations[] = $o;

			$o = new Occupation;
			$o->name = 'animator';
			$o->slug = 'Animador/Animadora';
			$o->professional = 0;
			$occupations[] = $o;

			$o = new Occupation;
			$o->name = 'photographer';
			$o->slug = 'Fotógraf@';
			$o->professional = 0;
			$occupations[] = $o;
		// fashion_and_beauty
			$o = new Occupation;
			$o->name = 'stylist';
			$o->slug = 'Estilista';
			$o->professional = 0;
			$occupations[] = $o;

			$o = new Occupation;
			$o->name = 'makeup_artist';
			$o->slug = 'Maquillista';
			$o->professional = 0;
			$occupations[] = $o;
			
			$o = new Occupation;
			$o->name = 'manicurist_pedicurist';
			$o->slug = 'Manicurista/Pedicurista';
			$o->professional = 0;
			$occupations[] = $o;
		// health
			$o = new Occupation;
			$o->name = 'chiropractor';
			$o->slug = 'Quiropráctic@';
			$o->professional = 1;
			$occupations[] = $o;

			$o = new Occupation;
			$o->name = 'psychologist';
			$o->slug = 'Psicólog@';
			$o->professional = 1;
			$occupations[] = $o;
			
			$o = new Occupation;
			$o->name = 'nurse';
			$o->slug = 'Enfermer@';
			$o->professional = 1;
			$occupations[] = $o;
		// lessons
			$o = new Occupation;
			$o->name = 'university_advisor';
			$o->slug = 'Asesor/Asesora Universitari@';
			$o->professional = 0;
			$occupations[] = $o;

			$o = new Occupation;
			$o->name = 'swimming_teacher';
			$o->slug = 'Profesor@ de Natación';
			$o->professional = 0;
			$occupations[] = $o;
			
			$o = new Occupation;
			$o->name = 'clothes_designer';
			$o->slug = 'Modista';
			$o->professional = 0;
			$occupations[] = $o;
		// consultancy
			$o = new Occupation;
			$o->name = 'lawyer';
			$o->slug = 'Abogad@';
			$o->professional = 1;
			$occupations[] = $o;

			$o = new Occupation;
			$o->name = 'economist';
			$o->slug = 'Economista';
			$o->professional = 1;
			$occupations[] = $o;
			
			$o = new Occupation;
			$o->name = 'translator';
			$o->slug = 'Traductor/Traductora';
			$o->professional = 0;
			$occupations[] = $o;
		// social_events
			$o = new Occupation;
			$o->name = 'Bartender';
			$o->slug = 'Barman';
			$o->professional = 0;
			$occupations[] = $o;
			
			$o = new Occupation;
			$o->name = 'dj';
			$o->slug = 'DJ';
			$o->professional = 0;
			$occupations[] = $o;
			
			$o = new Occupation;
			$o->name = 'host';
			$o->slug = 'Anfitrión/Anfirtriona';
			$o->professional = 0;
			$occupations[] = $o;
			
			$o = new Occupation;
			$o->name = 'decorator';
			$o->slug = 'Decorador/Decoradora';
			$o->professional = 0;
			$occupations[] = $o;
		// construction_and_maintenance
			$o = new Occupation;
			$o->name = 'painter';
			$o->slug = 'Pintor/Pintora';
			$o->professional = 0;
			$occupations[] = $o;
			
			$o = new Occupation;
			$o->name = 'locksmith';
			$o->slug = 'Cerrajer@';
			$o->professional = 0;
			$occupations[] = $o;
			
			$o = new Occupation;
			$o->name = 'builder';
			$o->slug = 'Albañil';
			$o->professional = 0;
			$occupations[] = $o;
		// domestic_services
			$o = new Occupation;
			$o->name = 'babysitter';
			$o->slug = 'Niñer@';
			$o->professional = 0;
			$occupations[] = $o;
			
			$o = new Occupation;
			$o->name = 'cook';
			$o->slug = 'Cociner@';
			$o->professional = 0;
			$occupations[] = $o;
			
			$o = new Occupation;
			$o->name = 'dog_walker';
			$o->slug = 'Paseador/Paseadora de Perros';
			$o->professional = 0;
			$occupations[] = $o;
		foreach ($occupations as $o) {
			$o->save();
		}
    }
}
