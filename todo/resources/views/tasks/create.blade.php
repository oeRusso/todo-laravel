@extends('layouts.app')

@section('content')
    <h1> New Task</h1>

    <form action="/tasks" method="POST">
        <div class="form-group">
            @csrf
            <label for="description">TaskDescripcion</label>
            <input type="text" class="form-control" name="description">
            @error('description')
                <p  class="alert alert-danger mt-2" role="alert">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success mt-2">Create task</button>
        </div>
    </form>
@endsection
