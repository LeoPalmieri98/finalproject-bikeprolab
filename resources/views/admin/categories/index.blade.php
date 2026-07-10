@extends('layouts.layoutbase')

@section('title', 'Gestione Categorie')

@section('content')
<div class="container my-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold mb-1">Le tue Categorie: </h1>
        </div>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
            Aggiungi Nuova Categoria
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-secondary">
                    <tr>
                        <th>ID</th>
                        <th>Nome Categoria</th>
                        <th class="text-end">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>#{{ $category->id }}</td>
                            <td>
                                <strong>{{ $category->name }}</strong>
                            </td>
                            <td class="text-end">
                                <div class="d-inline-flex gap-2">

                                    <a href="{{ route('admin.categories.show', $category->id) }}" class="btn btn-sm btn-success  text-white">
                                        Visualizza
                                    </a>

                                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-warning text-white">
                                        Modifica
                                    </a>

                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questa categoria? Questo cancellerà anche tutti i prodotti collegate!')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Elimina
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
</div>
@endsection