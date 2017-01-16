@extends('pages.students.studenthome')

@section('content')
  <div class="row">
      @foreach($news as $item)
          <div class="col-sm-12">
              <h1><a href="/page/show-news/{{$item->id}}">{{$item->title}}</a></h1>
              {{str_limit($item->content, $limit = 100, $end = "...")}}
              <p> Created: {{$item->created_at->diffForHumans()}}</p>
              <hr>
          </div>
      @endforeach
  </div>
@endsection
