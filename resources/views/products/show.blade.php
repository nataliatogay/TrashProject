@extends('layouts.app')

@section('content')

    <h1>Show product</h1>

    <h1 class="title">{{ $product->title }}</h1>
    <div class="content">
        {{$product->description}}

        @can('update', $product)

            <p>
                <a href="/products/{{$product->id}}/edit">Edit</a>
            </p>

        @endcan
    </div>

    {{-- @if($project->tasks->count())
    <div class="box">
            @foreach ($project->tasks as $task)
                <div>
                    <form method="POST" action="/tasks/{{$task->id}}">
                        @method('PATCH')
                        @csrf
                        <label class="checkbox {{$task->completed ? 'is-complete' : ''}}" for="completed">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked' : ''}}/>
                            {{$task->description}}
                        </label>
                    </form>
                </div>
            @endforeach
    </div>
    @endif



    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
        @csrf

        <div class="field">
            <label for="description" class="label">New task</label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="New task">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Add task</button>
            </div>
        </div>

        @include('errors')
    </form> --}}

@endsection
