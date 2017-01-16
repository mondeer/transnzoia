@extends('pages.schools.schoolhome')

@section('content')
    <h3><i class="fa fa-angle-right"></i> Ujumbe Maalum</h3>
     <!-- INLINE FORM ELELEMNTS -->
    <div class="row mt">

        <div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Post News</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {{$errors->first()}}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                          action="{{ url('/pages/schools/newscreate') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Content</label>
                            <div class="col-md-6">
                                <input type="textarea" class="form-control" name="content" value="{{ old('content') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Submit News</button>
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
