<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('storage/img/logo.png') }}" alt="BikeProLab" style="height: 15px;">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-uppercase fw-bold" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase fw-bold" href="{{ route('admin.products.index') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase fw-bold" href="{{ route('admin.revisions.index') }}">Revisione Sospensioni</a>
                </li>
            </ul>

<ul class="navbar-nav d-flex flex-row align-items-center">
    
    <li class="nav-item me-2">
        <a href="{{ route('dashboard') }}" class="btn btn-outline-light btn-sm text-uppercase">
            <i class="fas fa-user"></i> 
        </a>
    </li>

    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}" class="m-0 p-0">
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm text-uppercase m-0 fw-bold">
                Esci
            </button>
        </form>
    </li>
    
</ul>
            
        </div>
    </div>
</nav>