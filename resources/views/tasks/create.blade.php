@extends('layouts.app')

@section('content')
<div class="container">

<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div class="row mb-3">
        <label for="title" class="col-md-12 ">{{ __('Title') }}</label>
        <input id="title"  class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required >
    </div>
    <div class="row mb-3">
        <label for="title" class="col-md-12 ">{{ __('Description') }}</label>
        <textarea id="description" row="5" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required ></textarea>
    </div>
    <div class="row mb-0">
        <div class="col-md-12 offset-md-12">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>
        </div>
    </div>
</form>

</div>
@endsection