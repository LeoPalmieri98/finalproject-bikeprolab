@extends('layouts.layoutbase')

@section('title', 'Crea una nuova Categoria')

@section('content')
<div class="container my-5">
    <div class="card shadow-sm col-md-6 mx-auto">
        <div class="card-header bg-secondary text-white">
            <h4 class="mb-0 fw-bold">Aggiungi Nuova Categoria</h4>
        </div>
        <div class="card-body">
            
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nome Categoria</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Es. Gomme, Componenti, Manubri..." required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Descrizione (Facoltativa)</label>
                    <input type="text" name="description" id="description" class="form-control" placeholder="Inserisci una breve descrizione">
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">
                        Annulla
                    </a>
                    <button type="submit" class="btn btn-success">
                        Salva Categoria
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection