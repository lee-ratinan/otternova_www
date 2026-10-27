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
                    <p data-aos-duration="800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius
                        risus sed pellentesque auctor. Phasellus gravida magna at tortor cursus, sit amet suscipit
                        tortor malesuada.</p>
                    <div class="mt-4" data-aos-duration="1100">
                        <a href="#" class="btn-consultation"><span>Request a Consultation</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-image">
                    <img src="<?= base_url('assets/img/services/services-9.webp') ?>" alt="Business Services"
                         class="img-fluid">
                    <div class="shape-circle"></div>
                    <div class="shape-accent"></div>
                </div>
            </div>
        </div>
        <div class="row mt-5" data-aos-duration="1000">
            <div class="col-12">
                <div
                    class="services-slider swiper init-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <script type="application/json" class="swiper-config">
                        {
                            "slidesPerView": 3,
                            "spaceBetween": 20,
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "navigation": {
                                "nextEl": ".swiper-nav-next",
                                "prevEl": ".swiper-nav-prev"
                            },
                            "breakpoints": {
                                "320": {
                                    "slidesPerView": 1
                                },
                                "768": {
                                    "slidesPerView": 2
                                },
                                "992": {
                                    "slidesPerView": 3
                                }
                            }
                        }
                    </script>
                    <div class="swiper-wrapper" id="swiper-wrapper-995a87c2c4461c05" aria-live="off"
                         style="transition-duration: 0ms; transform: translate3d(-877.333px, 0px, 0px); transition-delay: 0ms;">
                        <div class="swiper-slide" role="group" aria-label="5 / 5" data-swiper-slide-index="4"
                             style="width: 418.667px; margin-right: 20px;">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Talent Management Strategy</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Cras
                                        vehicula magna eget lectus varius, at finibus massa condimentum.</p>
                                    <div class="service-number">05</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 5"
                             data-swiper-slide-index="0" style="width: 418.667px; margin-right: 20px;">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi bi-bar-chart-fill"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Financial Strategy Development</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Cras
                                        vehicula magna eget lectus varius, at finibus massa condimentum.</p>
                                    <div class="service-number">01</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 5"
                             data-swiper-slide-index="1" style="width: 418.667px; margin-right: 20px;">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Market Expansion Advisory</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Cras
                                        vehicula magna eget lectus varius, at finibus massa condimentum.</p>
                                    <div class="service-number">02</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 5"
                             data-swiper-slide-index="2" style="width: 418.667px; margin-right: 20px;">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Risk Management Solutions</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Cras
                                        vehicula magna eget lectus varius, at finibus massa condimentum.</p>
                                    <div class="service-number">03</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="4 / 5" data-swiper-slide-index="3"
                             style="width: 418.667px; margin-right: 20px;">
                            <div class="service-card">
                                <div class="icon-box">
                                    <i class="bi bi-lightbulb-fill"></i>
                                </div>
                                <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                <div class="content">
                                    <h4><a href="#">Innovation &amp; Digital Transformation</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Cras
                                        vehicula magna eget lectus varius, at finibus massa condimentum.</p>
                                    <div class="service-number">04</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper-navigation">
                    <button class="swiper-nav-prev" tabindex="0" aria-label="Previous slide"
                            aria-controls="swiper-wrapper-995a87c2c4461c05"><i class="bi bi-chevron-left"></i></button>
                    <button class="swiper-nav-next" tabindex="0" aria-label="Next slide"
                            aria-controls="swiper-wrapper-995a87c2c4461c05"><i class="bi bi-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="faq" class="faq section">
    <!-- Section Title -->
    <div class="container section-title">
        <h2>Frequently Asked Questions</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-wrapper">
                    <div class="faq-item faq-active">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet,
                                    ante.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->
                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Vestibulum ac diam
                                    sit amet quam vehicula elementum sed sit amet dui. Proin eget tortor risus.
                                    Curabitur aliquet quam id dui posuere blandit.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->
                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Vestibulum ante ipsum primis in faucibus orci luctus?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->
                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Nulla facilisi morbi tempus iaculis urna id volutpat?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium. Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->
                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h4>Praesent sapien massa, convallis a pellentesque nec?</h4>
                            <div class="faq-toggle">
                                <i class="bi bi-plus"></i>
                                <i class="bi bi-dash"></i>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                                    sint.</p>
                            </div>
                        </div>
                    </div><!-- End FAQ Item -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->endSection() ?>
