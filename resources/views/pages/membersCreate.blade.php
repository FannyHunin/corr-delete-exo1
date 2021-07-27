@extends('template.main')

@section('content')
    <h1>Create members</h1>

    <form action="{{route('store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          <label for="exampleInputEmail1" class="form-label">Age</label>
          <input name="age" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

          <label for="exampleInputEmail1" class="form-label">Gender</label>
          <input name="gender" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection