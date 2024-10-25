@extends('layouts.app')

@section("page-title", "Treni in partenza oggi")

@section('content')
<div class="container my-5">
  <h1 class="text-center mb-4">Treni in Partenza Oggi</h1>
  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Azienda</th>
        <th scope="col">Stazione di Partenza</th>
        <th scope="col">Stazione di Arrivo</th>
        <th scope="col">Orario di Partenza</th>
        <th scope="col">Orario di Arrivo</th>
        <th scope="col">Codice Treno</th>
        <th scope="col">Numero Carrozze</th>
        <th scope="col">In Orario</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($trains as $train)
      <tr class="{{ $train->in_orario ? '' : 'table-warning' }}">
        <td>{{ $train->azienda }}</td>
        <td>{{ $train->stazione_di_partenza }}</td>
        <td>{{ $train->stazione_di_arrivo }}</td>
        <td>{{ $train->orario_di_partenza }}</td>
        <td>{{ $train->orario_di_arrivo }}</td>
        <td>{{ $train->codice_treno }}</td>
        <td>{{ $train->numero_carrozze }}</td>
        <td>
          <span class="badge {{ $train->in_orario ? 'bg-success' : 'bg-danger' }}">
            {{ $train->in_orario ? 'Sì' : 'No' }}
          </span>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection