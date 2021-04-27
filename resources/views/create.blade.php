
 @extends ('app')


    @section('title')
       {{ 'create student' }}
    @endsection

    @section('content')
    <div class="container">
      <div class="card">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
         <h3>All Student</h3>
         <a href="{{ route('home') }}" class="btn btn-info">all student</a>
        </div>
        <div class="card-body">
        @if(Session :: has('massage'))
          <div class="alert alert-success">
            <strong> {{ session::get('massage') }} </strong>
          </div>
        @endif
         <form action="{{ route('store') }}" method="post">
         @csrf
           <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="student_name" value="{{ old('name') }}"></br>
            @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror

           <input type="text" class="form-control @error('class_name') is-invalid @enderror" name="class_name" placeholder="class name" value="{{ old('class_name') }}"></br>
           @error('class_name')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror

           <input type="text" class="form-control @error('address') is-invalid @enderror" name="roll" placeholder="student roll" value="{{ old('roll') }}"></br>
           @error('address')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror

           <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="student address" value="{{ old('address') }}"></br>
           @error('address')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror

           <button type="submit" class="btn btn-success">create</button>
         </form>
        </div>
      </div>
    </div>

    

@endsection


 