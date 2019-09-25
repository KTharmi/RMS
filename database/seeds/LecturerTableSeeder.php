<?php

use Illuminate\Database\Seeder;

class LecturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecturers = [
            [
             'emp_id'=>'E001',
             'name'=>'Mr. S. Suthakar',
             'dept_id' =>'1',
             'user_id' =>'3',
            ],
			[
             'emp_id'=>'E002',
             'name'=>'Dr. (Mrs). B. Mayurathan',
             'dept_id' =>'1',
            ],
			[
             'emp_id'=>'E003',
             'name'=>'Dr. M. Siyamalan',
             'dept_id' =>'1',
            ],
			[
             'emp_id'=>'E004',
             'name'=>'Mr. K. Sarveswaran',
             'dept_id' =>'1',
            ],
			[
             'emp_id'=>'E005',
             'name'=>'Mr. S. Shriparen',
             'dept_id' =>'1',
             
            ],
			[
             'emp_id'=>'E006',
             'name'=>'Ms. J. Samantha Tharani',
             'dept_id' =>'1',
            ],
			[
             'emp_id'=>'E007',
             'name'=>'Dr. E. Y. A. Charles',
             'dept_id' =>'1',
            ],
			[
             'emp_id'=>'E008',
             'name'=>'Dr. K. Thabotharan',
             'dept_id' =>'1',
            ],
			[
             'emp_id'=>'E009',
             'name'=>'Dr. S. Mahesan',
             'dept_id' =>'1',
            ],
			[
             'emp_id'=>'E010',
             'name'=>'Dr. A. Ramanan',
             'dept_id' =>'1',
            ]
           
         ];
         foreach($lecturers as $lecturer){
             App\Lecturer::create($lecturer);
         }
    }
}
