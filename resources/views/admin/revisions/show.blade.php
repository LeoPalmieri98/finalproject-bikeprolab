@extends('layouts.layoutbase')

@section('content')
@section('title','ticket')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-uppercase">Gestione Ticket #{{ $revision->id }}</h2>
        <a href="{{ route('admin.revisions.index') }}" class="btn btn-outline-secondary">Torna alla lista</a>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-dark text-white text-uppercase fw-bold">
                    Dettagli Sospensione
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Cliente:</strong> {{ $revision->user_name }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $revision->user_email }}</li>
                        <li class="list-group-item"><strong>Brand:</strong> {{ $revision->brand }}</li>
                        <li class="list-group-item"><strong>Modello:</strong> {{ $revision->model }}</li>
                        <li class="list-group-item"><strong>Seriale:</strong> {{ $revision->serial_key }} - {{ $revision->serial_number }}</li>
                        <li class="list-group-item"><strong>Intervallo richiesto:</strong> {{ $revision->service_interval }} ore</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-dark text-white text-uppercase fw-bold">
                    Aggiorna Stato Lavorazione
                </div>
                <div class="card-body d-flex flex-column justify-content-center">
                    
                    <form action="{{ route('admin.revisions.update', $revision) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="status" class="form-label fw-bold">Stato Attuale</label>
                            <select name="status" id="status" class="form-select form-select-lg">
                                <option value="Inviata" {{ $revision->status == 'Inviata' ? 'selected' : '' }}>Inviata</option>  
                                <option value="Accettata" {{ $revision->status == 'Accettata' ? 'selected' : '' }}>Accettata</option>
                                <option value="Rifiutata" {{ $revision->status == 'Rifiutata' ? 'selected' : '' }}>Rifiutata</option>
                                <option value="Presa in carico" {{ $revision->status == 'Presa in carico' ? 'selected' : '' }}>Presa in carico</option>
                                <option value="In Lavorazione" {{ $revision->status == 'In Lavorazione' ? 'selected' : '' }}>In Lavorazione</option>
                                <option value="Completata" {{ $revision->status == 'Completata' ? 'selected' : '' }}>Completata</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-warning w-100 text-uppercase fw-bold text-dark">
                            Salva Aggiornamento
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection