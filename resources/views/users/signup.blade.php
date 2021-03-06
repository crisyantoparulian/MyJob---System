@extends("layout.master")
@section("content")

{!! Form::open(['route' => 'signup.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}
<div class="panel panel-danger">
      <div class="panel-heading">SIGN UP</div>
      <div class="panel-body">
      

<div class="form-group">


<div class="form-group">
{!! Form::label('email', 'Email', array('class' => 'col-lg-3 control-label')) !!}
<div class="col-lg-4">
{!! Form::text('email', null, array('class' => 'form-control','placeholder'=>'Your Email Here'))
!!}
<div class="text-danger">{!! $errors->first('email') !!}</div>
</div>
<div class="clear"></div>
</div>

<div class="form-group">
{!! Form::label('date_of_birth', 'Date Of Birth', array('class' => 'col-lg-3 control-label')) !!}
<div class="col-lg-4">
{!! Form::text('date_of_birth', null, array('class' => 'form-control','placeholder'=>'YYY/MM/DD')) !!}
<div class="text-danger">{!! $errors->first('date_of_birth') !!}</div>
</div>
</div>
<div class="clear"></div>


<div class="form-group">
{!! Form::label('password', 'Password', array('class' => 'col-lg-3 control-label')) !!}
<div class="col-lg-4">

{!! Form::password('password', array('class' => 'form-control','placeholder'=>'Password')) !!}

<div class="text-danger">{!! $errors->first('password')
!!}</div>
</div>
<div class="clear"></div>
</div>
<div class="form-group">
{!! Form::label('password_confirmation', 'Password Confirm',array('class' => 'col-lg-3 control-label')) !!}
<div class="col-lg-4">
{!! Form::password('password_confirmation', array('class' =>'form-control','placeholder'=>'Re-Password')) !!}
</div>
<div class="clear"></div>
</div>
<div class="form-group">
<div class="col-lg-3"></div>
<div class="col-lg-4">
{!! Form::submit('Signup', array('class' => 'btn btn-raised btn-primary')) !!}
</div>
<div class="clear"></div>
</div>
</div>
 </div>
    </div>
{!! Form::close() !!}
@stop