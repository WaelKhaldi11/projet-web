@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nos offres spéciales</h1>
        <ul>
            @foreach($offers as $offer)
                <li>
                    <h2>{{ $offer->nom }}</h2>
                    <p>{{ $offer->description }}</p>
                    <p>Date de début : {{ $offer->date_debut }}</p>
                    <p>Date de fin : {{ $offer->date_fin }}</p>
                    <p>Réduction : {{ $offer->reduction }}%</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
