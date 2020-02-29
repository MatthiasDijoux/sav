<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperateursSeeder extends Seeder
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
                
                "nom" => "Pierre",

            ],
        
            [
                    
                "nom" => "Harold",
               
    
            ],
               
           [
                        
                    "nom" => "Bilal",
                 
            ]
           ];
           DB::table('operateurs')->insert($array);

            
    }
}
