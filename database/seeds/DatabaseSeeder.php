<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProvidersTableSeeder::class);
        $this->call(ViewsTableSeeder::class);
        $this->call(WorkSphereSeeder::class);
        $this->call(OccupationSeeder::class);
        $this->call(EstablishmentSeeder::class);
        $this->call(ProviderOccupationSeeder::class);
    }
}
