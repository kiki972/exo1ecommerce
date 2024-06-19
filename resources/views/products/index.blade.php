<!-- resources/views/products/index.blade.php -->

@extends('layouts.app') <!-- Assurez-vous d'avoir un layout app.blade.php ou ajustez selon votre structure -->

@section('content')
    <div class="container">
        <h1>Liste des Produits</h1>

        @if ($products->isEmpty())
            <p>Aucun produit trouvé.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Date de Création</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Voir</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Modifier</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection