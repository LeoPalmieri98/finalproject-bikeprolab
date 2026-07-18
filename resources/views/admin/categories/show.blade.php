@extends('layouts.layoutbase')

@section('title', 'Dettaglio: ' . $category->name)

@section('content')
<div class="card shadow-sm border-0 mt-4">
    <div class="card-body p-4 p-md-5">

        <h2 class="fw-bold mb-4">{{ $category->name }}</h2>

        <ul class="list-group list-group-flush mb-4 border-top border-bottom">
            <li class="list-group-item bg-transparent px-0">
                <strong>ID:</strong> {{ $category->id }}
            </li>
            <li class="list-group-item bg-transparent px-0">
                <strong>Descrizione:</strong> {{ $category->description }}
            </li>
            <li class="list-group-item bg-transparent px-0">
                <strong>Prodotti collegati:</strong> {{ $category->products->count() }}
            </li>
        </ul>

        <div class="d-flex gap-3">
            <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary px-4 py-2 fw-bold text-uppercase">
                <span class="fa-solid fa-arrow-left me-2"></span> Torna alle Categorie
            </a>

            <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning px-4 py-2 fw-bold text-uppercase">
                <span class="fa-solid fa-pen me-2"></span> Modifica
            </a>
        </div>

    </div>
</div>
@endsection