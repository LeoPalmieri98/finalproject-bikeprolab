

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        
        <a class="navbar-brand fw-bold goodTimes" href="{{  route('home') }}">
            BikeProLab
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="{{ route('admin.suspensions.index') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="{{ route('admin.revisions.index') }}">Revisione Sospensioni</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm mt-1 text-uppercase">
                            Esci
                        </button>
                    </form>
                </li>
            </ul> 
            
        </div>
    </div>
</nav>