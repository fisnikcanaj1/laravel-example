<?php

use Illuminate\Database\Seeder;

class TodostableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\TodoMore', 7)->create();
    }
}
