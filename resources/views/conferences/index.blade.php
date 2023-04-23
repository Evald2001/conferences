@extends('layouts.app')

@section('content')
 <div class="container">
    @include('messages')
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Description</th>
        <th scope="col">Location</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($conferences as $conference)
    <tr>
      <th scope="row">{{$conference->id}}</th>
      <td>{{$conference->Name}}</td>
      <td>{{$conference->Date}}</td>
      <td>{{$conference->description}}</td>
        <td>{{$conference->Location}}</td>
      <td>
        <form action="/customers/{{$conference->id}}" method="POST">
            @method('DELETE')
            @csrf
            <a href="/conferences/{{$conference->id}}" class="btn btn-success">View</a>
            <a href="/conferences/{{$conference->id}}/edit" class="btn btn-success">Edit</a>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
</tbody>
</table>
 </div>
@endsection
