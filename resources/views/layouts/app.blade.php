<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ElectroShop - Premium Electronics Store')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #f59e0b;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-light: #f9fafb;
            --border-color: #e5e7eb;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

        /* Top Bar */
        .top-bar {
            background: var(--text-dark);
            color: white;
            padding: 0.5rem 0;
            font-size: 0.875rem;
        }

        .top-bar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar-links {
            display: flex;
            gap: 1.5rem;
            list-style: none;
        }

        .top-bar-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .top-bar-links a:hover {
            color: var(--accent-color);
        }

        /* Navigation */
        .navbar {
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 20px;
        }

        .logo {
            font-size: 1.75rem;
            font-weight: 800;
        }

        .logo a {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
            color: black;
        }

        .logo img {
            height: 80px;
            width: auto;
            object-fit: contain;
            margin-top: -20px;
            margin-bottom: -20px;
        }

        .logo span {
            font-weight: 800;
            color: black;
        }

        .logo i {
            -webkit-text-fill-color: var(--primary-color);
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
        }

        .nav-menu a {
            color: var(--text-dark);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            color: var(--primary-color);
        }

        .nav-menu a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--primary-color);
        }

        .search-bar {
            display: flex;
            align-items: center;
            background: var(--bg-light);
            border-radius: 25px;
            padding: 0.5rem 1rem;
            min-width: 300px;
        }

        .search-bar input {
            border: none;
            background: transparent;
            outline: none;
            width: 100%;
            margin-left: 0.5rem;
        }

        .nav-icons {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .nav-icons a {
            color: var(--text-dark);
            font-size: 1.25rem;
            position: relative;
        }

        .badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--accent-color);
            color: white;
            font-size: 0.7rem;
            padding: 2px 6px;
            border-radius: 10px;
        }

        /* Mobile Menu Toggle */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-dark);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Footer */
        .footer {
            background: black;
            color: white;
            padding: 1.5rem 0;
            margin-top: 4rem;
        }

        .footer-content {
            display: none;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: var(--accent-color);
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.75rem;
        }

        .footer-section a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: var(--accent-color);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding: 0;
            border-top: none;
            color: #9ca3af;
        }

        .footer-bottom p {
            margin: 0;
            font-size: 0.9rem;
        }

        .payment-methods {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
            flex-wrap: wrap;
        }

        .payment-methods i {
            font-size: 2rem;
            opacity: 0.7;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .top-bar {
                display: none;
            }

            .nav-menu {
                display: none;
            }

            .mobile-menu-toggle {
                display: block;
            }

            .search-bar {
                min-width: auto;
                width: 100%;
                margin: 1rem 0;
            }

            .navbar .container {
                flex-wrap: wrap;
            }
        }
    </style>
    @stack('styles')
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo_transparan(1).png') }}" alt="Depo Es Krim Logo">
                    <span>Depo Es Krim</span>
                </a>
            </div>

            <button class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>

            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Apa yang kamu cari?">
            </div>

            <ul class="nav-menu">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                </li>
                <li><a href="{{ route('products') }}"
                        class="{{ request()->routeIs('products*') ? 'active' : '' }}">Produk</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang</a>
                </li>
                <li><a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a></li>
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
    <footer class="footer">
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Depo Es Krim. All rights reserved.</p>
        </div>
    </footer>

    @stack('scripts')
</body>

</html>
