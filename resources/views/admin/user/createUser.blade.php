@extends('admin.master')
@section('content')

<hr/>
<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            <!--<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">-->
            {!!Form::open(['url'=>'user/save','method'=>'POST','class'=>'form-horizontal'])!!}

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">User Name</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="name" ></textarea>
                    <span class="text-danger"><strong>{{$errors->has('name') ? $errors->first('name') : ''}}</strong></span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">User Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email">
                    <span class="text-danger"><strong>{{$errors->has('email') ? $errors->first('email') : ''}}</strong></span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">User Password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="password">
                    <span class="text-danger"><strong>{{$errors->has('password') ? $errors->first('password') : ''}}</strong></span>
                </div>
            </div>

			 
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="btn" class="btn btn-primary btn-block">Save Manufacturer Information</button>
                </div>
            </div>
            {!!Form::close()!!}
            <!--</form>-->
        </div>
    </div>
</div>



@endsection