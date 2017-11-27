@extends("layout.master")
@section("content")
<div class="col-md-6 col-md-offset-3">
{!! Form::open(['route' => 'login.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}
<div class="panel mypanel">
      <div class="panel-heading">LOGIN</div>
      <div class="panel-body">
      <div class="form-group">
{!! Form::label('email', 'Email', array('class' => 'col-lg-3 control-label')) !!}
<div class="col-lg-6">
{!! Form::text('email', null, array('class' => 'form-control'))
!!}
<div class="text-danger">{!! $errors->first('email') !!}</div>
</div>
<div class="clear"></div>
</div>
<div class="form-group">
{!! Form::label('password', 'Password', array('class' => 'col-lg-3 control-label')) !!}
<div class="col-lg-6">

{!! Form::password('password', array('class' => 'form-control')) !!}
<div class="text-danger">{!! $errors->first('password')!!}</div>
</div>
<div class="clear"></div>
</div>
<div class="form-group">
<div class="col-lg-3"></div>
<div class="col-lg-4">

{!! Form::submit('Login', array('class' => 'btn btn-raised btn-primary')) !!}
<br />
{!! link_to(route('reminders.create'), 'Forgot Password?') !!}
</div>
<div class="clear"></div>
</div>
 </div>
    </div>

{!! Form::close() !!}
</div>
@stop