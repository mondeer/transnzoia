@extends('pages.students.studenthome')

@section('content')
<h3><i class="fa fa-angle-right"></i> Students </h3>

  <!-- INLINE FORM ELELEMNTS -->
  <div class="row mt">
      <div class="col-lg-12">
          <div class="content-panel">
            <a href="{{url('/students/create')}}" class="btn btn-info pull-right">Create New Student</a></br></br>
              <table class="table table-striped table-positive table-hover">

                  <thead>
                  <tr>
                      <th><i class="fa fa-user"></i> Id.</th>
                      <th><i class="fa fa-user"></i> Stu Name</th>
                      <th><i class="fa fa-user"></i> Gender</th>
                      <th><i class="fa fa-user"></i> Reg. No.</th>
                      <th><i class="fa fa-user"></i> Email</th>
                      <th><i class="fa fa-user"></i> D.O.B</th>
                      <th></th>
                  </tr>
                  </thead>
                  <tbody>

                      @foreach($students as $student)
                          <tr>
                              <td>{{$student->id}}</td>
                              <td>{{$student->first_name}}</td>
                              <td>{{$student->gender}}</td>
                              <td>{{$student->student_reg}}</td>
                              <td>{{$student->email}}</td>
                              <td>{{$student->dob}}</td>
                              <td>

                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div><!-- /col-lg-12 -->
  </div>
@endsection
