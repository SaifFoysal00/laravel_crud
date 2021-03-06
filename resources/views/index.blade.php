
 @extends ('app')


    @section('title')
       {{ 'all student' }}
    @endsection

    @section('content')
    <div class="container">
      <div class="card">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
         <h3>All Student</h3>
         <a href="{{ route('create') }}" class="btn btn-info">Create</a>
        </div>
        <div class="card-body">
        @if(Session :: has('massage'))
          <div class="alert alert-danger">
            <strong> {{ session::get('massage') }} </strong>
          </div>
        @endif
         <table class="table table-bordered">
          <thead>
          <tr>
           <th>Id</th>
           <th>Name</th>
           <th>Class Name</th>
           <th>Roll</th>
           <th>Address</th>
           <th>Action</th>
          </tr>
          </thead>

          <tbody>
          @foreach($students as $student)
          
          <tr>
              <td>{{++$loop->index}}</td>
              <td>{{ $student->name }}</td>
              <td>{{ $student->class_name }}</td>
              <td>{{ $student->roll }}</td>
              <td>{{ $student->address }}</td>
              <td>
                <!-- <a href="#" class="btn btn-sm btn-info">View</a> -->
                <a href="{{ url ('edit',$student->id) }}" class="btn btn-sm btn-success">Edit</a>
                <form action="{{ url ('delete',$student->id) }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
                
                <!-- <a href="#" class="btn btn-sm btn-danger">Delete</a> -->
              </td>
           </tr>

          @endforeach
           
          </tbody>
         </table>
        </div>
      </div>
    </div>

    

@endsection


 