@extends('layouts.layoutbase')

@section('title', 'Dettaglio: ' . $product->brand)

@section('content')
<div class="card shadow-sm border-0 mt-4">
    <div class="card-body p-4 p-md-5">
        <div class="row align-items-center">
            @if ($product->image)
            <div class="col-md-5 text-center mb-4 mb-md-0">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded border shadow" style="max-height: 450px; object-fit: contain;">
            </div>
            @endif
            <div class="col-md-7">
                <h2 class="fw-bold mb-2">{{ $product->name }}</h2>
                <h3 class="text-danger fw-bold mb-4">€ {{$product->price }}</h3>

                <ul class="list-group list-group-flush mb-4 border-top border-bottom">
                    <li class="list-group-item bg-transparent px-0"><strong>Categoria ID:</strong> {{ $product->category->name }}</li>
                    <li class="list-group-item bg-transparent px-0"><strong>Misura:</strong> {{ $product->size }}</li>
                    <li class="list-group-item bg-transparent px-0"><strong>Dimensione Ruota:</strong> {{ $product->wheel ?? 'N/D' }}</li>
                    <li class="list-group-item bg-transparent px-0"><strong>Materiale:</strong> {{ $product->material }}</li>
                    <li class="list-group-item bg-transparent px-0"><strong>Colore:</strong> {{ $product->color }}</li>
                    <li class="list-group-item bg-transparent px-0"><strong>Freni:</strong> {{ $product->brakes ?? 'N/D' }}</li>
                </ul>

                <div class="mb-5">
                    <h5 class="fw-bold text-uppercase text-secondary" style="font-size: 0.9rem;">Descrizione Prodotto</h5>
                    <p class="text-dark" style="line-height: 1.7;">{{ $product->description }}</p>
                </div>

                <div class="d-flex gap-3">
                    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary px-4 py-2 fw-bold text-uppercase">
                        <span class="fa-solid fa-arrow-left me-2"></span> Torna allo Shop
                    </a>

                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning px-4 py-2 fw-bold text-uppercase">
                        <span class="fa-solid fa-pen me-2"></span> Modifica
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection