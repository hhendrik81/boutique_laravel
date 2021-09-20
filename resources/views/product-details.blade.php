
@extends('template')
 
@section('titre')
    Produit {{$numero}}
@endsection
 
@section('contenu')
    <p>Fiche du produit {{ $numero }}</p>
@endsection