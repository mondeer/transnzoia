@extends('pages.students.studenthome')

@section('content')
          <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                  <div class="col-sm-4 col-sm-offset-4">
                      <img src="{{asset('/images/mond.jpg')}}" class="img-circle">
                      <h2>Jkuat </h2>
                  </div>
              </div>

              <div class="col-sm-10 col-sm-offset-1">
                  <div class="col-sm-8 col-sm-offset-2">
                      <div class="panel-heading">
                          <p>Other Details </p>
                      </div>
                      <div class="panel panel-body">
                        <table>
                          <td>
                            <p>School Reg: {{$schprofile->registration}}</p>
                            <p>Located at. : {{$schprofile->location}}</p>
                            <p>Course Enrolled. : {{$schprofile->name}}</p>
                            <p>Registered on: {{$schprofile->reg_date}}</p>
                          </td>
                        </table>

                      </div>

                  </div>
              </div>

              <div class="col-sm-10 col-sm-offset-1">
                  <div style=" margin: 2%; text-align: center;">
                      <a href="#" class="btn btn-primary">Edit Profile</a>
                      <a href="#" class="btn btn-success">View Result</a>
                      <a class="btn btn-danger" href="#">Pay School Fees</a>
                  </div>
              </div>
          </div>
@endsection
