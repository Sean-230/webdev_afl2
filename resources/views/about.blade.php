@extends('layouts.app')

@section('title', 'Tentang Depo Es Krim')

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

        .content-section {
            padding: 4rem 0;
        }

        .about-intro {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            margin-bottom: 4rem;
        }

        .about-image {
            height: 400px;
            background: white;
            border-radius: 16px;
            border: 2px solid #ECB686;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 8rem;
            color: white;
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .about-text p {
            color: var(--text-light);
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin: 4rem 0;
        }

        .stat-card {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--text-light);
            font-size: 1.1rem;
        }

        .values-section {
            background: var(--bg-light);
            padding: 4rem 0;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .value-card {
            background: white;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .value-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: white;
        }

        .value-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .value-card p {
            color: var(--text-light);
            line-height: 1.8;
        }

        .team-section {
            padding: 4rem 0;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .team-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .team-card:hover {
            transform: translateY(-10px);
        }

        .team-image {
            height: 300px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
            color: white;
        }

        .team-info {
            padding: 1.5rem;
            text-align: center;
        }

        .team-info h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        .team-role {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .team-social {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .team-social a {
            width: 35px;
            height: 35px;
            background: var(--bg-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-dark);
            transition: all 0.3s;
        }

        .team-social a:hover {
            background: var(--primary-color);
            color: white;
        }

        @media (max-width: 768px) {
            .about-intro {
                grid-template-columns: 1fr;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .about-text h2 {
                font-size: 1.8rem;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>Tentang Depo Es Krim</h1>
            <p>Menjual berbagai jenis kebutuhan es krim</p>
        </div>
    </div>

    <!-- About Intro -->
    <div class="content-section">
        <div class="container">
            <div class="about-intro">
                <div class="about-image">
                    <img src="{{ asset('images/logo_transparan(1).png') }}" alt="Depo Es Krim Logo">
                </div>
                <div class="about-text">
                    <h2>Siapa Kami</h2>
                    <p>Depo Es Krim adalah pusat penjualan es krim dari berbagai brand ternama yang siap memenuhi kebutuhan Anda. Kami menghadirkan beragam pilihan rasa, kemasan, dan merek es krim terpercaya — semua dalam satu tempat yang mudah diakses.<p> Sejak awal, kami berkomitmen untuk memberikan kemudahan bagi pelanggan dalam mendapatkan produk es krim favorit dengan harga bersaing dan pelayanan yang cepat. Dengan dukungan tim yang profesional, Depo Es Krim menjadi mitra terpercaya bagi toko, kafe, maupun pelanggan individu yang ingin menikmati kelezatan es krim berkualitas.
                </div>
            </div>

            <!-- Stats -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">100</div>
                    <div class="stat-label">Produk</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">10</div>
                    <div class="stat-label">Partner</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">2</div>
                    <div class="stat-label">Tahun Berdiri</div>
                </div>
            </div>
        </div>
    </div>
@endsection