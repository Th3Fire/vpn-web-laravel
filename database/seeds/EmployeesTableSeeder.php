<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('EmployeesTableSeeder');
        $faker = Faker\Factory::create();
        App\Employees::truncate();
        factory('App\Employees',1000)->create();
    }
}
