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
         $this->call([ClientsSeeder::class]);
         $this->call([OperateursSeeder::class]);
         $this->call([ExchangesTypesSeeder::class]);

    }
}
