@extends('layouts.app')

@section('title', 'Produk Depo Es Krim')

@push('styles')
    <style>
        .page-header {
            background: #ECB686;
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }

        .page-header h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
        }

        .products-filter {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .breadcrumb {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .breadcrumb a {
            color: white;
            text-decoration: none;
            opacity: 0.8;
        }

        .breadcrumb a:hover {
            opacity: 1;
        }

        .products-container {
            padding: 4rem 0;
        }

        .products-layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 2rem;
        }

        /* Sidebar Filters */
        .filters-sidebar {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .filter-section {
            margin-bottom: 2rem;
        }

        .filter-section h3 {
            font-size: 1.1rem;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .filter-list {
            list-style: none;
        }

        .filter-list li {
            margin-bottom: 0.75rem;
        }

        .filter-list label {
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: color 0.3s;
        }

        .filter-list label:hover {
            color: var(--primary-color);
        }

        .filter-list input[type="checkbox"] {
            margin-right: 0.5rem;
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .price-range {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .price-input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 0.9rem;
        }

        /* Products Area */
        .products-area {
            min-height: 400px;
        }

        .products-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .results-count {
            color: var(--text-light);
        }

        .sort-controls {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .sort-select {
            padding: 0.5rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            background: white;
            cursor: pointer;
        }

        .view-toggle {
            display: flex;
            gap: 0.5rem;
        }

        .view-btn {
            padding: 0.5rem 1rem;
            border: 1px solid var(--border-color);
            background: white;
            cursor: pointer;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .view-btn.active {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
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
            height: 250px;
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
            font-size: 0.9rem;
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

        .old-price {
            text-decoration: line-through;
            color: var(--text-light);
            font-size: 1rem;
            margin-left: 0.5rem;
        }

        @media (max-width: 968px) {
            .products-layout {
                grid-template-columns: 1fr;
            }

            .filters-sidebar {
                position: static;
            }

            .page-header h1 {
                font-size: 2rem;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>Produk Kami</h1>
            <p>Cari Produk Yang Kamu Butuhkan</p>
        </div>
    </div>

    <!-- Products Container -->
    <div class="products-container">
        <div class="container">
            <div class="products-layout">
                <!-- Sidebar Filters -->
                <aside class="filters-sidebar">
                    <h2 style="margin-bottom: 1.5rem;">Filters</h2>

                    <div class="filter-section">
                        <h3>Categories</h3>
                        <ul class="filter-list">
                            <li>
                                <label>
                                    <input type="checkbox" checked>
                                    <span>Semua Produk</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span>Es Krim</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span>Bubuk Es Krim</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span>Cone</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span>Cup</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span>Sendok</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox">
                                    <span>Tutup</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </aside>

                    <div class="products-grid">
                        <!-- Product 1 -->
                        <div class="product-card">
                            <span class="product-badge">New</span>
                            <div class="product-image">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Smartphones</div>
                                <h3>iPhone 15 Pro Max</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(128)</span>
                                </div>
                                <div class="product-price">
                                    <div>
                                        <span class="price">Rp 19.999.000</span>
                                        <span class="old-price">Rp 22.999.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="product-card">
                            <span class="product-badge" style="background: #ef4444;">Hot</span>
                            <div class="product-image"
                                style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Laptops</div>
                                <h3>MacBook Pro M3 16"</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(256)</span>
                                </div>
                                <div class="product-price">
                                    <div>
                                        <span class="price">Rp 42.999.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="product-card">
                            <span class="product-badge" style="background: #10b981;">-20%</span>
                            <div class="product-image"
                                style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                                <i class="fas fa-headphones"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Audio</div>
                                <h3>Sony WH-1000XM5</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(189)</span>
                                </div>
                                <div class="product-price">
                                    <div>
                                        <span class="price">Rp 4.799.000</span>
                                        <span class="old-price">Rp 5.999.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="product-card">
                            <div class="product-image"
                                style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                                <i class="fas fa-tablet-alt"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Tablets</div>
                                <h3>iPad Pro 12.9" M2</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(342)</span>
                                </div>
                                <div class="product-price">
                                    <div>
                                        <span class="price">Rp 18.499.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="product-card">
                            <div class="product-image"
                                style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);">
                                <i class="fas fa-camera"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Cameras</div>
                                <h3>Canon EOS R6 Mark II</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(98)</span>
                                </div>
                                <div class="product-price">
                                    <div>
                                        <span class="price">Rp 38.999.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="product-card">
                            <span class="product-badge" style="background: #8b5cf6;">Sale</span>
                            <div class="product-image"
                                style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);">
                                <i class="fas fa-gamepad"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Gaming</div>
                                <h3>PlayStation 5 Console</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(423)</span>
                                </div>
                                <div class="product-price">
                                    <div>
                                        <span class="price">Rp 7.999.000</span>
                                        <span class="old-price">Rp 9.499.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 7 -->
                        <div class="product-card">
                            <div class="product-image"
                                style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);">
                                <i class="fas fa-watch"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Wearables</div>
                                <h3>Apple Watch Series 9</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(267)</span>
                                </div>
                                <div class="product-price">
                                    <div>
                                        <span class="price">Rp 6.999.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 8 -->
                        <div class="product-card">
                            <div class="product-image"
                                style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);">
                                <i class="fas fa-keyboard"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Accessories</div>
                                <h3>Logitech MX Keys</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(512)</span>
                                </div>
                                <div class="product-price">
                                    <div>
                                        <span class="price">Rp 1.899.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 9 -->
                        <div class="product-card">
                            <span class="product-badge">New</span>
                            <div class="product-image"
                                style="background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);">
                                <i class="fas fa-tv"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Smart TV</div>
                                <h3>Samsung OLED 65"</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(156)</span>
                                </div>
                                <div class="product-price">
                                    <div>
                                        <span class="price">Rp 24.999.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 10 -->
                        <div class="product-card">
                            <div class="product-image"
                                style="background: linear-gradient(135deg, #d299c2 0%, #fef9d7 100%);">
                                <i class="fas fa-mouse"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Accessories</div>
                                <h3>Logitech MX Master 3S</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(789)</span>
                                </div>
                                <div class="product-price">
                                    <div>
                                        <span class="price">Rp 1.599.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 11 -->
                        <div class="product-card">
                            <span class="product-badge" style="background: #10b981;">-15%</span>
                            <div class="product-image"
                                style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                <i class="fas fa-microphone"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Audio</div>
                                <h3>Shure SM7B Microphone</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(234)</span>
                                </div>
                                <div class="product-price">
                                    <div>
                                        <span class="price">Rp 5.699.000</span>
                                        <span class="old-price">Rp 6.699.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Product 12 -->
                        <div class="product-card">
                            <div class="product-image"
                                style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                                <i class="fas fa-desktop"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-category">Monitors</div>
                                <h3>LG UltraGear 27" 4K</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(345)</span>
                                </div>
                                <div class="product-price">
                                    <div>
                                        <span class="price">Rp 8.999.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection