@extends('layouts.app')

@section('content')
<div class="container">



    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"> {{ $task->title }}</h5>
          <p class="card-text">{{ $task->description }}</p>
        </div>
      </div>

</div>
@endsection