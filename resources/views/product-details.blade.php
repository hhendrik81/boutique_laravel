
@extends('template')
 
@section('titre')

    {{ $product->Nom }}
    
@endsection
 
@section('contenu')
   
    <h3>{{ $product->Nom }}</h3>
    <p>{{ $product->Prix }} €</p>

@endsection

