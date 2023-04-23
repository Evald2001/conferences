@extends('Users.esobo.Desktop.Laravel-10-crud-step-by-step-main.resources.views.layouts.app')

@section('content')
    <div class="container">
        <div class="card col-6 offset-3">
            <h5 class="card-header">Edit Customer</h5>
            <div class="card-body">
                @include('Users.esobo.Desktop.Laravel-10-crud-step-by-step-main.resources.views.messages')
                <form action="/customers/{{$customer->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="Name" class="form-control @error('Name') is-invalid @enderror"
                               value="{{$conference->Name}}">
                        @error('Name')
                        <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="date" name="Date" class="form-control @error('Date') is-invalid @enderror"
                               value="{{$conference->Date}}">
                        @error('Date')
                        <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                               value="{{$conference->description}}">
                        @error('description')
                        <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
                        @enderror
                        <div class="mb-3">
                            <label class="form-label">Location</label>
                            <input type="text" name="Location" class="form-control @error('Location') is-invalid @enderror"
                                   value="{{$conference->Location}}">
                            @error('Location')
                            <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
