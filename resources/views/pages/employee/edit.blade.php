@extends('layouts.app')
       
	@section('content')
 
	    <div class="container">
			<div class="row">
				<div class="col-md-8">
	    			<h4 class="text-center">Employee Update</h4>
	    		</div>
	    		<div class="col-md-2"></div>
	    		<div class="col-md-2">	
	    		   <a href="{{route('home')}}" class="btn btn-primary">Back</a>
	    	    </div>
	    	</div>  

	        <form action="{{route('employee.update',$data->e_id)}}" method="post">
	        	{{ csrf_field() }}
	        	@method('PATCH')   {{-- for update --}}
	            <div class="form-group">
	                <label for="cname">Company Name:</label>
	                <select name="company_id" id="cname" class="form-control" >
	                    <option>--Select Company--</option>
	                    @foreach($company as $company)
	                    <option  value="{{$company->id}}" {{ $company->id == $data->company_id ? 'selected':''}}>{{$company->name}}</option>
	                    @endforeach
	                </select>
	                @error('company_id')
	                <span>
	                	{{ $message }}
	                </span>
	                @enderror
	            </div>
	            <div class="form-group">
	                <label for="first_Name">First Name:</label>
	                <input type="text" class="form-control" id="first_Name" placeholder="Enter First Name" name="first_Name" value="{{$data->first_Name}}">
	                @error('first_Name')
	                <span>
	                	{{ $message }}
	                </span>
	                @enderror
	               
	            </div>
	            <div class="form-group">
	                <label for="lname">Last Name:</label>
	                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="last_name" value="{{$data->last_Name}}" >
	                @error('last_name')
	                <span>
	                	{{ $message }}
	                </span>
	                @enderror
	               
	            </div>
	            <div class="form-group">
	                <label for="email">Email:</label>
	                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{$data->email}}">
	                @error('email')
	                <span>
	                	{{ $message }}
	                </span>
	                @enderror
	           
	            </div>
	            <div class="form-group">
	                <label for="phone">Phone:</label>
	                 <input type="text" class="form-control" id="pho
	                 " placeholder="Enter Phone Number" name="phone" value="{{$data->phone}}">
	           			@error('phone')
	                <span>
	                	{{ $message }}
	                </span>
	                @enderror
	            </div>
	                <button type="submit" class="btn btn-primary">Submit</button>
	                <button type="reset" class="btn btn-danger" >Close</button>
	        </form>
	    </div>
     
   @endsection