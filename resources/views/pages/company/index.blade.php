@extends('layouts.app')

@section('content')
  <html>
    <head>
      <body>

              @if($message = Session::get('success'))
                          {{$message}}
               @endif
              
                 
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h4 class="text-center">Company Details</h4>
                </div>
                <div class="col-md-2">
                  <a href="{{route('home')}}" class="btn btn-primary">BACK</a>
                </div>
              </div><br/>
              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>logo</th>
                      <th>Company ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Website</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $row)
                      <tr>
                         <td><img src="{{asset('storage/image/'.$row->logo)}}" width="50PX" height="50px"></td>
                         <td>{{$row->id}}</td>
                         <td>{{$row->name}}</td>
                         <td>{{$row->email}}</td>
                         <td>{{$row->website}}</td>
                         <td>
                           <a class="btn btn-primary" href="{{ route('company.edit',$row->id) }}">Edit</a>
                           <a class="btn btn-primary" href="{{ route('company.show',$row->id) }}">Show</a>
                          </td>
                          <td>
                             <form action="{{ route('company.destroy',$row->id)}}" method="POST" id="delform_{{ $row->id}}">
                              {{csrf_field()}}
                               @method('DELETE')
                               <a class="btn btn-danger" href="javascript:$('#delform_{{ $row->id}}').submit();" onclick="return confirm('Are you sure?')">Delete</a>

                              {{-- <input type="submit" value="Delete" name="" class="btn btn-danger"> --}}
                
                            </form>
                     
                           </td>
                      </tr>
                    @endforeach
                    
                  </tbody>
              </table>
              {{ $data->links() }}
            </div>
            
      </body>
    </head>
  </html>
@endsection