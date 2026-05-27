@extends('layouts.layoutbase')
@section('content')
 @section('title' , "Gestione Shop")
<div class="d-flex justify-content-between align-items-center mb-4">
   
    <h2 class="fw-bold">Elenco Prodotti:</h2>
    
    <a href="{{ route('admin.suspensions.create') }}" class="btn btn-success shadow-sm">
        <span class="fa-solid fa-plus"></span> Nuova Sospensione
    </a>
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
                @foreach ($suspensions as $suspension)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/uploads/' . $suspension->image) }}" alt="{{ $suspension->name }}" style="width: 60px; height: 60px; object-fit: cover;" class="rounded border shadow-sm">
                        </td>
                        
                        <td class="fw-bold">{{ $suspension->brand }}</td>
                        <td>{{ $suspension->name }}</td>
                        <td>
                            <span class="badge bg-secondary">{{ $suspension->category->name }}</span>
                        </td>
                        <td class="text-success fw-bold">€ {{ $suspension->price }}</td>
                        
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                
                                <a href="{{ route('admin.suspensions.show', $suspension) }}" class="btn btn-outline-info btn-sm">
                                    <span class="fa-solid fa-eye"></span> Vedi
                                </a>

                                <form action="{{ route('admin.suspensions.destroy', $suspension) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare {{ $suspension->name }} in modo permanente?');">
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