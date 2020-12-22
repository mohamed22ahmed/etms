<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Course;
use App\Models\Dept_head;
use App\Models\Employees_affair_deanship;
use App\Models\Performance;
use App\Models\Trainee;
use App\Models\Trainer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // trainee functions
    public function user_courses(){
        $trainees=Trainee::where('deanship_id',session('id'))->get();
        return view('dashboard.trainee.user_courses',compact('trainees'));
    }

    public function courses(){
        $courses=Course::all();
        return view('dashboard.trainee.courses',compact('courses'));
    }

    public function register_course($id){
        $trainee=Employees_affair_deanship::find(session('id'));
        $x=new Trainee;
        $x->fname=$trainee->fname;
        $x->lname=$trainee->lname;
        $x->major=$trainee->group;
        $x->course_id=$id;
        $x->deanship_id=session('id');
        $x->save();
        return redirect('/user_courses');
    }

    public function assignment(){
        $tr=Trainee::where('deanship_id',session('id'))->first();
        $assignments=Performance::where('trainee_id',$tr->id)->get();
        return view('dashboard.trainee.assignment',compact('assignments'));
    }

    public function attendance(){
        $tr=Trainee::where('deanship_id',session('id'))->first();
        $attendances=Attendance::where('trainee_id',$tr->id)->get();
        return view('dashboard.trainee.attendance',compact('attendances'));
    }

    // trainer functions
    public function trainer_assignment(){
        $trainees=Trainee::all();
        $courses=Course::all();
        $dept_heads=Dept_head::all();
        return view('dashboard.trainer.assignment',compact('trainees','courses','dept_heads'));
    }

    public function trainer_assignment_create(Request $request){
        $trainer=Trainer::where('deanship_id',session('id'))->first();
        $tr=$trainer->id;
        $assignment=new Performance;
        $assignment->trainer=$tr;
        $assignment->trainee_id=$request->trainee_id;
        $assignment->course_id=$request->course_id;
        $assignment->dept_head_id=$request->dept_head;
        $assignment->task_sub=$request->task_sub;
        $assignment->report_sub=$request->report_sub;
        $assignment->save();
        return back();
    }

    public function trainer_attendance(){
        $trainees=Trainee::all();
        $courses=Course::all();
        return view('dashboard.trainer.attendance',compact('trainees','courses'));
    }

    public function trainer_attendance_create(Request $request){
        $trainer=Trainer::where('deanship_id',session('id'))->first();
        $tr=$trainer->id;
        $att=new Attendance;
        $att->trainer=$tr;
        $att->trainee_id=$request->trainee_id;
        $att->course_id=$request->course_id;
        $att->att_date=$request->att_date;
        $att->att_time=$request->att_time;
        $att->save();
        return back();
    }
}
