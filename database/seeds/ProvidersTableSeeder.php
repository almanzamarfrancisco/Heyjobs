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
		$provider->password = bcrypt('12341234');
        $provider->working_schedule = json_decode('{"SU":{"start":"-","end":"-","slug":"Domingo"},"MO":{"start":"09:00","end":"18:00","slug":"Lunes"},"TU":{"start":"09:00","end":"18:00","slug":"Martes"},"WE":{"start":"09:00","end":"18:00","slug":"Miércoles"},"TH":{"start":"09:00","end":"18:00","slug":"Jueves"},"FR":{"start":"09:00","end":"18:00","slug":"Viernes"},"SA":{"start":"09:00","end":"18:00","slug":"Sábado"},"Emergency":"Yes"}');
        $provider->professional = 0;
        $provider->mobility = 1;
        $provider->home_service = 0;
        $provider->intro = 'Hola soy un fotógrafo';
		$providers[] = $provider;

        $provider = new Provider;
        $provider->name = 'Gustavo Motos - Taller de motos';
        $provider->email = 'GustavoMotos@gmail.com';
        $provider->rfc = 'RFCJ880326ABC';
        $provider->password = bcrypt('12341234');
        $provider->working_schedule = json_decode('{"SU":{"start":"-","end":"-","slug":"Domingo"},"MO":{"start":"09:00","end":"18:00","slug":"Lunes"},"TU":{"start":"09:00","end":"18:00","slug":"Martes"},"WE":{"start":"09:00","end":"18:00","slug":"Miércoles"},"TH":{"start":"09:00","end":"18:00","slug":"Jueves"},"FR":{"start":"09:00","end":"18:00","slug":"Viernes"},"SA":{"start":"09:00","end":"18:00","slug":"Sábado"},"Emergency":"Yes"}');
        $provider->professional = 0;
        $provider->mobility = 1;
        $provider->home_service = 0;
        $provider->intro = 'Hola soy un mecánico de motos';
        $providers[] = $provider;

        $provider = new Provider;
        $provider->name = 'Tany - Taller de Motos';
        $provider->email = 'TanyTallerDeMotos@gmail.com';
        $provider->rfc = 'RFCJ880326DEF';
        $provider->password = bcrypt('12341234');
        $provider->working_schedule = json_decode('{"SU":{"start":"-","end":"-","slug":"Domingo"},"MO":{"start":"09:00","end":"18:00","slug":"Lunes"},"TU":{"start":"09:00","end":"18:00","slug":"Martes"},"WE":{"start":"09:00","end":"18:00","slug":"Miércoles"},"TH":{"start":"09:00","end":"18:00","slug":"Jueves"},"FR":{"start":"09:00","end":"18:00","slug":"Viernes"},"SA":{"start":"09:00","end":"18:00","slug":"Sábado"},"Emergency":"Yes"}');
        $provider->professional = 0;
        $provider->mobility = 1;
        $provider->home_service = 0;
        $provider->intro = 'Hola tengo un taller de motos';
        $providers[] = $provider;

        $provider = new Provider;
        $provider->name = 'Rubí';
        $provider->email = 'RubíBelleza@gmail.com';
        $provider->rfc = 'RFCA880326ABC';
        $provider->working_schedule = json_decode('{"SU":{"start":"-","end":"-","slug":"Domingo"},"MO":{"start":"09:00","end":"18:00","slug":"Lunes"},"TU":{"start":"09:00","end":"18:00","slug":"Martes"},"WE":{"start":"09:00","end":"18:00","slug":"Miércoles"},"TH":{"start":"09:00","end":"18:00","slug":"Jueves"},"FR":{"start":"09:00","end":"18:00","slug":"Viernes"},"SA":{"start":"09:00","end":"18:00","slug":"Sábado"},"Emergency":"Yes"}');
        $provider->professional = 0;
        $provider->mobility = 1;
        $provider->home_service = 0;
        $provider->intro = 'Hola tengo una estética';
        $provider->password = bcrypt('12341234');
        $providers[] = $provider;

        $provider = new Provider;
        $provider->name = 'José Pacheco';
        $provider->email = 'Jose.Pacheco10@gmail.com';
        $provider->rfc = 'RFCB880326ABC';
        $provider->working_schedule = json_decode('{"SU":{"start":"-","end":"-","slug":"Domingo"},"MO":{"start":"09:00","end":"18:00","slug":"Lunes"},"TU":{"start":"09:00","end":"18:00","slug":"Martes"},"WE":{"start":"09:00","end":"18:00","slug":"Miércoles"},"TH":{"start":"09:00","end":"18:00","slug":"Jueves"},"FR":{"start":"09:00","end":"18:00","slug":"Viernes"},"SA":{"start":"09:00","end":"18:00","slug":"Sábado"},"Emergency":"Yes"}');
        $provider->professional = 0;
        $provider->mobility = 1;
        $provider->home_service = 0;
        $provider->intro = 'Hola soy programador web';
        $provider->password = bcrypt('12341234');
        $providers[] = $provider;

        $provider = new Provider;
        $provider->name = 'Alejandro';
        $provider->email = 'almanza.marfrancisco@gmail.com';
        $provider->rfc = 'RFCB980326ABC';
        $provider->working_schedule = json_decode('{"SU":{"start":"-","end":"-","slug":"Domingo"},"MO":{"start":"09:00","end":"18:00","slug":"Lunes"},"TU":{"start":"09:00","end":"18:00","slug":"Martes"},"WE":{"start":"09:00","end":"18:00","slug":"Miércoles"},"TH":{"start":"09:00","end":"18:00","slug":"Jueves"},"FR":{"start":"09:00","end":"18:00","slug":"Viernes"},"SA":{"start":"09:00","end":"18:00","slug":"Sábado"},"Emergency":"Yes"}');
        $provider->professional = 0;
        $provider->mobility = 1;
        $provider->home_service = 0;
        $provider->intro = 'Hola soy otro programador web';
        $provider->password = bcrypt('12341234');
        $providers[] = $provider;

        $provider = new Provider;
        $provider->name = 'Raúl Ramírez';
        $provider->email = 'ramirez.raul@gmail.com';
        $provider->rfc = 'RFCB980326DEF';
        $provider->working_schedule = json_decode('{"SU":{"start":"-","end":"-","slug":"Domingo"},"MO":{"start":"09:00","end":"18:00","slug":"Lunes"},"TU":{"start":"09:00","end":"18:00","slug":"Martes"},"WE":{"start":"09:00","end":"18:00","slug":"Miércoles"},"TH":{"start":"09:00","end":"18:00","slug":"Jueves"},"FR":{"start":"09:00","end":"18:00","slug":"Viernes"},"SA":{"start":"09:00","end":"18:00","slug":"Sábado"},"Emergency":"Yes"}');
        $provider->professional = 1;
        $provider->mobility = 1;
        $provider->home_service = 0;
        $provider->intro = 'Soy profesional con más de 10 años en el campo labral. Mi área de trabajo es el derecho civil';
        $provider->password = bcrypt('12341234');
        $providers[] = $provider;

        $provider = new Provider;
        $provider->name = 'Alejandro Cazas';
        $provider->email = 'cazaz.alejandroo@gmail.com';
        $provider->rfc = 'RFCB980326GHI';
        $provider->working_schedule = json_decode('{"SU":{"start":"-","end":"-","slug":"Domingo"},"MO":{"start":"09:00","end":"18:00","slug":"Lunes"},"TU":{"start":"09:00","end":"18:00","slug":"Martes"},"WE":{"start":"09:00","end":"18:00","slug":"Miércoles"},"TH":{"start":"09:00","end":"18:00","slug":"Jueves"},"FR":{"start":"09:00","end":"18:00","slug":"Viernes"},"SA":{"start":"09:00","end":"18:00","slug":"Sábado"},"Emergency":"Yes"}');
        $provider->professional = 0;
        $provider->mobility = 1;
        $provider->home_service = 0;
        $provider->intro = 'Hago todo tipo trabajos de construcción desde levantamiento hasta terminados. Contáctame';
        $provider->password = bcrypt('12341234');
        $providers[] = $provider;

        $provider = new Provider;
        $provider->name = 'Astrid Gonzáles';
        $provider->email = 'disenadoraastridg@gmail.com';
        $provider->rfc = 'RFCB980326JKL';
        $provider->working_schedule = json_decode('{"SU":{"start":"-","end":"-","slug":"Domingo"},"MO":{"start":"09:00","end":"18:00","slug":"Lunes"},"TU":{"start":"09:00","end":"18:00","slug":"Martes"},"WE":{"start":"09:00","end":"18:00","slug":"Miércoles"},"TH":{"start":"09:00","end":"18:00","slug":"Jueves"},"FR":{"start":"09:00","end":"18:00","slug":"Viernes"},"SA":{"start":"09:00","end":"18:00","slug":"Sábado"},"Emergency":"Yes"}');
        $provider->professional = 1;
        $provider->mobility = 1;
        $provider->home_service = 0;
        $provider->intro = 'Hago todo tipo trabajos de construcción desde levantamiento hasta terminados. Contáctame';
        $provider->password = bcrypt('12341234');
        $providers[] = $provider;

		foreach ($providers as $provider) {
			$provider->save();
		}
    }
}
