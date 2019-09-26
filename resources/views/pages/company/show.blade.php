@extends('layouts.app')

@section('content')
  <html>
    <head>
      <body>
        <div class="container">
            <div class="row">
              <div class="col-md-6">
                <img src="{{asset('storage/image/'.$data->logo)}}" width="50%" height="70%">
              </div>
              <div class="co-md-6">
               
                <span style="font-size: 25px;"><b><i> Company Id:</i></b>    
                  {{$data->id}}</span> <br>
                <span style="font-size: 25px;"><b><i> Company Name:</i></b>    
                  {{$data->name}}</span><br>
                <span style="font-size: 25px;"><b><i> Company Email:</i></b>    
                  {{$data->email}}</span><br>
                <span style="font-size: 25px;"><b><i> Company Website:</i></b>   
                 {{$data->website}}</span><br>
                 <a href="{{route('company.index')}}" class="btn btn-primary">BACK</a>
              </div>

            </div> 
        </div>  
      </body>
    </head>
  </html>
@endsection