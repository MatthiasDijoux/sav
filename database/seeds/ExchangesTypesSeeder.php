<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExchangesTypesSeeder extends Seeder
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
                
                "types" => "mail",
            
            ],
        
            [
                    
                "types" => "tel",
            
    
            ],
           ];
           DB::table('exchanges_types')->insert($array);

            
    }
}
