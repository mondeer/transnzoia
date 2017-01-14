@extends('pages.schools.schoolhome')

@section('content')
          <div class="row">
            <div class="col-lg-6">
                {!! $chart->render() !!}
            </div>
            <div class="col-lg-6">
                {!! $courses->render() !!}
            </div>
          </div>

          <div class="col-sm-10 col-sm-offset-1">
              <div style=" margin: 2%; text-align: center;">
                  <a href="/pages/schools/viewstudents" class="btn btn-primary">View Students</a>
                  <a href="#" class="btn btn-success">View Result</a>
                  <a class="btn btn-danger" href="#">Pay School Fees</a>
              </div>
          </div>

          <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                  <div class="col-sm-4">
                      <img src="{{asset('/images/github.png')}}" class="img-circle">

                  </div>
              </div>

              <div class="col-sm-6 col-sm-offset-1">
                  <div class="col-sm-8 col-sm-offset-2">
                      <div class="panel-heading">
                          <p>School Details </p>
                      </div>
                      <div class="panel">
                        <h1 class="imond">{{ Sentinel::getUser()->first_name }} Polytechnic</h1>

                        <table class="table table-bordered table-condensed table-hover">
                          <tbody>
                            <tr class="info">
                                <td>School Name.</td>
                                <td>{{$schprofile->name}}</td>
                            </tr>
                          </tbody>

                          <tbody>
                            <tr>
                                <td> School Registration.</td>
                                <td>{{$schprofile->registration}}</td>
                            </tr>
                          </tbody>

                          <tbody>
                            <tr class="info">
                                <td> School Location.</td>
                                <td> {{$schprofile->location}}</td>
                            </tr>
                          </tbody>

                          <tbody>
                            <tr>
                                <td>School Reg. Date.</td>
                                <td> {{$schprofile->reg_date}}</td>
                            </tr>
                          </tbody>
                        </table>

                      </div>

                  </div>
              </div>


          </div>
@endsection
