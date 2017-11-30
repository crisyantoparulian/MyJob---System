@extends('layout.master')

@section('content')

<div class="panel panel-info">
	<div class="panel-heading">
		<center>
		<h1>
		Manage User
		</h1>
		</center>
	</div>
	<div class="panel-body">
		<a href="{{ URL('admin/manages/create') }}" class="btn btn-raised btn-primary pull-right">Tambah</a>
		<table class="table table-bordered table-hover ">
			<thead>
				<tr>
					<th>Email</th>
					<th>Born</th>
					<th>Full Name</th>
					<th>Photo</th>
					<th>Phone</th>
					<th>Status CV</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				@foreach ($details as $detail)
					<tr>
						<td>{{ $detail->email }}</td>
						<td>{{ $detail->date_of_birth }}</td>
						<td>{{ $detail->full_name }}</td>
						<td><div><img class="photoku" alt="" src="/photo/{{ $detail->photo }}" /></div></td>
						<td>{{ $detail->phone_number }}</td>
						<td>{{ $detail->status_cv }}</td>
						<td> {!! Form::open(['method' => 'DELETE', 'route'=>['manages.destroy', $detail->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
					</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@stop