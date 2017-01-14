<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use transcounty\Schools;
use Sentinel;
use transcounty\Student;
use Charts;

class SchoolController extends Controller
{
    public function create(){
        return view('admin.schools.create');
    }

    public function postCreate(Request $request){
      $school = new Schools;

      $school->registration = $request->input('registration');
      $school->name = $request->input('name');
      $school->email = $request->input('email');
      $school->location = $request->input('location');
      $school->reg_date = $request->input('reg_date');
      $school->save();

      $user = Sentinel::registerAndActivate([
        'email'=>$school->email,
        'password'=>$school->registration,
        'first_name'=>$school->name,
      ]);

    //   $role = Sentinel::findRoleBySlug('admin');
    //   $role->users()->attach($user);

      dd($school);
    }

    public function login(){
      return view('pages.schools.login');
    }

    public function postLogin(Request $request){
      Sentinel::forceAuthenticate($request->all());
      return redirect('/pages/schools/profile');
    }

    public function profile(){
      $school = Sentinel::getUser();
      $schprofile = Schools::where('email', $school->email)->get()->first();

      $students = Student::where('schools_id', $schprofile->id)->get();

      $chart = Charts::database($students, 'pie', 'highcharts')
         ->elementLabel("Courses")
         ->title('Courses')
         ->dimensions(400, 250)
         ->responsive(false)
         ->groupBy('course');
      $courses = Charts::database($students, 'bar', 'highcharts')
          ->elementLabel("Courses")
          ->title('Courses')
          ->dimensions(400, 250)
          ->responsive(false)
          ->groupBy('course');
      $course = Charts::database($students, 'line', 'highcharts')
          ->elementLabel("Courses")
          ->title('Courses')
          ->dimensions(400, 250)
          ->responsive(false)
          ->groupBy('course');

      return view('/pages/schools/profile')->with(array(
        'schprofile'=>$schprofile,
        'chart'=>$chart,
        'course'=>$course,
        'courses'=>$courses
      ));
    }

    public function CreateStudent(){
      return view('pages.schools.createstudent');
    }

    public function postCreateStudent(Request $request){
      // $school_id = $request->input('schools_id');
      $sch = Sentinel::getUser();
      $school = Schools::where('email', $sch->email)->get()->first();
      $id = $school->id;
      $student = new Student;
      $student->schools_id = $id;
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

      return redirect('/pages/schools/viewstudents');
    }

    public function viewStudents(){

        $school = Sentinel::getUser();
        $school = Schools::where('email', $school->email)->get()->first();

        $students = Student::where('schools_id', $school->id)->get();

        return view('pages.schools.viewstudents')->with('students', $students);


    }

    // public function charts(){
    //   $chart = Charts::database(Student::all(), 'pie', 'google')
    //      ->elementLabel("Courses")
    //      ->title('Courses')
    //      ->dimensions(1000, 500)
    //      ->responsive(false)
    //      ->groupBy('course');
    //   $courses = Charts::database(Student::all(), 'bar', 'google')
    //       ->elementLabel("Courses")
    //       ->title('Courses')
    //       ->dimensions(1000, 500)
    //       ->responsive(false)
    //       ->groupBy('course');
    //
    //   return view('admin.students.chart')->with(['chart'=>$chart, 'courses'=>$courses]);
    // }

}
