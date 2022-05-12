{{-- Implemento la pagina main --}}
@extends('layouts.main')

{{-- Do un titolo a questa section --}}
@section('title', 'Movies')

{{-- Punto dove implemento questa section nella pagina principale --}}
@section('main-content')
<div class="container py-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
    {{-- Ciclo sull'array di film ricevuto dal Database --}}
    @foreach ($movies as $movie)
    {{-- Per ogni film creo una card e visualizzo le informazioni inerenti --}}
    <div class="col">
      <div class="card border-dark mb-3">
        <div class="card-header text-center fw-bold">{{ $movie->original_title }}</div>
        <div class="card-body text-dark">
          <h5 class="card-title">{{ $movie->title }}</h5>
          <p>Nazionalità: <span>{{ $movie->nationality }}</span></p>
          <p>Data di uscita: <span>{{ $movie->date }}</span></p>
          <p>Voto: <span>{{ $movie->vote }}</span></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
