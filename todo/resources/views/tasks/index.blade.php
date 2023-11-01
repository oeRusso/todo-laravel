@extends('layouts.app')

@section('content')
    <h1>Task List</h1>
    @foreach ($tasks as $task)
        <div class="card @if ($task->isCompleted()) border-success @endif" style="margin-bottom:20px">
            <div class="card-body">

                <p>
                    @if ($task->isCompleted())
                        <span class="badge bg-success"></span>
                    @endif {{ $task->description }}
                </p>
                @if (!$task->isCompleted())
                    <form action="/tasks/{{ $task->id }}" method="POST">
                        @method('PATCH')
                        @csrf

                        <button class="btn btn-light w-100" input="submit">Complete</button>
                    </form>
                @else
                    <form action="/tasks/{{ $task->id }}" method="POST">
                        @method('DELETE')
                        @csrf

                        <button class="btn btn-danger w-100" input="submit">Delete</button>
                    </form>
                @endif

            </div>
        </div>
    @endforeach
    <a href="/tasks/create" class="btn btn-primary btn-lg w-100">New Task</a>
@endsection
