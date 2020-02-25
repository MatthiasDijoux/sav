<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                "nom" => "Jean",
                "prenom" => "Henry",
                "telephone" => "0692782160",
                "mail" => "test@hotmail.com",
            ],
            [
                "nom" => "Denise",
                "prenom" => "Harold",
                "telephone" => "069284925",
                "mail" => "dtt@hotmail.com",
            ]];
            DB::table('clients')->insert($array);
    }
}
