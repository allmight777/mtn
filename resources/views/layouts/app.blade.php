<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons -->
    <title>Dashboard | Admin</title>
    <link rel="shortcut icon" href="{{ asset('images/image_2.webp') }}" type="image/x-icon">

    <!-- Fonts -->


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f1f9f8;
        }

        /* Sidebar PC */
        .sidebar {
            
            background-color: #00b894;
            min-height: 100vh;
            color: #fff;
            transition: all 0.3s ease;
        }

        .sidebar a {
            color: #fff;
            transition: color 0.3s;
        }

        .sidebar a:hover {
            color: #ffeaa7;
        }

        /* Cards hover */
        .card {
            border-radius: 1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Buttons */
        .btn-primary {
            background-color: #00b894;
            border-color: #00b894;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #019874;
            transform: scale(1.05);
        }

        /* Header */
        .main-header {
            background-color: #2d3436;
            color: #fff;
            padding: 1rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        /* Cards grid */
        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1rem;
        }

        /* Mobile menu toggle */
        #mobileSidebar {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100vh;
            background-color: #00b894;
            z-index: 1050;
            transition: left 0.3s ease;
            overflow-y: auto;
        }

        #mobileSidebar.show {
            left: 0;
        }

        #mobileSidebar a {
            color: #fff;
            display: block;
            padding: 0.75rem 1rem;
            text-decoration: none;
        }

        #mobileSidebar a:hover {
            color: #ffeaa7;
        }

        #mobileSidebar .close-btn {
            font-size: 1.5rem;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="d-flex">

        {{-- Sidebar PC --}}
        <nav class="sidebar d-none d-md-flex flex-column p-3 flex-shrink-0">
            <a href="{{ route('dashboard') }}"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none fs-4">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item"><a href="#" class="nav-link text-white">Accueil</a></li>
                <li><a href="#" class="nav-link text-white">Utilisateurs</a></li>
                <li><a href="#" class="nav-link text-white">Paramètres</a></li>
            </ul>
            <hr>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger w-100">Se déconnecter</button>
            </form>
        </nav>

        {{-- Mobile Sidebar --}}
        <div id="mobileSidebar" class="d-md-none">
            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                <span class="fs-4 text-white ps-3">Menu</span>
                <span class="close-btn text-white" onclick="toggleSidebar()">×</span>
            </div>
            <a href="{{ route('dashboard') }}">Accueil</a>
            <a href="#">Utilisateurs</a>
            <a href="#">Paramètres</a>
            <form method="POST" action="{{ route('logout') }}" class="px-3 mt-2">
                @csrf
                <button type="submit" class="btn btn-danger w-100">Se déconnecter</button>
            </form>
        </div>

        {{-- Main Content --}}
        <div class="flex-grow-1">
            <header class="main-header d-flex justify-content-between align-items-center px-4">
                <button class="btn btn-outline-light d-md-none me-3" onclick="toggleSidebar()">
                    <i class="bi bi-list fs-3"></i>
                </button>
                <h2 class="mb-0">{{ $header ?? 'Bienvenue' }}</h2>
                <div class="d-flex align-items-center">
                    <span class="me-3">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</span>
                </div>
            </header>

            <main class="p-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Toggle Sidebar JS -->
    <script>
        function toggleSidebar() {
            document.getElementById('mobileSidebar').classList.toggle('show');
        }
    </script>
    @stack('scripts')
</body>

</html>
