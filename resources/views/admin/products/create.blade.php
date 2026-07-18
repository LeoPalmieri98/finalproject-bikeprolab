@extends('layouts.layoutbase')

@section('title', 'Nuovo Prodotto')

@section('content')
<div class="card shadow border-0 mt-4">
    <div class="card-body p-4 p-md-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ci sono degli errori nel form:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Brand</label>
                    <input type="text" name="brand" class="form-control" placeholder="Es: Fox, RockShox..." required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Nome Modello</label>
                    <input type="text" name="name" class="form-control" placeholder="Es: 38 Factory Grip2" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Prezzo (€)</label>
                    <input type="number" step="0.01" name="price" class="form-control" placeholder="850.00" required>
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

                <div class="col-md-3 mb-3">
                    <label class="form-label fw-bold text-secondary">Freni</label>
                    <input type="text" name="brakes" class="form-control" placeholder="Es: Disco 203mm">
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
                <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary px-4 fw-bold text-uppercase">Annulla</a>
                <button type="submit" class="btn btn-success px-5 fw-bold text-uppercase">
                    <span class="fa-solid fa-floppy-disk me-2"></span> Salva
                </button>
            </div>

        </form>

    </div>
</div>
@endsection