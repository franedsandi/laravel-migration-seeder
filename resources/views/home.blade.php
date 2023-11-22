@extends('layout.main')
@section('content')
@foreach ($trains as $train)
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">AZIENDA: {{$train->company}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">STAZIONE DI PARTENZA: {{$train->departure_station}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">STAZIONE DI ARRIVO: {{$train->arrival_station}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">ORARIO DI PARTENZA: {{$train->departure_time}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">ORARIO DI ARRIVO: {{$train->arrival_time}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">TRENO: {{$train->train_code}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">NUMERO DI CARROZE: {{$train->wagons_number}}</h6>
    </div>
  </div>
@endforeach
@endsection
