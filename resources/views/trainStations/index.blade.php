@extends('layouts.app')

@section('content')
<div class="container my-5">
  <h1 class="text-center mb-4">Lista delle Stazioni Ferroviarie</h1>
  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>Nome</th>
        <th>Location</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($stations as $station)
      <tr>
        <td>{{ $station->name }}</td>
        <td>{{ $station->location }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection