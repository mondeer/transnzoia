<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use transcounty\Student;
use DB;
use Sentinel;
use Charts;
use transcounty\Schools;

class StudentController extends Controller
{
    public function index(){
      return view ('/pages/students/profile');
    }

    

    public function view(Request $request){
      $students = Student::all();
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
      $chart = Charts::database(Student::all(), 'pie', 'google')
         ->elementLabel("Courses")
         ->title('Courses')
         ->dimensions(1000, 500)
         ->responsive(false)
         ->groupBy('course');
      $courses = Charts::database(Student::all(), 'bar', 'google')
          ->elementLabel("Courses")
          ->title('Courses')
          ->dimensions(1000, 500)
          ->responsive(false)
          ->groupBy('course');

      return view('admin.students.chart')->with(['chart'=>$chart, 'courses'=>$courses]);
    }

    public function profile(){
      $student = Sentinel::getUser();
      $stuprofile = Student::where('email', $student->email)->get()->first();

      return view('/pages/students/profile')->with(['stuprofile'=>$stuprofile]);
    }

}
