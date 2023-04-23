@extends('layouts.app')

@section('content')
<div class="container">
<div class="card col-6 offset-3">
  <h5 class="card-header">{{$conference->Name}}</h5>
  <div class="card-body">
    <h5 class="card-title">{{$conference->Date}}</h5>
    <p class="card-text">{{$conference->description}}</p>
      <p class="card-text">{{$conference->Location}}</p>
  </div>
</div>
</div>
@endsection
