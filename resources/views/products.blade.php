@extends('layouts.app')

@section('title', 'Produk - Depo Es Krim')

@push('styles')
<style>
    /* === HERO SECTION === */
    .hero {
        background: linear-gradient(135deg, #fce7f3, #e0f2fe);
        padding: 4rem 1rem;
        text-align: center;
        border-bottom: 1px solid #e5e7eb;
    }

    .hero h1 {
        font-size: 2.5rem;
        font-weight: 800;
        color: #1f2937;
        margin-bottom: 0.5rem;
    }

    .hero p {
        color: #6b7280;
        font-size: 1.1rem;
        max-width: 600px;
        margin: 0 auto;
    }

    /* === FILTER SECTION === */
    .filter-section {
        background: #ffffff;
        padding: 1.5rem 1rem;
        border-bottom: 1px solid #e5e7eb;
        box-shadow: 0 2px 4px rgba(0,0,0,0.03);
    }

    .filter-form {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem 1.5rem;
        align-items: center;
        justify-content: center;
    }

    .filter-form label {
        font-weight: 500;
        color: #374151;
        display: flex;
        align-items: center;
        gap: 0.25rem;
    }

    .filter-submit {
        background: #2563eb;
        color: white;
        padding: 0.5rem 1.25rem;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .filter-submit:hover {
        background: #1e40af;
        transform: translateY(-2px);
    }

    /* === PRODUCT GRID === */
    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        gap: 2rem;
        padding: 3rem 0;
    }

    .product-card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        overflow: hidden;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        position: relative;
    }

    .product-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.08);
    }

    .product-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .product-card h3 {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1f2937;
        margin: 0.75rem 0 0.25rem;
    }

    .product-card p {
        color: #6b7280;
        font-size: 0.95rem;
        margin-bottom: 0.5rem;
    }

    .price {
        color: #2563eb;
        font-weight: 700;
        font-size: 1rem;
        margin-bottom: 1rem;
    }

    /* === EMPTY STATE === */
    .no-products {
        grid-column: 1 / -1;
        text-align: center;
        color: #9ca3af;
        font-size: 1.1rem;
        padding: 3rem 0;
    }

    /* === ANIMATIONS === */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .product-card {
        animation: fadeIn 0.5s ease both;
    }

    /* === RESPONSIVE === */
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2rem;
        }

        .filter-form {
            flex-direction: column;
            align-items: flex-start;
        }

        .product-grid {
            gap: 1.5rem;
        }
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="hero">
    <h1>Produk Kami</h1>
    <p>Temukan berbagai varian es krim, bahan baku, dan perlengkapan berkualitas hanya di Depo Es Krim.</p>
</section>

<div class="container">
    <!-- Filter Section -->
    <div class="filter-section">
        <form method="GET" action="{{ route('products.index') }}" class="filter-form">
            <label>Filter Kategori:</label>

            @foreach ($categories as $category)
                <label>
                    <input type="checkbox" name="categories[]" value="{{ $category }}"
                        {{ in_array($category, request()->get('categories', [])) ? 'checked' : '' }}>
                    {{ $category }}
                </label>
            @endforeach

            <button type="submit" class="filter-submit">Terapkan</button>
        </form>
    </div>

    <!-- Product Grid -->
    <div class="product-grid">
        @forelse ($products as $product)
            <div class="product-card">
                <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->category }}</p>
                <div class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
            </div>
        @empty
            <p class="no-products">Tidak ada produk ditemukan.</p>
        @endforelse
    </div>
</div>
@endsection
