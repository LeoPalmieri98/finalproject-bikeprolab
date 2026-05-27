@extends('layouts.layoutbase')

@section('title', 'Nuova Sospensione')

@section('content')
<div class="card shadow border-0 mt-4">
    <div class="card-body p-4 p-md-5">
        
        <form action="{{ route('admin.suspensions.store') }}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Brand</label>
                    <input type="text" name="brand" class="form-control" placeholder="Es: Fox, RockShox...">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Nome Modello</label>
                    <input type="text" name="name" class="form-control" placeholder="Es: 38 Factory Grip2">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Prezzo (€) <span class="text-danger">*</span></label>
                    <input type="number" step="0.01" name="price" class="form-control" placeholder="850.00">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Categoria (ID)</label>
                    <input type="number" name="category_id" class="form-control" placeholder="1 = Forcella, 2 = Ammo">
                </div>
            </div>

            <hr class="my-4">

            <div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label fw-bold text-secondary">Misura</label>
                    <input type="text" name="size" class="form-control" placeholder="Es: 29 pollici / 210x55">
                </div>
                
                <div class="col-md-3 mb-3">
                    <label class="form-label fw-bold text-secondary">Ruota</label>
                    <input type="text" name="wheel" class="form-control" placeholder="Es: 29, 27.5...">
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label fw-bold text-secondary">Materiale</label>
                    <input type="text" name="material" class="form-control" placeholder="Alluminio, Carbonio...">
                </div>

                <div class="col-md-3 mb-3">
                    <label class="form-label fw-bold text-secondary">Colore</label>
                    <input type="text" name="color" class="form-control" placeholder="Nero, Kashima...">
                </div>
            </div>

            <div class="mb-4 mt-3">
                <label class="form-label fw-bold">Immagine Prodotto</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Descrizione</label>
                <textarea name="description" class="form-control" rows="4" placeholder="Dettagli tecnici..."></textarea>
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