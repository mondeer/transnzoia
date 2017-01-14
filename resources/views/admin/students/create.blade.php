@extends ('admin.adminhome')

@section('content')


<h3><i class="fa fa-angle-right"></i> Create A New Student</h3>

    <!-- INLINE FORM ELELEMNTS -->
    <div class="row mt">

        <div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Fill in Student Details</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {{$errors->first()}}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                          action="{{ url('/students/create') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">schools Id</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="schools_id" value="{{ old('schools_id') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Student First Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Student Middle Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Student Last Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Student Email</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Student Mobile Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Date of admission</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="Y-M-D" name="adm_date" value="{{ old('adm_date') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Course Enrolled</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="course" value="{{ old('course') }}">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                <select name="gender" class="form-control">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Student Registration</label>
                            <div class="col-md-6">
                              <input type="text" class="form-control" name="student_reg" value="{{ old('student_reg') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Date of Birth</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="Y-M-D" name="dob" value="{{ old('dob') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Upload Students Photo.</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="profile_pix" placeholder="Upload Image"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Submit Entry</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /col-lg-12 -->

        <div class="col-lg-6">

        </div>

    </div><!-- /row -->
@endsection
