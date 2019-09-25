<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            [
             'course_code'=>'CSC101G3',
             'course_name'=>'Foundations of Computer Science',
             'level' =>'1G',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC102G3', 
             'course_name'=>'Computer Programming I',
             'level' =>'1G',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC103G2',  
             'course_name'=>'Multimedia Technologies',
             'level' =>'1G',
             'semester' =>'1',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC104G2',
             'course_name'=>'Design of Algorithms',
             'level' =>'1G',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC231GC2', 
             'course_name'=>'Software Engineering',
             'level' =>'2G',
             'semester' =>'1',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC232GC2',
             'course_name'=> 'Computer Programming II',
             'level' =>'2G',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC233GC2', 
             'course_name'=>'Database Management Systems',
             'level' =>'2G',
             'semester' =>'1',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC234GC2', 
             'course_name'=>'Operating Systems',
             'level' =>'2G',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			/* [
             'course_code'=>'CSC234GC2', 
             'course_name'=>'Numerical Methods',
             'level' =>'2G',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC234GC2', 
             'course_name'=>'Data Sructure and Algorithms II',
             'level' =>'2G',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ], */
			[
             'course_code'=>'CSC311MC3',   
             'course_name'=>'Advanced Database Design and Systems',
             'level' =>'3M',
             'semester' =>'1',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC312MC4',   
             'course_name'=>'Data Communications and Computer Networks',
             'level' =>'3M',
             'semester' =>'1',
             'credit'=>'4',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC313MC3', 
             'course_name'=>'Digital Image Processing',
             'level' =>'3M',
             'semester' =>'1',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC314MC8', 
             'course_name'=>'Industrial Training',
             'level' =>'3M',
             'semester' =>'2',
             'credit'=>'8',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC412MC3', 
             'course_name'=>'Artificial Intelligence',
             'level' =>'4M',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC414MC3', 
             'course_name'=>'High Performance Computing',
             'level' =>'4M',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC123GC2',
             'course_name'=>'Numerical Methods',
             'level' =>'1G',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC415MC3', 
             'course_name'=>'Mobile Computing',
             'level' =>'4M',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC416MC6', 
             'course_name'=>'Research Project',
             'level' =>'4M',
             'semester' =>'2',
             'credit'=>'6',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC417MC3', 
             'course_name'=>'Data Mining and Machine Learning',
             'level' =>'4M',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC418MC3', 
             'course_name'=>'Compiler Design',
             'level' =>'4M',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC421MC3', 
             'course_name'=>'Systems Analysis, Design and Project Management',
             'level' =>'4M',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC422ME2', 
             'course_name'=>'Systems and Network Administration',
             'level' =>'4M',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC311GC3', 
             'course_name'=>'Graphics and Visual Computing',
             'level' =>'3G',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC312GC1', 
             'course_name'=>'Computer Programming III',
             'level' =>'3G',
             'semester' =>'2',
             'credit'=>'1',
             'dept_id'=>'1'
            ],
						[
             'course_code'=>'CSC313GC2', 
             'course_name'=>'Rapid Application Development',
             'level' =>'3G',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			
			//direct
			[
             'course_code'=>'CSC101S3',
             'course_name'=>'Foundations of Computer Science',
             'level' =>'1S',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC102S3', 
             'course_name'=>'Computer Programming I',
             'level' =>'1S',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC107S2',  
             'course_name'=>'Multimedia Technologies',
             'level' =>'1S',
             'semester' =>'1',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC108S2',
             'course_name'=>'Design of Algorithms',
             'level' =>'1S',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC103S3', 
             'course_name'=>'Introduction to Computer Systems',
             'level' =>'1S',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC106S3', 
             'course_name'=>'Human Computer Interaction',
             'level' =>'1S',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC109S2', 
             'course_name'=>'Introduction to Computer Security and Cryptography',
             'level' =>'1S',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC231SC2', 
             'course_name'=>'Software Engineering',
             'level' =>'2S',
             'semester' =>'1',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC232SC2',
             'course_name'=> 'Computer Programming II',
             'level' =>'2S',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC233SC2', 
             'course_name'=>'Database Management Systems',
             'level' =>'2S',
             'semester' =>'1',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC234SC3',  
             'course_name'=>'Computer Architecture',
             'level' =>'2S',
             'semester' =>'1',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC235SC4', 
             'course_name'=>'Mathematics for Computing III',
             'level' =>'2S',
             'semester' =>'1',
             'credit'=>'4',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC242SC2', 
             'course_name'=>'Human Resource Management', 
             'level' =>'2S',
             'semester' =>'1',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC237SC3',  
             'course_name'=>'Concepts of Programming Languages',
             'level' =>'2S',
             'semester' =>'1',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC246SE2',  
             'course_name'=>'Multimedia Technologies',
             'level' =>'2S',
             'semester' =>'1',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			/* [
             'course_code'=>'CSC234GC2', 
             'course_name'=>'Operating Systems',
             'level' =>'2G',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC234SC2', 
             'course_name'=>'Numerical Methods',
             'level' =>'2S',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC234SC2', 
             'course_name'=>'Data Sructure and Algorithms II',
             'level' =>'2S',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ], */
			[
             'course_code'=>'CSC316SC3',   
             'course_name'=>'Advanced Database Design and Systems',
             'level' =>'3S',
             'semester' =>'1',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC317SC4',   
             'course_name'=>'Data Communications and Computer Networks',
             'level' =>'3S',
             'semester' =>'1',
             'credit'=>'4',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC318SC3', 
             'course_name'=>'Digital Image Processing',
             'level' =>'3S',
             'semester' =>'1',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC315SC2', 
             'course_name'=>'Group Project II',
             'level' =>'3S',
             'semester' =>'1',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC314SC2',  
             'course_name'=>'Knowledge Representation and Programming in Logic',
             'level' =>'3S',
             'semester' =>'1',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC313SC2', 
             'course_name'=>'Rapid Application Development', 
             'level' =>'3S',
             'semester' =>'1',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC311SC3', 
             'course_name'=>'Graphics and Visual Computing',
             'level' =>'3S',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC312SC1', 
             'course_name'=>'Computer Programming III',
             'level' =>'3S',
             'semester' =>'2',
             'credit'=>'1',
             'dept_id'=>'1'
            ],
			/* [
             'course_code'=>'CSC314SC8', 
             'course_name'=>'Industrial Training',
             'level' =>'3S',
             'semester' =>'2',
             'credit'=>'8',
             'dept_id'=>'1'
            ], */
			[
             'course_code'=>'CSC412SC3', 
             'course_name'=>'Artificial Intelligence',
             'level' =>'4S',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC414SC3', 
             'course_name'=>'High Performance Computing',
             'level' =>'4S',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC415SC3', 
             'course_name'=>'Mobile Computing',
             'level' =>'4S',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC416SC6', 
             'course_name'=>'Research Project',
             'level' =>'4S',
             'semester' =>'2',
             'credit'=>'6',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC417SC3', 
             'course_name'=>'Data Mining and Machine Learning',
             'level' =>'4S',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC418SC3', 
             'course_name'=>'Compiler Design',
             'level' =>'4S',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC421SC3', 
             'course_name'=>'Systems Analysis, Design and Project Management',
             'level' =>'4S',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC422SE2', 
             'course_name'=>'Systems and Network Administration',
             'level' =>'4S',
             'semester' =>'2',
             'credit'=>'2',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC419SC3', 
             'course_name'=>'Mathematics for Computing IV',
             'level' =>'4S',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC411SC0', 
             'course_name'=>'Research Seminar',
             'level' =>'4S',
             'semester' =>'2',
             'credit'=>'0',
             'dept_id'=>'1'
            ],
			[
             'course_code'=>'CSC413SC3',
             'course_name'=> 'Advanced Algorithms',
             'level' =>'4S',
             'semester' =>'2',
             'credit'=>'3',
             'dept_id'=>'1'
            ]
         ];
         foreach($subjects as $subject){
             App\Subject::create($subject);
         }
    }
}
