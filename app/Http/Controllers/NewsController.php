<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use transcounty\Schools;
use transcounty\News;

class NewsController extends Controller
{
    public function Create(Request $request) {
        return view ('pages.schools.news');
    }

    public function postCreate(Request $request) {
      $user = Sentinel::getUser();
      $school = Schools::where('email', $user->email)->get()->first();

      $school_id = $school->id;

      $news = new News;
      $news->school_id = $school_id;
      $news->title = $request->Input('title');
      $news->content=$request->Input('content');
      $news->save();

      return redirect('/pages/students/news');

    }

    public function show() {
      $user = Sentinel::getUser();

      $student = Students::where('email', $user->email)->get()->first();

      $news = News::where('school_id', $student->school_id)->get();

      return view('/pages/students/news')->with('news', $news);
    }

}
