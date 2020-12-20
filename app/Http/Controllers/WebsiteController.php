<?php

namespace App\Http\Controllers;

use App\Mail\Forget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMessage;
use App\Models\Course;
use App\Models\Employees_affair_deanship;
use App\Models\Trainee;
use App\Models\Trainer;
use App\Models\Training_dept_stuff;

class WebsiteController extends Controller
{
    public function index(){
        return view('home_pages.home_page');
    }

    public function about(){
        return view('home_pages.about');
    }

    public function faqs(){
        return view('home_pages.faqs');
    }

    public function courses(){
        $courses=Course::all();
        return view('home_pages.course',compact('courses'));
    }

    public function course_data($id){
        $course=Course::find($id);
        return view('home_pages.course_data',compact('course'));
    }

    public function contact(){
        return view('home_pages.contact');
    }

    public function sendMessage(Request $request){
        $data=['name'=>$request->name,'phone'=>$request->phone,'subject'=>$request->subject,'email'=>$request->email,'message'=>$request->message];
        Mail::to('ggsdgq@gmail.com')->send(new SendMessage($data));
        return redirect('/')->with('success','message sent successfully');
    }

    public function login(){
        return view('home_pages.login');
    }

    public function logged(Request $request){
        $deanship=Employees_affair_deanship::where(['email'=>$request->email,'password'=>$request->password])->first();
        if($deanship){
            if($request->mbrGroup==1){
                if(Training_dept_stuff::where('deanship_id',$deanship->id)->count()>0)
                    return redirect('/profile');
            }else if($request->mbrGroup==2){
                if(Trainer::where('deanship_id',$deanship->id)->count()>0)
                    return redirect('/profile');
            }else{
                if(Trainee::where('deanship_id',$deanship->id)->count()>0)
                    return redirect('/profile');
            }
        }

        return redirect('/login');
    }

    public function forget_password(){
        return view('home_pages.forget');
    }

    public function forget_message(Request $request){
        if(Employees_affair_deanship::where('email',$request->email)->count()==0){
            return redirect('/');
        }

        $code=rand (1000,9999);
        session()->put('email',$request->email);
        session()->put('code',$code);

        $data=['code'=>$code];
        Mail::to($request->email)->send(new Forget($data));
        return redirect('confirm');
    }

    public function signup(){
        return view('home_pages.registration');
    }

    public function signdone(Request $request){
        $deanship=new Employees_affair_deanship;
        $deanship->fname=$request->fname;
        $deanship->lname=$request->lname;
        $deanship->email=$request->email;
        $deanship->gender=$request->gender;
        $deanship->password=$request->password;
        $deanship->phone=$request->phone;
        $deanship->group=$request->major;
        $deanship->save();

        $trainee=new Trainee;
        $trainee->fname=$request->fname;
        $trainee->lname=$request->lname;
        $trainee->major=$request->major;
        $trainee->course_id=$request->course_id;
        $trainee->deanship_id=$deanship->id;
        $trainee->save();
        return redirect('/login');
    }

    public function confirm_code(){
        return view('home_pages.confirm');
    }

    public function check_code(Request $request){
        if(session('code')!=$request->code)
            return back()->with('error','Error code');
        session()->forget('code');
        return redirect('/new_password');
    }

    public function new_password(){
        return view('home_pages.new_password');
    }

    public function password_reset(Request $request){
        $emp=Employees_affair_deanship::where('email',session('email'))->first();
        $emp->password=$request->password;
        $emp->Save();
        session()->forget('email');
        return redirect('/login');
    }
}
