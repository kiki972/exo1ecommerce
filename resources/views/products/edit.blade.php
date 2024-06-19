<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier le Produit</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description :</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Prix :</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
        </form>
    </div>
@endsection