<?php

use Illuminate\Database\Seeder;

class EceTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ece_types = [
            [
             'name' => 'case1',
            ],
         ];
         foreach($ece_types as $ece_type){
             App\EceType::create($ece_type);
         }
    }
}
