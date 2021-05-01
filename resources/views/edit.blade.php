
 @extends ('app')


@section('title')
   {{ 'edit student' }}
@endsection

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header d-sm-flex align-items-center justify-content-between">
     <h3>Edit Student</h3>
     <a href="{{ route('home') }}" class="btn btn-info">all student</a>
    </div>
    <div class="card-body">
    @if(Session :: has('massage'))
      <div class="alert alert-success">
        <strong> {{ session::get('massage') }} </strong>
      </div>
    @endif
     <form action="{{ route('update', $student->id) }}" method="post">
     @csrf
     @method('put')
       <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="student_name" value="{{ $student->name }}"></br>
        @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

       <input type="text" class="form-control @error('class_name') is-invalid @enderror" name="class_name" placeholder="class name" value="{{ $student->class_name }}"></br>
       @error('class_name')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

       <input type="text" class="form-control @error('address') is-invalid @enderror" name="roll" placeholder="student roll" value="{{ $student->roll }}"></br>
       @error('address')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

       <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="student address" value="{{ $student->address }}"></br>
       @error('address')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

       <button type="submit" class="btn btn-success">update</button>
     </form>
    </div>
  </div>
</div>



@endsection


