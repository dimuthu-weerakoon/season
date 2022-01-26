@extends('dashboard.main')

@section('dashboard-content')


@if (is_countable($season) && count($season) > 0)

@foreach ($season as $ticket)



<div class="row g-2">
<div class="col-md-12">
    <div class="col-md-6">
    <div class="card">
        <div class="card-body">


    <table class="table table-bordered border-dark">

        <thead>

        <tr>
            <th scope="col" colspan="8" class="text-center">Mothly Season Ticket
            </th>

        </tr>
        <tr>
            <th scope="col" colspan="4">Fare: <span class="float-end">Rs.{{$ticket->ticket_fee}}.00</span></th>
            <th scope="col" colspan="4">Price: </th>

        </tr>
        <tr>
            <th scope="col" colspan="8">Name: <span class="float-end">{{$ticket->name}}</span></th>


        </tr>
        <tr>
            <th scope="col" colspan="6">Identity Card Number: <span class="float-end">{{$ticket->nic}}</span></th>
            <th scope="col" colspan="2">Male or Female: <span class="float-end">{{$ticket->gender}}</span></th>



        </tr>
        <tr>
            <th scope="col" colspan="8" class="text-center">Not valid till date is cancelled by Conductor,Not transferable
                Issued sunbject to Board Regulation.
            </th>

        </tr>
        <tr>
            <th scope="col" colspan="8">No: <span class="float-end">{{$ticket->id}}</span></th>

        </tr>
    </thead>

    </table>

    </div>

</div>
</div>


</div>



<div class="col-md-6">

<div class="card">
    <div class="card-body">






<table class="table table-bordered border-dark">

    <thead>

    <tr>
        <th scope="col" colspan="8">From:<span class="float-end">{{$ticket->starting_point}}</span><br>
            To:<span class="float-end">{{$ticket->destination_point}}</span>
        </th>

    </tr>
    <tr>
        <th scope="col" colspan="8">Intercganging Point:<span class="float-end">{{$ticket->interchanging_point}}</span></th>

    </tr>
    <tr>
        <th scope="col" colspan="4">Route Number:<span class="float-end">{{$ticket->route_no}}</span></th>
        <th scope="col" colspan="4">Month: <span class="float-end">{{$ticket->created_at->format('M/Y')}}</span></th>

    </tr>
    <tr>
        <th scope="col" colspan="5">Season Category: <span class="float-end">{{$ticket->category}}</span></th>
        <th scope="col">1</th>
        <th scope="col">2</th>
        <th scope="col">3</th>

    </tr>
    <tr>
        <th scope="col" class="bg-dark"></th>
        <th scope="col">4</th>
        <th scope="col">5</th>
        <th scope="col">6</th>
        <th scope="col">7</th>
        <th scope="col">8</th>
        <th scope="col">9</th>
        <th scope="col">10</th>
    </tr>
    <tr>
        <th scope="col" class="bg-dark"></th>
        <th scope="col">11</th>
        <th scope="col">12</th>
        <th scope="col">13</th>
        <th scope="col">14</th>
        <th scope="col">15</th>
        <th scope="col">16</th>
        <th scope="col">17</th>
    </tr>
    <tr>
        <th scope="col" class="bg-dark"></th>
        <th scope="col">18</th>
        <th scope="col">19</th>
        <th scope="col">20</th>
        <th scope="col">21</th>
        <th scope="col">22</th>
        <th scope="col">23</th>
        <th scope="col">24</th>
    </tr>
    <tr>
        <th scope="col" class="bg-dark"></th>
        <th scope="col">25</th>
        <th scope="col">26</th>
        <th scope="col">27</th>
        <th scope="col">28</th>
        <th scope="col">29</th>
        <th scope="col">30</th>
        <th scope="col">31</th>
    </tr>


      </thead>

  </table>

</div>
</div>
</div>
</div>



@endforeach
@else
<h3>You didn,t Registered for Season</h3>
@endif

@endsection
