@extends('layouts.layoutbase')

@section('title', 'Dettaglio: ' . $suspension->brand)

@section('content')
<div class="card shadow-sm border-0 mt-4">
    <div class="card-body p-4 p-md-5">
        <div class="row align-items-center">
            
            <div class="col-md-5 text-center mb-4 mb-md-0">
                <img src="{{ asset('storage/uploads/' . $suspension->image) }}" alt="{{ $suspension->name }}" class="img-fluid rounded border shadow" style="max-height: 450px; object-fit: contain;">
            </div>

            <div class="col-md-7">
                <h2 class="fw-bold mb-2">{{ $suspension->name }}</h2>
                <h3 class="text-danger fw-bold mb-4">€ {{$suspension->price }}</h3>

                <ul class="list-group list-group-flush mb-4 border-top border-bottom">
                    <li class="list-group-item bg-transparent px-0"><strong>Categoria ID:</strong> {{ $suspension->category_id }}</li>
                    <li class="list-group-item bg-transparent px-0"><strong>Misura:</strong> {{ $suspension->size }}</li>
                    <li class="list-group-item bg-transparent px-0"><strong>Dimensione Ruota:</strong> {{ $suspension->wheel ?? 'N/D' }}</li>
                    <li class="list-group-item bg-transparent px-0"><strong>Materiale:</strong> {{ $suspension->material }}</li>
                    <li class="list-group-item bg-transparent px-0"><strong>Colore:</strong> {{ $suspension->color }}</li>
                    <li class="list-group-item bg-transparent px-0"><strong>Freni:</strong> {{ $suspension->brakes ?? 'N/D' }}</li>
                </ul>

                <div class="mb-5">
                    <h5 class="fw-bold text-uppercase text-secondary" style="font-size: 0.9rem;">Descrizione Prodotto</h5>
                    <p class="text-dark" style="line-height: 1.7;">{{ $suspension->description }}</p>
                </div>

                <div class="d-flex gap-3">
                    <a href="{{ route('admin.suspensions.index') }}" class="btn btn-outline-secondary px-4 py-2 fw-bold text-uppercase">
                        <span class="fa-solid fa-arrow-left me-2"></span> Torna allo Shop
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection