@extends('layouts.app')

@section('title', 'Kontak Depo Es Krim')

@push('styles')
<style>
    .bg-cream {
        background-color: #ECB686;
    }
    
    .contact-card {
        min-height: 100px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
</style>
@endpush

@section('content')
    <!-- Header -->
    <section class="bg-cream text-white text-center py-5">
        <div class="container">
            <h1 class="fw-bold display-5 mb-2">Hubungi Kami</h1>
            <p class="lead mb-0">Chat kami jika ada yang ingin ditanyakan</p>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center g-4">
                <!-- Store -->
                <div class="col-md-4">
                    <div class="card shadow border-0 text-center p-4">
                        <div class="mx-auto bg-cream text-white rounded-circle d-flex align-items-center justify-content-center mb-3" style="width:80px;height:80px;">
                            <i class="fas fa-store fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">Kunjungi Toko Kami</h5>
                        <p class="text-muted mb-0">
                            Jl. Semolowaru Elok Blok B No.8, Semolowaru,<br>
                            Kec. Sukolilo, Surabaya, Jawa Timur 60119
                        </p>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="col-md-4">
                    <div class="card shadow border-0 text-center p-4">
                        <div class="mx-auto bg-cream text-white rounded-circle d-flex align-items-center justify-content-center mb-3" style="width:80px;height:80px;">
                            <i class="fab fa-whatsapp fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">Hubungi Kami</h5>
                        <p class="mb-1">
                            <a href="https://wa.me/6285852772500" class="text-decoration-none text-success fw-semibold" target="_blank">
                                +62 858-5277-2500
                            </a>
                        </p>
                        <small class="text-muted">Aktif selama jam operasional</small>
                    </div>
                </div>

                <!-- Social -->
                <div class="col-md-4">
                    <div class="card shadow border-0 text-center p-4 h-100 contact-card">
                        <div class="mx-auto bg-cream text-white rounded-circle d-flex align-items-center justify-content-center mb-3" style="width:80px;height:80px;">
                            <i class="fas fa-heart fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">Follow Kami</h5>
                        <div class="d-flex justify-content-center gap-3 mt-2">
                            <a href="#" class="btn btn-warning btn-sm rounded-circle text-white">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-warning btn-sm rounded-circle text-white">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Hours -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <div class="mx-auto bg-cream text-white rounded-circle d-flex align-items-center justify-content-center mb-4" style="width:80px;height:80px;">
                <i class="fas fa-clock fa-2x"></i>
            </div>
            <h2 class="fw-bold mb-4">Jam Operasional</h2>

            <div class="row justify-content-center g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm py-4">
                        <div class="text-success mb-2"><i class="fas fa-calendar-week fa-2x"></i></div>
                        <h6 class="fw-bold mb-1">Senin - Sabtu</h6>
                        <p class="text-muted mb-0">08:00 - 18:00</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm py-4">
                        <div class="text-danger mb-2"><i class="fas fa-calendar-times fa-2x"></i></div>
                        <h6 class="fw-bold mb-1">Minggu & Tanggal Merah</h6>
                        <p class="text-danger fw-bold mb-0">Tutup</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
