@extends('layouts.app')

@section('content')
<div class="container my-5">
  <h1 class="text-center mb-4">Lista dei Passeggeri</h1>
  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Cognome</th>
        <th scope="col">Email</th>
        <th scope="col">Data di Nascita</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($passengers as $passenger)
      <tr>
        <td>{{ $passenger->name }}</td>
        <td>{{ $passenger->surname }}</td>
        <td>{{ $passenger->email }}</td>
        <td>{{ $passenger->date_of_birth }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection