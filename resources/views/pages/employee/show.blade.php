@extends('layouts.app')

@section('content')
<html>
	<head></head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<label style="font-size: 30px"><b><i>Employee Id:</i></b></label>
				</div>
				<div class="col-md-3">
					<span style="font-size: 35px"><i>{{$data->e_id}}</i></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label style="font-size: 30px"><b><i>Company Name:</i></b></label>
				</div>
				<div class="col-md-3">
					<span style="font-size: 35px"><i>{{$data->name}}</i></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label style="font-size: 30px"><b><i>First Name:</i></b></label>
				</div>
				<div class="col-md-3">
					<span style="font-size: 35px"><i>{{$data->first_Name}}</i></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label style="font-size: 30px"><b><i>Last Name:</i></b></label>
				</div>
				<div class="col-md-3">
					<span style="font-size: 35px"><i>{{$data->last_Name}}</i></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label style="font-size: 30px"><b><i>Email:</i></b></label>
				</div>
				<div class="col-md-3">
					<span style="font-size: 35px"><i>{{$data->email}}}</i></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label style="font-size: 30px"><b><i>Phone No:</i></b></label>
				</div>
				<div class="col-md-3">
					<span style="font-size: 35px"><i>{{$data->phone}}</i></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
				 <a href="{{route('employee.index')}}" class="btn btn-primary">BACK</a>
                </div>
             </div>
			</div>
	</body>
</html>
@endsection