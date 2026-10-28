<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <div class="page-title dark-background" style="background-image: url(<?= base_url('assets/img/website/hero-img.webp') ?>);">
        <div class="container position-relative">
            <h1><?= lang('Meta.page-title.' . $slug) ?></h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?= base_url($locale) ?>"><?= lang('Meta.page-title.home') ?></a></li>
                    <li class="current"><?= lang('Meta.page-title.' . $slug) ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <section id="about" class="about section">

        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content">
                        <h2>Transforming Ideas Into Reality Since 2015</h2>
                        <p class="lead">We are a passionate team of innovators dedicated to creating exceptional digital experiences that drive meaningful results for businesses worldwide.</p>
                        <p>Our journey began with a simple vision: to bridge the gap between cutting-edge technology and human-centered design. Today, we've grown into a trusted partner for companies seeking to transform their digital presence and accelerate their growth.</p>
                        <p>Through collaborative partnerships and innovative solutions, we've helped hundreds of organizations achieve their goals while building lasting relationships founded on trust, transparency, and exceptional results.</p>

                        <div class="stats-container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stat-item">
                                        <div class="number">8+</div>
                                        <div class="label">Years Experience</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stat-item">
                                        <div class="number">450+</div>
                                        <div class="label">Projects Completed</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stat-item">
                                        <div class="number">25</div>
                                        <div class="label">Team Members</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cta-wrapper">
                            <a href="#portfolio" class="btn btn-primary">Discover Our Work</a>
                            <a href="#team" class="btn btn-outline">Meet Our Team</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="<?= base_url('assets/img/about/about-square-8.webp') ?>" alt="About Us" class="img-fluid main-image">
                        <div class="floating-card">
                            <div class="card-content">
                                <i class="bi bi-award"></i>
                                <div class="text">
                                    <h5>Excellence Award</h5>
                                    <span>Digital Innovation 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section id="featured-services" class="featured-services section light-background">

        <!-- Section Title -->
        <div class="container section-title">
            <h2>Featured Services</h2>
            <p>Featured Srvices</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="services-content" data-aos-duration="900">
                        <span class="subtitle">Professional Services</span>
                        <h2>Elevating Business Performance Through Strategic Solutions</h2>
                        <p data-aos-duration="800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius risus sed pellentesque auctor. Phasellus gravida magna at tortor cursus, sit amet suscipit tortor malesuada.</p>
                        <div class="mt-4" data-aos-duration="1100">
                            <a href="#" class="btn-consultation"><span>Request a Consultation</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-image">
                        <img src="<?= base_url('assets/img/services/services-9.webp') ?>" alt="Business Services" class="img-fluid">
                        <div class="shape-circle"></div>
                        <div class="shape-accent"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->endSection() ?>