<?php

namespace App\Http\Controllers\Lecturer;

use App\Student;
use App\Ica;
use App\Ece;
use App\Grade;
use App\Final_result;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinalResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icas = Ica::all();
        $eces = Ece::all();
        $finals = Final_result::all();
        return view('lecturer.final.index',compact('eces','icas','finals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$students = Student::get()->all();
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$level)
    {
        // $subject = $request->input('subject_id');
        // $studentsId = $request->input('id');
        // $type= $request->input('type_id');
        // $question1 = $request->input('q1');
        // $question2 = $request->input('q2');
        // $question3 = $request->input('q3');
        // $question4 = $request->input('q4');
        
        // foreach($studentsId as $key =>$id){

        //     $q1Value = $question1[$key] ?? 0;
        //     $q2Value = $question2[$key] ?? 0;
        //     $q3Value = $question3[$key] ?? 0;
        //     $q4Value = $question4[$key] ?? 0;
        //     $mark = 0;
           
        //     if($type==1){
        //         $best1 = 0;
        //         $best2 = 0;
        //         $qs = [ $q2Value, $q3Value, $q4Value];
        //         $best1 = max($qs);
        //         $indexOfBest1 = array_search($best1, $qs);
        //         $qs[$indexOfBest1] = 0;
        //         $best2 = max($qs);
        //         $mark =  $q1Value*0.5+$best1*0.25 + $best2*0.25;
        //     }
        //    // else if($type==2){
        //         // $mark = 0;
        //     //}


        //     $ece = new Ece();
        //     $ece->student_id = $id;
        //     $ece->subject_id = $subject;
        //     $ece->type_id = $type;
        //     $ece->question1 = $q1Value ;
        //     $ece->question2 = $q2Value;
        //     $ece->question3 = $q3Value;
        //     $ece->question4 = $q4Value;
        //     $ece->mark = $mark;
            
        //     $ece->save();
        //     \App\Jobs\CalculateResults::dispatch(Student::find($id));
        // }
   

        // return response()->redirectToRoute('result.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
