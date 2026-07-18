@extends('layouts.layoutbase')
 @section('title' , "Gestione Shop")
 @section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold">Elenco Prodotti:</h2>

<div class="d-flex gap-2">
        <a href="{{ route('admin.categories.index') }}" class="btn ">
            <span class="fa-solid fa-tags"></span> Gestisci Categorie
        </a>

        <a href="{{ route('admin.products.create') }}" class="btn btn-success shadow-sm">
            <span class="fa-solid fa-plus"></span> Nuovo Prodotto
        </a>
    </div>
</div>


<div class="card shadow-sm border-0">
    <div class="card-body p-0 overflow-auto">
        <table class="table table-hover table-striped mb-0 text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Immagine</th>
                    <th>Marca</th>
                    <th>Modello</th>
                    <th>Categoria</th>
                    <th>Prezzo</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 60px; height: 60px; object-fit: cover;" class="rounded border shadow-sm">
                        </td>

                        <td class="fw-bold">{{ $product->brand }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <span class="badge bg-secondary ">{{ $product->category->name }}</span>
                        </td>
                        <td class="text-success fw-bold">€ {{ $product->price }}</td>

                        <td>
                            <div class="d-flex justify-content-center gap-2">

                                <a href="{{ route('admin.products.show', $product) }}" class="btn btn-outline-info btn-sm">
                                    <span class="fa-solid fa-eye"></span> Vedi
                                </a>

                                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-outline-warning btn-sm">
                                    <span class="fa-solid fa-pen"></span>
                                </a>

                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare {{ $product->name }} in modo permanente?');">
                                     @csrf
                                     @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <span class="fa-solid fa-trash"></span>
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection