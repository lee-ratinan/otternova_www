<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
<section id="hero" class="hero section dark-background">
    <div class="hero-background">
        <img src="<?= base_url('assets/img/hero-img.webp') ?>" alt="<?= lang('Meta.site-name') ?>"
             data-aos-duration="1000">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <span class="hero-badge">Innovative Solutions</span>
                    <h1>Transform Your Business with Modern Technology</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud.</p>
                    <div class="hero-actions">
                        <a href="#services" class="btn-primary">Explore Services</a>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn-secondary glightbox">
                            <i class="bi bi-play-circle"></i>
                            <span>Watch Demo</span>
                        </a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Projects Completed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">98%</span>
                            <span class="stat-label">Client Satisfaction</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Support Available</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-visual">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="feature-card">
                                <i class="bi bi-shield-check"></i>
                                <span>Secure &amp; Reliable</span>
                            </div>
                            <div class="feature-card">
                                <i class="bi bi-people"></i>
                                <span>Expert Team</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card">
                                <i class="bi bi-speedometer2"></i>
                                <span>High Performance</span>
                            </div>
                            <div class="feature-card">
                                <i class="bi bi-award"></i>
                                <span>Award Winning</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection() ?>
