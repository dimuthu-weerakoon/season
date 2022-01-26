@extends('dashboard.main')

@section('dashboard-content')
    <h1>Hi..!{{Auth::user()->name}}</h1>

    @if (isset($user->season))

    @if (is_countable($season) && count($season) == 1)

            See your status
        @endif
@else
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="{{route('season.create')}}" class="btn btn-primary">Create season ticket</a>
    </div>
  </div>
        @endif



@endsection
