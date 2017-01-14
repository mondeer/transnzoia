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
                          action="{{ url('/schools/create') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">schools Reg</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="registration" value="{{ old('registration') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">School Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Schools Email</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Student Location</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="location" value="{{ old('location') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Date of Registration</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" placeholder="Y-M-D" name="reg_date" value="{{ old('reg_date') }}">
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
