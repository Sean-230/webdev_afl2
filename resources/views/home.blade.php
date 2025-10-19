@extends('layouts.app')

@section('title', 'Beranda Depo Es Krim')

@section('content')
    <style>
        .hero {
            background: linear-gradient(135deg, #62D2C4 0%, #ECB686 100%);
            color: white;
            padding: 5rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
            animation: float 20s linear infinite;
        }

        @keyframes float {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-100px);
            }
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero-text p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 1rem 2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            display: inline-block;
        }

        .btn-primary {
            background: white;
            color: var(--primary-color);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-outline {
            border: 2px solid white;
            color: white;
        }

        .btn-outline:hover {
            background: white;
            color: var(--primary-color);
        }

        .hero-image {
            text-align: center;
        }

        .hero-image i {
            font-size: 15rem;
            color: white;
            opacity: 0.9;
            animation: bounce 3s ease-in-out infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        /* Categories */
        .categories-section {
            padding: 4rem 0;
            background: var(--bg-light);
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .section-title p {
            color: var(--text-light);
            font-size: 1.1rem;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .category-card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            transition: all 0.3s;
            cursor: pointer;
            text-decoration: none;
            color: var(--text-dark);
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .category-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .category-card h3 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .category-card p {
            color: var(--text-light);
            font-size: 0.9rem;
        }

        /* Featured Products */
        .featured-section {
            padding: 4rem 0;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .product-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--accent-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            z-index: 1;
        }

        .product-image {
            height: 350px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .product-image i {
            font-size: 5rem;
            color: white;
            opacity: 0.9;
        }

        .product-actions {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            gap: 0.5rem;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .product-card:hover .product-actions {
            opacity: 1;
        }

        .action-btn {
            width: 45px;
            height: 45px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            color: var(--text-dark);
        }

        .action-btn:hover {
            background: var(--primary-color);
            color: white;
            transform: scale(1.1);
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-category {
            color: var(--text-light);
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .product-info h3 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .product-rating {
            color: var(--accent-color);
            margin-bottom: 0.5rem;
        }

        .product-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
        }

        .price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        /* Features */
        .features-section {
            padding: 4rem 0;
            background: var(--bg-light);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            transition: all 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 2rem;
            color: white;
        }

        /* Promo Banner */
        .promo-banner {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 4rem 2rem;
            border-radius: 16px;
            margin: 4rem 0;
            text-align: center;
        }

        .promo-banner h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .promo-banner p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }

        @media (max-width: 768px) {
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 2rem;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-image i {
                font-size: 8rem;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Es Krim Premium untuk Setiap Momen</h1>
                <p>Nikmati berbagai pilihan es krim favorit dari brand terpercaya, siap menemani harimu dengan rasa terbaik.
                </p>
                <div class="hero-buttons">
                    <a href="{{ route('products.index') }}" class="btn btn-primary">Belanja Sekarang</a>
                    <a href="{{ route('about') }}" class="btn btn-outline">Tentang Kami</a>
                </div>
            </div>
            <div class="hero-image">
                <i class="fas fa-ice-cream"></i>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories-section">
        <div class="container">
            <div class="section-title">
                <h2>Belanja Berdasarkan Kategori</h2>
                <p>Temukan apa yang kamu cari</p>
            </div>
            <div class="categories-grid">
                <a href="{{ route('products.category', 'smartphones') }}" class="category-card">
                    <div class="category-icon"><i class="fas fa-ice-cream"></i></div>
                    <h3>Es Krim</h3>
                </a>
                <a href="{{ route('products.category', 'laptops') }}" class="category-card">
                    <div class="category-icon"><i class="fas fa-mortar-pestle"></i></div>
                    <h3>Bubuk Es Krim</h3>
                </a>
                <a href="{{ route('products.category', 'tablets') }}" class="category-card">
                    <div class="category-icon"><i class="fas fa-ice-cream"></i></div>
                    <h3>Cone</h3>
                </a>
                <a href="{{ route('products.category', 'audio') }}" class="category-card">
                    <div class="category-icon"><i class="fas fa-circle"></i></div>
                    <h3>Cup</h3>
                </a>
                <a href="{{ route('products.category', 'accessories') }}" class="category-card">
                    <div class="category-icon"><i class="fas fa-utensil-spoon"></i></div>
                    <h3>Sendok</h3>
                </a>
                <a href="{{ route('products.category', 'gaming') }}" class="category-card">
                    <div class="category-icon"><i class="fas fa-circle"></i></div>
                    <h3>Tutup</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-section">
        <div class="container">
            <div class="section-title">
                <h2>Featured Products</h2>
                <p>Check out our best selling products</p>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <span class="product-badge">Hot</span>
                    <div class="product-image">
                        <img src="{{ asset('images/cup kertas eskrim 50ml.jpg') }}" alt="Cup Kertas Es Krim 50ml">
                    </div>
                    <div class="product-info">
                        <div class="product-category">Cup</div>
                        <h3>Cup kertas eskrim 50ml</h3>
                        <div class="product-price">
                            <div>
                                <span class="price">Rp 12.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <span class="product-badge" style="background: #ef4444;">Hot</span>
                    <div class="product-image" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <img src="{{ asset('images/cone eskrim.jpg') }}" alt="cone eskrim">
                    </div>
                    <div class="product-info">
                        <div class="product-category">Cone</div>
                        <h3>Cone Kerucut Kecil 45-50 pcs Kurir Instan"</h3>
                        <div class="product-price">
                            <div>
                                <span class="price">Rp 11.220</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <span class="product-badge" style="background: #10b981;">Buy 3 get 1</span>
                    <div class="product-image" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                        <img src="{{ asset('images/eskrim.jpg') }}" alt="eskrim">
                    </div>
                    <div class="product-info">
                        <div class="product-category">Ice Cream</div>
                        <h3>Es Krim AICE Bucket</h3>
                        
                        <div class="product-price">
                            <div>
                                <span class="price">Rp 219.980</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                        <img src="{{ asset('images/bubuk eskrim.jpg') }}" alt="bubuk eskrim">
                    </div>
                    <div class="product-info">
                        <div class="product-category">Bubuk</div>
                        <h3>Bubuk Eskrim Mr Cool</h3>
                        <div class="product-price">
                            <div>
                                <span class="price">Rp 25.900</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                        <img src="{{ asset('images/sendok eskrim.jpg') }}" alt="sendok eskrim">
                    </div>
                    <div class="product-info">
                        <div class="product-category">Sendok</div>
                        <h3>Sendok Eskrim Mr Cool</h3>
                        <div class="product-price">
                            <div>
                                <span class="price">Rp 1.670</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <a href="{{ route('products.index') }}" class="btn btn-primary"
                    style="background: var(--primary-color); color: white;">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <!-- <section class="features-section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Free Shipping</h3>
                    <p>Free shipping on orders over Rp 500.000</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Secure Payment</h3>
                    <p>100% secure payment with SSL encryption</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-undo"></i>
                    </div>
                    <h3>Easy Returns</h3>
                    <p>30 days money back guarantee</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Dedicated customer support anytime</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Promo Banner -->
    <div class="container">
        <div class="promo-banner">
            <h2>Special Offer: Up to 50% Off!</h2>
            <p>Limited time offer on selected product</p>
            <a href="{{ route('products.index') }}" class="btn" style="background: white; color: #f5576c;">Shop Deals
                Now</a>
        </div>
    </div>
@endsection
