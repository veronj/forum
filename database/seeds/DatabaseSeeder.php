<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory('App\Thread', 2)->create();
    }
}
