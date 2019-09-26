 @extends('layouts.app')

@section('content')
        <div class="container">
             <form enctype="multipart/form-data" action="{{route('company.store')}}" method="post" >
                  {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-5">
                    <h4 class="text-center ">COMPANY REGISTRATION</h4>
                  </div>
                </div>
                <div class="row"> 
                  <div class="col-md-5">                 
                    <div class="form-group">
                      <label for="name">Name:</label>
                     <input type="text" class="form-control" id="name" placeholder="Enter Company Name" name="name" value="{{old('name')}}">
                     @error('name')
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
                      <label for="logo">Logo:</label>
                      <input type="file" class="form-control" id="logo" name="logo" value="{{old('logo')}}"> 
                      @error('logo')
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
                      <label for="website">WebSite:</label>
                      <input type="text" class="form-control" id="website" placeholder="Enter WebSite" name="website" value="{{old('website')}}">
                      @error('website')
                      <span>
                        {{ $message }}
                      </span>
                      @enderror
                     </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger" >Close</button>
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-1">
                    <a href="{{route('home')}}" class="btn btn-primary">BACK</a>
                  </div>
                </div>
             </form>
        </div>
   @endsection