@extends('layouts.app')

@section('content')
<div class="container my-5">
  <h1 class="text-center mb-4">Lista dei Biglietti</h1>
  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>Nome Passeggero</th>
        <th>Email Passeggero</th>
        <th>Codice Treno</th>
        <th>Prezzo</th>
        <th>Numero del Posto</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tickets as $ticket)
      <tr>
        <td>{{ $ticket->passenger->name }}</td>
        <td>{{ $ticket->passenger->email }}</td>
        <td>{{ $ticket->train->codice_treno }}</td>
        <td>{{ $ticket->price }}</td>
        <td>{{ $ticket->seat_number }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection