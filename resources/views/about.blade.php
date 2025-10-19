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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 16px;
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
            <h1>About ElectroShop</h1>
            <p>Your Trusted Electronics Partner Since 2020</p>
        </div>
    </div>

    <!-- About Intro -->
    <div class="content-section">
        <div class="container">
            <div class="about-intro">
                <div class="about-image">
                    <i class="fas fa-store"></i>
                </div>
                <div class="about-text">
                    <h2>Who We Are</h2>
                    <p>ElectroShop is a leading electronics retailer committed to providing premium quality products and
                        exceptional customer service. Since our establishment in 2020, we have been dedicated to bringing
                        the latest technology to our customers at competitive prices.</p>
                    <p>Our mission is to make cutting-edge technology accessible to everyone, whether you're a professional,
                        student, or tech enthusiast. We carefully curate our product selection to ensure quality,
                        reliability, and value for money.</p>
                    <p>With a team of passionate tech experts, we're not just selling products – we're helping you find the
                        perfect technology solutions for your needs.</p>
                </div>
            </div>

            <!-- Stats -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">50K+</div>
                    <div class="stat-label">Happy Customers</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Products Available</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Brand Partners</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Years Experience</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div class="values-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 1rem;">
                <h2 style="font-size: 2.5rem; color: var(--text-dark);">Our Core Values</h2>
                <p style="color: var(--text-light); font-size: 1.1rem;">The principles that guide everything we do</p>
            </div>

            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Quality First</h3>
                    <p>We only stock products from trusted brands and manufacturers, ensuring every purchase meets the
                        highest quality standards.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Customer Focus</h3>
                    <p>Your satisfaction is our priority. We go the extra mile to ensure you have an excellent shopping
                        experience from start to finish.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We stay ahead of tech trends to bring you the latest innovations and cutting-edge products as soon as
                        they hit the market.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Trust & Integrity</h3>
                    <p>We build lasting relationships through transparency, honest advice, and reliable after-sales support.
                    </p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Value for Money</h3>
                    <p>Competitive pricing without compromising on quality. We negotiate the best deals so you don't have
                        to.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Sustainability</h3>
                    <p>We're committed to environmental responsibility through eco-friendly packaging and responsible
                        e-waste management.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="team-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 1rem;">
                <h2 style="font-size: 2.5rem; color: var(--text-dark);">Meet Our Team</h2>
                <p style="color: var(--text-light); font-size: 1.1rem;">The passionate people behind ElectroShop</p>
            </div>

            <div class="team-grid">
                <div class="team-card">
                    <div class="team-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="team-info">
                        <h3>Michael Anderson</h3>
                        <div class="team-role">Founder & CEO</div>
                        <p style="color: var(--text-light); margin-bottom: 1rem;">Visionary leader with 15 years in tech
                            retail</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-image" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="team-info">
                        <h3>Sarah Johnson</h3>
                        <div class="team-role">Chief Operating Officer</div>
                        <p style="color: var(--text-light); margin-bottom: 1rem;">Expert in operations and customer service
                        </p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-image" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="team-info">
                        <h3>David Chen</h3>
                        <div class="team-role">Head of Product</div>
                        <p style="color: var(--text-light); margin-bottom: 1rem;">Tech enthusiast and product specialist</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-image" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="team-info">
                        <h3>Emily Rodriguez</h3>
                        <div class="team-role">Customer Success Manager</div>
                        <p style="color: var(--text-light); margin-bottom: 1rem;">Dedicated to customer satisfaction</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div style="background: var(--bg-light); padding: 4rem 2rem; text-align: center;">
        <div class="container">
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Ready to Experience the Difference?</h2>
            <p style="color: var(--text-light); font-size: 1.1rem; margin-bottom: 2rem;">Join thousands of satisfied
                customers who trust ElectroShop for their tech needs</p>
            <a href="{{ route('products') }}" class="btn"
                style="padding: 1rem 2.5rem; background: var(--primary-color); color: white; text-decoration: none; border-radius: 8px; font-weight: 600; display: inline-block;">Start
                Shopping</a>
        </div>
    </div>
@endsection