@extends('layouts.app')
       
	@section('content')
            
            
        <!-- Modal body -->
	    <div class="container">
			<div class="row">
				<div class="col-md-5">
	    			<h4 class="text-center">Employee Registration</h4>
	    		</div>
	    	</div> <br>  
	        <form action="{{route('employee.store')}}" method="post">
	        	{{ csrf_field() }}
	        	<div class="row">
	        		<div class="col-md-5">
			            <div class="form-group">
			                <label for="cname">Company Name:</label>
			                <select name="company_id" id="cname" class="form-control" >
			                    <option>--Select Company--</option>
			                    @foreach($company as $company)
			                    <option {{ $company->id == old('company_id') ? 'selected':'' }} value="{{$company->id}}">{{$company->name}}</option>
			                    @endforeach
			                </select>
			                @error('company_id')
			                <span>
			                	{{ $message }}
			                </span>
			                @enderror
			            </div>
			         </div>
			    </div>
			    <div class="row">
			    	<div class="col-md-5">
			            <div class="form-group">
			                <label for="first_Name">First Name:</label>
			                <input type="text" class="form-control" id="first_Name" placeholder="Enter First Name" name="first_Name" value="{{old('first_Name')}}">
			                @error('first_Name')
			                <span>
			                	{{ $message }}
			                </span>
			                @enderror
			               
			            </div>
			        </div>
			    </div>
			    <div class="row">
			    	<div class="col-md-5">

			            <div class="form-group">
			                <label for="lname">Last Name:</label>
			                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="last_name" value="{{oid('last_name')}}">
			                @error('last_name')
			                <span>
			                	{{ $message }}
			                </span>
			                @enderror
			               
			            </div>
			        </div>
			    </div>
			    <div class="row">
			    	<div class="col-md-5">
				            <div class="form-group">
				                <label for="email">Email:</label>
				                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{old('email')}}">
				                @error('email')
				                <span>
				                	{{ $message }}
				                </span>
				                @enderror
				           
				            </div>
				        </div>
				    </div>
				    <div class="row">
				    	<div class="col-md-5">
					            <div class="form-group">
					                <label for="phone">Phone:</label>
					                 <input type="text" class="form-control" id="pho
					                 " placeholder="Enter Phone Number" name="phone" value="{{old('phone')}}">
					           			@error('phone')
					                <span>
					                	{{ $message }}
					                </span>
					                @enderror
					            </div>
					    </div>
					</div>
					<div class="row">
						<div class="col-md-4">
			                <button type="submit" class="btn btn-primary">Submit</button>
			                <button type="reset" class="btn btn-danger" >Close</button>
			            </div>
			            <div class="col-md-1">
			                <a href="{{route('home')}}" class="btn btn-primary">Back</a>
			            </div>
			        </div>
	        </form>
	    </div>
     
   @endsection