@extends('layouts.app')

@section('title', 'Produk - Depo Es Krim')

@push('styles')
    <style>
        .bg-cream {
            background-color: #ECB686;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="bg-cream text-white text-center py-5">
        <div class="container">
            <h1 class="fw-bold display-5 mb-2">Produk Kami</h1>
            <p class="lead mb-0">
                Temukan berbagai varian es krim, bahan baku, dan perlengkapan berkualitas hanya di Depo Es Krim.
            </p>
        </div>
    </section>

    <!-- Filter Section -->
    <div class="bg-white py-3 border-bottom shadow-sm">
        <div class="container">
            <form method="GET" action="{{ route('products.index') }}"
                class="row g-3 justify-content-center align-items-center">
                <div class="col-12 col-md-auto">
                    <label class="fw-semibold text-secondary">Filter Kategori:</label>
                </div>

                @foreach ($categories as $category)
                    <div class="col-auto">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="categories[]" value="{{ $category }}"
                                id="cat-{{ Str::slug($category) }}"
                                {{ in_array($category, request()->get('categories', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="cat-{{ Str::slug($category) }}">
                                {{ $category }}
                            </label>
                        </div>
                    </div>
                @endforeach

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary fw-semibold px-4">
                        Terapkan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Product Grid -->
    <div class="container py-5">
        <div class="row g-4">
            @forelse ($products as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ asset($product->image_path) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold text-dark">{{ $product->name }}</h5>
                            <p class="text-secondary mb-1">{{ $product->category }}</p>
                            <p class="fw-bold text-primary mb-0">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted py-5 fs-5">
                    Tidak ada produk ditemukan.
                </div>
            @endforelse
        </div>
    </div>
@endsection
