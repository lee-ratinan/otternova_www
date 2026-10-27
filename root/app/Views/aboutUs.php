<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <div class="page-title dark-background" style="background-image: url(<?= base_url('assets/img/website/hero-secondary.webp') ?>);">
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
    <section id="call-to-action" class="call-to-action section light-background">

        <div class="container">

            <div class="cta-wrapper">
                <div class="cta-shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                </div>

                <div class="row g-0">
                    <div class="col-lg-7">
                        <div class="cta-content p-5">
                            <span class="badge-custom">Premium Offer</span>
                            <h2 class="mt-4 mb-4">Transform Your Experience With Our Solution</h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                            <div class="row benefits-row mb-5">
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <div class="icon-box">
                                            <i class="bi bi-lightning-charge-fill"></i>
                                        </div>
                                        <div class="benefit-content">
                                            <h5>Quick Setup</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <div class="icon-box">
                                            <i class="bi bi-shield-check"></i>
                                        </div>
                                        <div class="benefit-content">
                                            <h5>Full Security</h5>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="action-buttons">
                                <a href="#" class="btn btn-primary">Start Now</a>
                                <a href="#" class="btn btn-outline">Learn More</a>
                                <div class="guarantee-badge">
                                    <i class="bi bi-patch-check-fill"></i>
                                    <span>30-Day Money Back</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="cta-image-container">
                            <img src="<?= base_url('assets/img/illustration/illustration-3.webp') ?>" alt="Illustration" class="img-fluid main-image">
                            <div class="floating-element element-1">
                                <i class="bi bi-star-fill"></i>
                                <span>4.9 Rating</span>
                            </div>
                            <div class="floating-element element-2">
                                <i class="bi bi-people-fill"></i>
                                <span>10k+ Users</span>
                            </div>
                            <div class="pattern-dots"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section id="team" class="team section">
        <!-- Section Title -->
        <div class="container section-title">
            <h2>Team</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="team-slider swiper init-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 800,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": 1,
                        "spaceBetween": 30,
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                        },
                        "breakpoints": {
                            "576": {
                                "slidesPerView": 2
                            },
                            "992": {
                                "slidesPerView": 3
                            },
                            "1200": {
                                "slidesPerView": 4
                            }
                        }
                    }
                </script>
                <div class="swiper-wrapper" id="swiper-wrapper-1fa10526fd797c357" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-331.5px, 0px, 0px); transition-delay: 0ms;">

                    <!-- End slide item -->

                    <!-- End slide item -->

                    <!-- End slide item -->

                    <!-- End slide item -->

                    <!-- End slide item -->

                    <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 5" data-swiper-slide-index="3" style="width: 301.5px; margin-right: 30px;">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="<?= base_url('assets/img/person/person-f-9.webp') ?>" class="img-fluid" alt="" loading="lazy">
                                <div class="team-overlay">
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Olivia Thompson</h3>
                                <span>Lead Developer</span>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                            </div>
                        </div><!-- End Team Card -->
                    </div><div class="swiper-slide swiper-slide-active" role="group" aria-label="5 / 5" data-swiper-slide-index="4" style="width: 301.5px; margin-right: 30px;">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="<?= base_url('assets/img/person/person-m-12.webp') ?>" class="img-fluid" alt="" loading="lazy">
                                <div class="team-overlay">
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Jason Parker</h3>
                                <span>UI/UX Designer</span>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</p>
                            </div>
                        </div><!-- End Team Card -->
                    </div><div class="swiper-slide swiper-slide-next" role="group" aria-label="1 / 5" data-swiper-slide-index="0" style="width: 301.5px; margin-right: 30px;">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="<?= base_url('assets/img/person/person-m-3.webp') ?>" class="img-fluid" alt="" loading="lazy">
                                <div class="team-overlay">
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Marcus Wilson</h3>
                                <span>Chief Technology Officer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                            </div>
                        </div><!-- End Team Card -->
                    </div><div class="swiper-slide" role="group" aria-label="2 / 5" data-swiper-slide-index="1" style="width: 301.5px; margin-right: 30px;">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="<?= base_url('assets/img/person/person-f-5.webp') ?>" class="img-fluid" alt="" loading="lazy">
                                <div class="team-overlay">
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Sophia Reynolds</h3>
                                <span>Product Designer</span>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div><!-- End Team Card -->
                    </div><div class="swiper-slide" role="group" aria-label="3 / 5" data-swiper-slide-index="2" style="width: 301.5px; margin-right: 30px;">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="<?= base_url('assets/img/person/person-m-8.webp') ?>" class="img-fluid" alt="" loading="lazy">
                                <div class="team-overlay">
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Daniel Chen</h3>
                                <span>Marketing Specialist</span>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div><!-- End Team Card -->
                    </div></div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 5" aria-current="true"></span></div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-1fa10526fd797c357"></div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-1fa10526fd797c357"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

        </div>

    </section>
<?php $this->endSection() ?>