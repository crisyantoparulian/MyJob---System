@extends("layout.master")
@section("content")
<h3>Edit Profile</h3>
{!! Form::model($detail, ['route' => ['details.update', $detail->user_id],'files'=>true, 'method' => 'put', 'class' => 'form-horizontal', 'role' =>'form']) !!}
@include('users.form')
{!! Form::close() !!}
@stop