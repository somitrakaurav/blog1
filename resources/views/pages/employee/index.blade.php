@extends('layouts.app')

@section('content')
  <html>
    <head> 
    </head>
    <body>
        @if($message = Session::get('success'))
        <script type="text/javascript">
          var msg="{{$message}}";
            setTimeout(function() {
                alert(msg);
              }, 1000);
           
        </script>
            
        @endif
      <div class="container-fluid">
        <div class="row">
                <div class="col-md-10">
                  <h4 class="text-center">Employee Details</h4>
                </div>
                <div class="col-md-2">
                  <a href="{{route('home')}}" class="btn btn-primary">BACK</a>
                </div>
              </div><br/>
          <table class="table table-striped">
              <thead>
                <tr>
                  <th>Empolyee ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>phone</th>
                  <th>Company Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $row)
                <tr>
                 <td>{{$row->e_id}}</td>
                 <td>{{$row->first_Name}}</td>
                 <td>{{$row->last_Name}}</td>
                 <td>{{$row->email}}</td>
                 <td>{{$row->phone}}</td>
                 <td>{{$row->name}}</td>
                 <td>
                  <a class="btn btn-primary" href="{{ route('employee.show',$row->e_id) }}">Show</a>
                  <a class="btn btn-primary" href="{{ route('employee.edit',$row->e_id) }}">Edit</a>
                </td>
   
                 <td>
                    <form action="{{ route('employee.destroy',$row->e_id)}}" method="POST"  id="del_{{$row->e_id}}">
                       {{csrf_field()}}
                        @method('DELETE')
                         <a  href="javascript:$('#del_{{$row->e_id}}').submit();" class="btn btn-danger" onclick="return confirm('Are You Sure Want To delete')">Delete</a> 
                    </form>
                     
                   </td>
                </td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          {{ $data->links() }}
       </div>
     </body>
  </html>
  @endsection