@extends('layouts.app')

@section('title', 'Kontak Depo Es Krim')

@push('styles')
    <style>
        .page-header {
            background: #ECB686;
            color: black;
            padding: 4rem 2rem;
            text-align: center;
        }

        .page-header h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
        }

        .contact-section {
            padding: 4rem 0;
        }

        .contact-grid {
            display: flex;
            justify-content: center;
            margin-bottom: 4rem;
        }

        .contact-info {
            width: 100%;
            max-width: 900px;
        }

        .contact-info-box {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .contact-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 2.5rem 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .contact-item:first-child {
            padding-top: 0;
        }

        .contact-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .contact-icon {
            width: 80px;
            height: 80px;
            background: #ECB686;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            margin-bottom: 1.5rem;
            box-shadow: 0 6px 20px rgba(244, 114, 182, 0.4);
        }

        .contact-details {
            width: 100%;
        }

        .contact-details h3 {
            font-size: 1.5rem;
            margin-bottom: 0.75rem;
            color: var(--text-dark);
            font-weight: 700;
        }

        .contact-details p {
            color: var(--text-light);
            line-height: 1.8;
            margin: 0;
            font-size: 1rem;
        }

        .contact-details a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .contact-details a:hover {
            text-decoration: underline;
        }

        .social-links-inline {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
            justify-content: center;
        }

        .social-links-inline a {
            width: 50px;
            height: 50px;
            background: #ECB686;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s;
            font-size: 1.2rem;
            text-decoration: none;
        }

        .social-links-inline a:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(244, 114, 182, 0.5);
        }

        .contact-form {
            background: white;
            padding: 3rem;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text-dark);
        }

        .form-control {
            width: 100%;
            padding: 1rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            width: 100%;
            padding: 1rem 2rem;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background: var(--secondary-color);
        }

        .hours-section {
            padding: 4rem 0;
            background: #F4F4F4;
        }

        .hours-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .hours-icon {
            width: 80px;
            height: 80px;
            background: #ECB686;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: white;
            margin: 0 auto 1.5rem;
            box-shadow: 0 6px 20px rgba(244, 114, 182, 0.4);
        }

        .hours-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 2rem;
        }

        .hours-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .hours-item {
            background: #F4F4F4;
            padding: 2rem;
            border-radius: 16px;
            border: 2px solid #f9e8f1;
            transition: all 0.3s;
        }

        .hours-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(244, 114, 182, 0.2);
            border-color: #ECB868;
        }

        .hours-item-icon {
            font-size: 2rem;
            color: #ECB686;
            margin-bottom: 1rem;
        }

        .hours-label {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .hours-time {
            font-size: 1rem;
            color: var(--text-light);
            font-weight: 500;
        }

        .hours-note {
            background: linear-gradient(135deg, #f472b6 0%, #fbbf24 100%);
            color: white;
            padding: 1.25rem 2rem;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
        }

        @media (max-width: 968px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .hours-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .hours-container {
                padding: 2rem;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1>Hubungi Kami</h1>
            <p>Chat kami jika ada yang ditanyakan</p>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Info - All in One Box -->
                <div class="contact-info">
                    <div class="contact-info-box">
                        <!-- Visit Our Store -->
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-store"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Kunjungi Toko Kami</h3>
                                <p>Jl. Semolowaru Elok Blok B No.8, Semolowaru,<br> Kec. Sukolilo, Surabaya, Jawa Timur
                                    60119</p>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Hubungi Kami</h3>
                                <p>
                                    <a href="https://wa.me/6285852772500" target="_blank">+62 858-5277-2500</a><br>
                                    <span style="color: #999; font-size: 0.9rem;">Aktif selama jam operasional</span>
                                </p>
                            </div>
                        </div>

                        <!-- Follow Us -->
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Follow Kami</h3>
                                <div class="social-links-inline">
                                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Hours -->
    <div class="hours-section">
        <div class="container">
            <div class="hours-container">
                <div class="hours-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h2 class="hours-title">Jam Operasional</h2>

                <div class="hours-grid">
                    <div class="hours-item">
                        <div class="hours-item-icon">
                            <i class="fas fa-calendar-week"></i>
                        </div>
                        <div class="hours-label">Senin - Sabtu</div>
                        <div class="hours-time">08:00 AM - 06:00 PM</div>
                    </div>

                    <div class="hours-item">
                        <div class="hours-item-icon">
                            <i class="fas fa-calendar-times"></i>
                        </div>
                        <div class="hours-label">Minggu & Tanggal Merah</div>
                        <div class="hours-time" style="color: #f472b6; font-weight: 700;">Tutup</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection