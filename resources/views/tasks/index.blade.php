@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="float-start">{{ __('All Tasks') }}</h4>
                    <a href="{{ route('tasks.create') }}" class="btn btn-primary float-end">Add Task</a>
                </div>

                <div class="card-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <th scope="col">#</th>
                               <th scope="col">{{ __('Title') }}</th>
                               <th scope="col"> {{ __('Action') }}</th>
                           </tr>
                       </thead>
                       <tbody>
                        @if (count($tasks) == 0)
                           <tr>
                               <td colspan="3" class="text-center">No tasks found</td>
                           </tr>
                        @else
                           @foreach ($tasks as $task)
                            <tr>
                                <th scope="row">{{ $task->id }}</th>
                                <td>{{ $task->title }}</td>
                                <td>
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>
                                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                                    <form class="float-start me-1" action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                           @endforeach
                        @endif
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
