<?php

use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = [
            [
             'grade' => 'A+',
             'gpv'=>'4.00',
            ],
            [
                'grade' => 'A',
             'gpv'=>'4.00',
            ],
            [
                'grade' => 'A-',
             'gpv'=>'3.70',
            ],
            [
                'grade' => 'B+',
             'gpv'=>'3.30',
            ],
            [
                'grade' => 'B',
             'gpv'=>'3.00',
            ],
            [
                'grade' => 'B-',
             'gpv'=>'2.70',
            ],
            [
                'grade' => 'C+',
             'gpv'=>'2.30',
            ],
            [
                'grade' => 'C',
             'gpv'=>'2.00',
            ],
            [
                'grade' => 'C-',
             'gpv'=>'1.70',
            ],
            [
                'grade' => 'D+',
             'gpv'=>'1.30',
            ],
            [
                'grade' => 'D',
             'gpv'=>'1.00',
            ],
            [
                'grade' => 'E',
             'gpv'=>'0.00',
            ],
            [
                'grade' => 'IC',
             'gpv'=>'Incomplete',
            ],
            [
                'grade' => 'NA',
             'gpv'=>'Not Allowed',
            ],
         ];
         foreach($grades as $grade){
             App\Grade::create($grade);
         }
    }
}
