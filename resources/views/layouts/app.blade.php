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

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar Custom Styles - Fixed Height */
        .navbar {
            box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }

        .navbar-brand {
            font-size: 1.5rem !important;
            font-weight: 800 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .navbar-brand img {
            height: 50px !important;
            width: auto !important;
            object-fit: contain !important;
        }

        .navbar-brand span {
            font-weight: 800 !important;
            color: black !important;
        }

        .nav-link {
            font-weight: 500;
            position: relative;
            padding: 0.5rem 1rem !important;
            color: #1f2937 !important;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary-color) !important;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 1rem;
            right: 1rem;
            height: 2px;
            background: var(--primary-color);
        }

        .search-form {
            background: #f9fafb;
            border-radius: 25px;
            min-width: 300px;
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
            color: #6b7280;
        }

        /* Bootstrap Button Override */
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

        .bg-primary {
            background-color: var(--primary-color) !important;
        }

        /* Footer */
        .footer {
            background: #000;
            color: white;
            padding: 1.5rem 0;
            margin-top: 4rem;
        }

        /* Fix untuk card/border yang hilang */
        .card {
            border: 1px solid #e5e7eb;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .search-form {
                min-width: auto;
                width: 100%;
            }
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
                <span class="ms-2 fw-bold">Depo Es Krim</span>
            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <input class="form-control" type="search" placeholder="Apa yang kamu cari?" aria-label="Search">
                    </div>
                </form>

                <!-- Navigation Menu -->
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" 
                           href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('products*') ? 'active' : '' }}" 
                           href="{{ route('products') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" 
                           href="{{ route('about') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" 
                           href="{{ route('contact') }}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-shopping-cart fs-5"></i>
                        </a>
                    </li>
                </ul>
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

    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
