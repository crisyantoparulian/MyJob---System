@extends("layout.master")
@section("content")
<div class="col-md-8 col-md-offset-2">
<div class="panel panelform">

            <div class="panel-heading">
              <h3 class="panel-title">Detail User</h3>

            </div>
{!! Form::open(['route' => 'details.store', 'files'=>true,'class' => 'bd-example', 'role' => 'form']) !!}
<div class="panel panel-body">
@include('users.form')
</div>
{!! Form::close() !!}
@stop
</div>