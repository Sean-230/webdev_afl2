@extends('layouts.app')

@section('title', 'Tentang Depo Es Krim')

@push('styles')
<style>
    .bg-cream {
        background-color: #ECB686;
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-color);
    }
</style>
@endpush

@section('content')
    <!-- Header -->
    <section class="bg-cream text-white text-center py-5">
        <div class="container">
            <h1 class="fw-bold display-5 mb-2">Tentang Depo Es Krim</h1>
            <p class="lead mb-0">Menjual berbagai jenis kebutuhan es krim</p>
        </div>
    </section>

    <!-- About Intro -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-md-6 text-center">
                    <div class="mx-auto" style="max-width: 300px;">
                        <img src="{{ asset('images/logo_transparan(1).png') }}" alt="Depo Es Krim Logo" class="img-fluid p-3 border border-3 border-warning rounded-4 shadow-sm">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold mb-3">Siapa Kami</h2>
                    <p class="text-secondary">
                        Depo Es Krim adalah pusat penjualan es krim dari berbagai brand ternama yang siap memenuhi kebutuhan Anda.
                        Kami menghadirkan beragam pilihan rasa, kemasan, dan merek es krim terpercaya — semua dalam satu tempat yang mudah diakses.
                    </p>
                    <p class="text-secondary">
                        Sejak awal, kami berkomitmen untuk memberikan kemudahan bagi pelanggan dalam mendapatkan produk es krim favorit dengan harga bersaing dan pelayanan yang cepat.
                        Dengan dukungan tim yang profesional, Depo Es Krim menjadi mitra terpercaya bagi toko, kafe, maupun pelanggan individu yang ingin menikmati kelezatan es krim berkualitas.
                    </p>
                </div>
            </div>

            <!-- Stats -->
            <div class="row text-center mt-5 gy-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm py-4">
                        <div class="card-body">
                            <div class="stat-number">100+</div>
                            <p class="text-secondary mb-0">Produk</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm py-4">
                        <div class="card-body">
                            <div class="stat-number">10+</div>
                            <p class="text-secondary mb-0">Partner</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm py-4">
                        <div class="card-body">
                            <div class="stat-number">2</div>
                            <p class="text-secondary mb-0">Tahun Berdiri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
