<?php

namespace App\Http\Controllers\Lecturer;

use App\Student;
use App\Subject;
use App\Ica;
use App\IcaType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($level)
    {
        $icas = Ica::all();
        return view('lecturer.ica.index',compact('icas','level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($level, Subject $subject = null)
    {
        if(!$subject){
            $subject = Subject::find(2);
        }
    
        $subjects=Subject::where('level', $level)->get();
        $ica_types=IcaType::get()->pluck('name','id')->toArray();
        $students = Student::where('level', $level)->get();
    
        $icas = Ica::whereIn('student_id', $students->pluck('id')->toArray())
        ->where('subject_id', $subject->id)->get();
        
        $subjects = $subjects->pluck('course_code','id')->toArray();
        return view('lecturer/ica/level',compact('students','subjects','ica_types', 'level', 'icas', 'subject'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $level)
    {
        $subject = $request->input('subject_id');
        $studentsId = $request->input('id');
        $type= $request->input('type_id');
        $ica1 = $request->input('ica1');
        $ica2 = $request->input('ica2');
        $ica3 = $request->input('ica3');

        foreach($studentsId as $key =>$id){

            $ica1Value = $ica1[$key] ?? 0;
            $ica2Value = $ica2[$key] ?? 0;
            $ica3Value = $ica3[$key] ?? 0;
            $mark = 0;

            if($type==1){
                $best1 = 0;
                $best2 = 0;
                $icas = [$ica1Value, $ica2Value, $ica3Value];
                $best1 = max($icas);
                $indexOfBest1 = array_search($best1, $icas);
                $icas[$indexOfBest1] = 0;
                $best2 = max($icas);
                $mark = ($best1 + $best2)/2;
            }
             else if($type==2){
                $mark = ($ica1Value+$ica2Value+$ica3Value)/3;
             }
            else if($type==3){
                $mark = (($ica1Value)*0.3+($ica2Value)*0.3+($ica3Value)*0.4);
             }

            $ica = Ica::where('student_id', $id)->where('subject_id', $subject)->first();
            if(!$ica){
                $ica = new Ica();
            }
           
            $ica->student_id = $id;
            $ica->subject_id = $subject;
            $ica->type_id = $type;
            $ica->ica1 = $ica1Value ;
            $ica->ica2 = $ica2Value;
            $ica->ica3 = $ica3Value;
            $ica->mark = $mark;
            $ica->year = 2019;
            $ica->save();
            \App\Jobs\CalculateResults::dispatch(Student::find($id));
        }


        return response()->redirectToRoute('icas.index', $level);

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
