<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use transcounty\Schools;
use Sentinel;

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

}
