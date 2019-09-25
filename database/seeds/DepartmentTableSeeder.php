<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
             'name' => 'Computer Science',
             'code' => 'CSC',
            ],
            [
                'name' => 'Physics',
                'code' => 'PHY',
             ],
         ];
         foreach($departments as $department){
             App\Department::create($department);
         }
    }
}
