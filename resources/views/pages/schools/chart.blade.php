@extends('pages.schools.schoolshome')

@section('content')
  <div class="row">
    <div class="col-lg-6">
        {!! $chart->render() !!}
    </div>
    <div class="col-lg-6">
        {!! $courses->render() !!}
    </div>
  </div>
@endsection
