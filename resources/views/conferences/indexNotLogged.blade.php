@extends('layouts.app')

@section('content')
 <div class="container">
    @include('messages')
     @if(isset($conferences))
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
    </tr>
    @endforeach
</tbody>
</table>
     @else
         <p>Doesnt display users when not logged in, cant get $conferences variable, cant find a fix on the internet :)))).</p>
     @endif

 </div>
@endsection
