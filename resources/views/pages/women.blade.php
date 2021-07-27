@extends('template.main')

@section('content')
    <h1>Women</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dataWomen as $member)
          <tr>
            <th scope="row">{{$member->id}}</th>
            <td>{{$member->name}}</td>
            <td>{{$member->age}}</td>
            <td>{{$member->gender}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection