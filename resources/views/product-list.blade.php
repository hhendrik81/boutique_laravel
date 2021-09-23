@extends('template')
 
@section('titre')
   
@endsection
 
@section('contenu')

    @foreach($products as $product)

    <h3>{{ $product->Nom }}</h3>
    <p>{{ $product->Description }}</p>
    <p>{{ $product->Prix }} €</p>
    <p>{{ $product->Poids }} kg</p>
    <p>{{ $product->Catégorie }}</p>

    @endforeach

    @endsection