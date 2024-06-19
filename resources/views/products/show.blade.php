<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails du Produit</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text"><strong>Prix :</strong> {{ $product->price }}</p>
                <p class="card-text"><strong>Date de Création :</strong> {{ $product->created_at }}</p>
            </div>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Retour à la Liste des Produits</a>
    </div>
@endsection