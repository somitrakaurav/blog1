@extends('layouts.app')

@section('content')
<body>
    <div class="container">
          <div class="row">
            <div class="col-md-3">
              <a href="{{route('company.create')}}" class="btn btn-primary">Create Company</a>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3">  
              <a href="{{route('employee.create')}}" class="btn btn-primary">Create Employee</a>
            </div>
          </div>
          <br/>
          <br/>
          <div class="row">
            <div class="col-md-3">
              <a href="{{route('company.index')}}" class="btn btn-primary">View Companies</a>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3">  
              <a href="{{route('employee.index')}}" class="btn btn-primary">View  Employees</a>
            </div>
          </div> 
         
        
      </div>

@endsection
