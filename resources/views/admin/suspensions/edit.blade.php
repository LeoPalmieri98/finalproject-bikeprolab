@extends('layouts.layoutbase')

@section('title', 'Modifica Sospensione')

@section('content')
<div class="card shadow border-0 mt-4">
    <div class="card-body p-4 p-md-5">
        
        <form action="{{ route('admin.suspensions.update', $suspension) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Brand</label>
                    <input type="text" name="brand" class="form-control" value="{{ $suspension->brand}}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Nome Modello</label>
                    <input type="text" name="name" class="form-control" value="{{$suspension->name}}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Prezzo (€)</label>
                    <input type="number" step="0.01" name="price" class="form-control" value="{{$suspension->price}}" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="category_id" class="form-label fw-bold">Categoria</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        <option value="">-- Seleziona una Categoria --</option>
                        
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        
                    </select>
                </div>
            </div>

            <hr class="my-4">

            <div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label fw-bold text-secondary">Misura</label>
                    <input type="text" name="size" class="form-control" value="{{$suspension->size}}">
                </div>
                
                <div class="col-md-3 mb-3">
                    <label class="form-label fw-bold text-secondary">Ruota</label>
                    <input type="text" name="wheel" class="form-control" value="{{$suspension->wheel}}">
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label fw-bold text-secondary">Materiale</label>
                    <input type="text" name="material" class="form-control" value="{{$suspension->material}}">
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label fw-bold text-secondary">Colore</label>
                    <input type="text" name="color" class="form-control" value="{{$suspension->color}}">
                </div>
                
                <div class="col-md-3 mb-3">
                    <label class="form-label fw-bold text-secondary">Freni</label>
                    <input type="text" name="brakes" class="form-control" value="{{$suspension->brakes}}">
                </div>

            </div>

       

            <div class="mb-4 mt-3">
                <label class="form-label fw-bold">Immagine Prodotto</label>
                <p>Se vuoi cambiare l'immagine, carica un nuovo file.</p>
                <input type="file" name="image" class="form-control" value="{{$suspension->image}}">
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Descrizione</label>
                <textarea name="description" class="form-control" rows="4" >{{$suspension->description}}</textarea>
            </div>

            <div class="d-flex justify-content-end gap-3 mt-4">
                <a href="{{ route('admin.suspensions.index') }}" class="btn btn-outline-secondary px-4 fw-bold text-uppercase">Annulla</a>
                <button type="submit" class="btn btn-success px-5 fw-bold text-uppercase">
                    <span class="fa-solid fa-floppy-disk me-2"></span> Salva
                </button>
            </div>
            
        </form>

    </div>
</div>
@endsection