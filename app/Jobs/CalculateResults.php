<?php

namespace App\Jobs;

use App\Student;
use App\Final_result;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CalculateResults implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $student;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $icas = $this->student->icas;
        foreach($icas as $ica)
        {
            $result = Final_result::where('student_id', $ica->student_id)->where('subject_id', $ica->subject_id)->first();
            if(! $result){
                $result = new Final_result();
                $result->mec = 0;
            }
            $result->student_id = $ica->student_id;
            $result->subject_id = $ica->subject_id;
            $result->mic = $ica->mark;
            $result->year = 2019;
            $result->mark = $result->mic + $result->mec;
            $result->save();
        }

        $eces = $this->student->eces;
        foreach($eces as $ece)
        {
            $result = Final_result::where('student_id', $ece->student_id)->where('subject_id', $ece->subject_id)->first();
            if(! $result){
                $result = new Final_result();
                $result->mic = 0;
            }
            $result->student_id = $ece->student_id;
            $result->subject_id = $ece->subject_id;
            $result->mec = $ece->mark;
            $result->mark = $result->mic + $result->mec;
            $result->year = 2019;
            $result->grade = $this->calculateGrade( $result->mark);
            $result->save();
           
        }
    }

    protected function calculateGrade($mark){
        if($mark > 0 && $mark <= 24){
            return "E";
        } else if($mark > 24 && $mark <= 34){
            return "D";
        }else if($mark > 34 && $mark <= 39){
            return "D+";
        }else if($mark > 39 && $mark <= 44){
            return "C-";
        }else if($mark > 44 && $mark <= 49){
            return "C";
        }else if($mark > 49 && $mark <= 54){
            return "C+";
        }else if($mark > 54 && $mark <= 59){
            return "B-";
        }else if($mark > 59 && $mark <= 64){
            return "B";
        }else if($mark > 64 && $mark <= 69){
            return "B+";
        }else if($mark > 69 && $mark <= 74){
            return "A-";
        }else if($mark > 74 && $mark <= 79){
            return "A";
        }else if($mark > 79 && $mark <= 100){
            return "A+";
        }
        return "IC";
    }
}
