@extends('layouts.app')

@section('content')

    <div class="container">
          <div class="row">
            <div class="col-md-5">
              <h4 class="text-center">Company Update</h4>
            </div>
          </div> 
          <div >
             <form enctype="multipart/form-data" action="{{route('company.update',$company->id)}}" method="post" >
                  {{ csrf_field() }}
                  @method('Patch')
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Company Name" name="name" value="{{$company->name}}"> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{$company->email}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                     {{--  <label for="logo">Logo:</label> --}}
                       <img src="{{asset('storage/image/'.$company->logo)}}" width="50PX" height="50px"> {{$company->logo}}
                       <input type="file" class="form-control" id="logo" name="logo" value=""> 

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="website">WebSite:</label>
                        <input type="text" class="form-control" id="website" placeholder="Enter WebSite" name="website" value="{{$company->website}}"> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a href="{{route('company.index')}}" class="btn btn-danger">BACK</a>
                    </div>
                  </div>
             </form>
          </div>
        
      </div>

@endsection
