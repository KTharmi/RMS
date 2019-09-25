<?php

use Illuminate\Database\Seeder;

class IcaTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ica_types = [
            [
             'name' => 'best Two',
            ],
            [
                'name' => 'sum of three',
            ],
            [
                'name' => 'other',
            ],
         ];
         foreach($ica_types as $ica_type){
             App\IcaType::create($ica_type);
         }
    }
}
