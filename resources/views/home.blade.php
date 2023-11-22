@extends('layout.main')
@section('content')
@foreach ($trains as $train)
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">AZIENDA: {{$train->Azienda}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">STAZIONE DI PARTENZA: {{$train->Stazione_di_partenza}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">STAZIONE DI ARRIVO{{$train->Stazione_di_arrivo}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">ORARIO DI PARTENZA{{$train->Orario_di_partenza}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">ORARIO DI ARRIVO{{$train->Orario_di_arrivo}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">TRENO S{{$train->Codice_Treno}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">NUMERO DI CARROZE{{$train->Numero_Carrozze}}</h6>
    </div>
  </div>
@endforeach
@endsection
