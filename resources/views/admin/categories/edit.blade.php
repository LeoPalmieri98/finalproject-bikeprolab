@extends('layouts.layoutbase')

@section('title', 'Modifica Categoria')

@section('content')
<div class="container my-5">
    <div class="card shadow-sm col-md-6 mx-auto">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0 fw-bold">Modifica Categoria: {{ $category->name }}</h4>
        </div>
        <div class="card-body">
            
            <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                @csrf
                
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nome Categoria</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Descrizione</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ $category->description }}">
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">
                        Annulla
                    </a>
                    <button type="submit" class="btn btn-success text-white">
                        Aggiorna Categoria
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection