<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
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
                
                "nom" => "Jack",
                "prenom" => "De la Clos",
                "telephone" => "0692846235",
                "mail"=>"jack.dlc@hotmail.com",

            ],
        
            [
                    
                "nom" => "Henry",
                "prenom" => "Fruteau",
                "telephone" => "0692836532",
                "mail"=>"Hnry.frt@hotmail.com",
    
            ],
               
           [
                        
                    "nom" => "Pierre",
                    "prenom" => "bob",
                    "telephone" => "0692592412",
                    "mail"=>"Prbt@hotmail.com",
        
            ]
           ];
           DB::table('clients')->insert($array);

            
    }
}
