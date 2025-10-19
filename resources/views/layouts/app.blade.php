<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Depo Es Krim - Toko Es Krim Terlengkap')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #62D2C4;
            --secondary-color: #4db8aa;
            --accent-color: #ECB686;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-light: #f9fafb;
            --border-color: #e5e7eb;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        /* Navbar Styling */
        .navbar {
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 0.5rem 0;
        }

        .navbar-brand img {
            height: 60px;
            width: auto;
            object-fit: contain;
        }

        .navbar-brand span {
            font-size: 1.5rem;
            font-weight: 800;
            color: #000;
        }

        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            color: var(--text-dark) !important;
            position: relative;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary-color) !important;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 2px;
            background: var(--primary-color);
        }

        .search-form {
            background: #f9fafb;
            border-radius: 25px;
        }

        .search-form input {
            border: none;
            background: transparent;
        }

        .search-form input:focus {
            box-shadow: none;
            background: transparent;
        }

        .search-form .input-group-text {
            background: transparent;
            border: none;
        }

        /* Bootstrap Override */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .text-primary {
            color: var(--primary-color) !important;
        }

        /* Card styling */
        .card {
            border: 1px solid var(--border-color);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        .footer {
            background: #000;
            color: white;
            padding: 2rem 0;
            margin-top: 4rem;
        }
    </style>
    @stack('styles')
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo_transparan(1).png') }}" alt="Depo Es Krim Logo">
                <span class="ms-2">Depo Es Krim</span>
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Search Bar -->
                <form class="d-flex mx-auto my-3 my-lg-0 search-form" style="max-width: 400px; width: 100%;">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-search text-primary"></i>
                        </span>
                        <input class="form-control" type="search" placeholder="Apa yang kamu cari?">
                    </div>
                </form>

            <ul class="nav-menu">
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}" class="{{ request()->routeIs('products*') ? 'active' : '' }}">Produk</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a>
                </li>
            </ul>

            <div class="nav-icons">
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Depo Es Krim. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>