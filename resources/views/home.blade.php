@extends("layouts.layoutbase")
@section('title', 'Home Page')
@section('content')
<div class="container mt-5">
    
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="fw-bold goodTimes text-uppercase">
                Benvenuto, {{ Auth::user()->name ?? 'Admin' }}! 👋
            </h1>
            <p class="text-muted fs-5">
                Pannello di controllo Back-Office di BikeProLab
            </p>
        </div>
    </div>

    <div class="row justify-content-center g-5">
        
        <div class="col-md-5">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('storage/img/homeimg1.jpeg') }}" class="card-img-top" alt="Ammortizzatore Fox" style="height: 400px; object-fit: cover;">
                
                <div class="card-body text-center bg-dark text-white rounded-bottom">
                    <h4 class="card-title text-uppercase mb-3">Gestione Shop</h4>
                    <p class="card-text text-light">Aggiungi, modifica o elimina i prodotti dal catalogo sospensioni.</p>
                    <a href="{{ route('admin.suspensions.index') }}" class="btn btn-outline-light mt-2 w-50">
                        Vai allo Shop
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('storage/img/homeimg2.jpeg') }}" class="card-img-top" alt="Forcella Fox" style="height: 400px; object-fit: cover;">
                
                <div class="card-body text-center bg-dark text-white rounded-bottom">
                    <h4 class="card-title text-uppercase mb-3">Revisione Sospensioni</h4>
                    <p class="card-text text-light">Gestisci le richieste di manutenzione e revisione dei clienti.</p>
                    <a href="{{ route('admin.revisions.index') }}" class="btn btn-outline-light mt-2 w-50">
                        Vai alle Revisioni
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection