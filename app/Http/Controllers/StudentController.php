<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use transcounty\Students;
use DB;
use Sentinel;
use Charts;
use transcounty\Schools;

class StudentController extends Controller
{
    public function index(){
      return view ('/pages/students/profile');
    }

    public function Create(){
      return view('admin.students.create');
    }

    public function postCreate(Request $request){

      $student = new Students;
      $student->first_name = $request->input('first_name');
      $student->middle_name = $request->input('middle_name');
      $student->last_name = $request->input('last_name');
      $student->email = $request->input('email');
      $student->mobile = $request->input('mobile');
      $student->adm_date = $request->input('adm_date');
      $student->course = $request->input('course');
      $student->gender = $request->input('gender');
      $student->student_reg = $request->input('student_reg');
      $student->dob = $request->input('dob');
      $student->profile_pix = $request->input('profile_pix');
      $student->save();

      $user = Sentinel::registerAndActivate([
        'email'=>$student->email,
        'password'=>$student->student_reg,
        'first_name'=>$student->first_name,
        'last_name'=>$student->last_name
      ]);

      $student->school_name = $request->input('school_name');
      $school = Schools::where('name', $student)->get()->first();
      $school->schools()->attach($school);
      
      return redirect('/students/view');
    }

    public function view(Request $request){
      $students = Students::all();
      return view('admin.students.view')->with('students', $students);
      // return ($students);
    }

    public function login(Request $request){
      return view('pages.students.login');
    }

    public function postLogin(Request $request){
      if (Sentinel::check()) {
        return redirect('/pages/students/profile');
      }
      Sentinel::forceAuthenticate($request->all());
      return redirect('/pages/students/profile');
    }

    public function logout(){
      Sentinel::logout();
       return redirect('/');
    }

    public function charts(){
      $chart = Charts::database(Students::all(), 'pie', 'google')
         ->elementLabel("Courses")
         ->title('Courses')
         ->dimensions(1000, 500)
         ->responsive(false)
         ->groupBy('course');
      $courses = Charts::database(Students::all(), 'bar', 'google')
          ->elementLabel("Courses")
          ->title('Courses')
          ->dimensions(1000, 500)
          ->responsive(false)
          ->groupBy('course');

      return view('admin.students.chart')->with(['chart'=>$chart, 'courses'=>$courses]);
    }

    public function profile(){
      $student = Sentinel::getUser();
      $stuprofile = Students::where('email', $student->email)->get()->first();

      return view('/pages/students/profile')->with(['stuprofile'=>$stuprofile]);
    }
}
