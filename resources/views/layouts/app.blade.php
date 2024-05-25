<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wędkarski</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
<body style="background-color: ">
<nav class="navbar navbar-expand-lg" style="background-color: #006043;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/" style="color: #fff">
                        <i class="fas fa-home"></i> Strona główna
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/lake" style="color: #fff">
                        <i class="fas fa-water"></i> Łowiska
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/fish" style="color: #fff">
                        <i class="fas fa-fish"></i> Ryby
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/tournament" style="color: #fff">
                        <i class="fas fa-trophy"></i> Zawody
                    </a>
                </li>
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" style="color: #fff">
                            <i class="fas fa-sign-out-alt"></i> {{ Auth::user()->name }}, wyloguj się...
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" style="color: #fff">
                            <i class="fas fa-sign-in-alt"></i> Zaloguj się...
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
    <main style="min-height: 80vh;">
        @yield('content')
    </main>
    <footer class="text-white text-center text-lg-start py-4" style="background-color: #006043;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Klub Wędkarski</h5>
                <p>
                    Pasjonaci wędkarstwa, którzy dzielą się swoją miłością do przyrody i wędkarstwa. Organizujemy turnieje i wspólne wyprawy nad wodę.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Szybkie linki</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="/" class="text-white">Strona główna</a>
                    </li>
                    <li>
                        <a href="/tournament" class="text-white">Turnieje</a>
                    </li>
                    <li>
                        <a href="/fish" class="text-white">Ryby</a>
                    </li>
                    <li>
                        <a href="/lake" class="text-white">Łowiska</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Kontakt</h5>
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-home mr-3"></i> Adres: 123 Rejtana Rzeszów, Polska</li>
                    <li><i class="fas fa-envelope mr-3"></i> Email: kontakt@klubwedkarski.pl</li>
                    <li><i class="fas fa-phone mr-3"></i> Telefon: 123-456-789</li>
                </ul>
                <div class="mt-3">
                    <a href="https://www.facebook.com/" class="text-white me-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://x.com/" class="text-white me-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/" class="text-white me-4">
                        <i class="fab fa-instagram"></i>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="text-center py-3" style="background-color: #006043;">
        <p class="mb-0" style="color: #fff;">© 2024 Copyright: Klub Wędkarski. Wszelkie prawa zastrzeżone.</p>
    </div>
</footer>
</body>
</html>
