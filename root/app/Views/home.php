<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <section id="hero" class="hero section dark-background">
        <div class="hero-background">
            <img src="<?= base_url('assets/img/website/hero-img.webp') ?>" alt="<?= lang('Meta.site-name') ?>"
                 data-aos="fade-in" data-aos-duration="1000">
            <div class="overlay"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <span class="hero-badge" data-aos="fade-up" data-aos-duration="500"><?= lang('Home.hero.badge') ?></span>
                        <h1 data-aos="fade-up" data-aos-duration="700"><?= lang('Home.hero.title') ?></h1>
                        <p data-aos="fade-up" data-aos-duration="900"><?= lang('Home.hero.description') ?></p>
                        <div class="hero-actions" data-aos="fade-up" data-aos-duration="1000">
                            <a href="<?= base_url($locale . '/solutions') ?>" class="btn-primary"><?= lang('Home.hero.explore-services') ?></a>
                            <!-- TODO: add the video -->
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn-secondary glightbox d-none">
                                <i class="bi bi-play-circle"></i>
                                <span><?= lang('Home.hero.watch-demo') ?></span>
                            </a>
                        </div>
                        <div class="hero-stats" data-aos="fade-up" data-aos-duration="1200">
                            <div class="stat-item">
                                <span class="stat-number"><?= lang('Home.hero.stats.uptime-target.value') ?></span>
                                <span class="stat-label"><?= lang('Home.hero.stats.uptime-target.label') ?></span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number"><?= lang('Home.hero.stats.support-sla.value') ?></span>
                                <span class="stat-label"><?= lang('Home.hero.stats.support-sla.label') ?></span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number"><?= lang('Home.hero.stats.human-tested.value') ?></span>
                                <span class="stat-label"><?= lang('Home.hero.stats.human-tested.label') ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-visual">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="feature-card" data-aos="fade-up" data-aos-duration="500">
                                    <i class="bi bi-currency-dollar"></i>
                                    <span><?= lang('Home.hero.features.economical') ?></span>
                                </div>
                                <div class="feature-card" data-aos="fade-up" data-aos-duration="600">
                                    <i class="bi bi-emoji-smile"></i>
                                    <span><?= lang('Home.hero.features.convenience') ?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-card" data-aos="fade-up" data-aos-duration="700">
                                    <i class="bi bi-speedometer2"></i>
                                    <span><?= lang('Home.hero.features.flexible') ?></span>
                                </div>
                                <div class="feature-card" data-aos="fade-up" data-aos-duration="800">
                                    <i class="bi bi-shield-check"></i>
                                    <span><?= lang('Home.hero.features.secure') ?></span>
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
            <h2 data-aos="fade-left" data-aos-duration="600"><?= lang('Home.featured-services.title') ?></h2>
            <p data-aos="fade-left" data-aos-duration="800"><?= lang('Home.featured-services.description') ?></p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-content" data-aos="fade-up" data-aos-duration="900">
                        <span class="subtitle"><?= lang('Home.featured-services.subtitle') ?></span>
                        <h2><?= lang('Home.featured-services.heading') ?></h2>
                        <p data-aos="fade-up" data-aos-duration="800"><?= lang('Home.featured-services.intro-1') ?></p>
                        <p data-aos="fade-up" data-aos-duration="900"><?= lang('Home.featured-services.intro-2') ?></p>
                        <div class="mt-4" data-aos="fade-up" data-aos-duration="1100">
                            <a href="<?= base_url($locale . '/solutions') ?>" class="btn-consultation"><span><?= lang('Home.featured-services.learn-more') ?></span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-image">
                        <img src="<?= base_url('assets/img/website/our-impressive-services.webp') ?>" alt="<?= lang('Home.featured-services.image-alt') ?>" class="img-fluid" data-aos="fade-up" data-aos-duration="1000">
                        <div class="shape-circle"></div>
                        <div class="shape-accent"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-5" data-aos="fade-up" data-aos-duration="1000">
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
                                        <i class="bi bi-lightbulb"></i>
                                    </div>
                                    <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                    <div class="content">
                                        <h4><a href="#"><?= lang('Home.featured-services.cards.ai-solutions.title') ?></a></h4>
                                        <p><?= lang('Home.featured-services.cards.ai-solutions.description') ?></p>
                                        <div class="service-number">05</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 5"
                                 data-swiper-slide-index="0" style="width: 418.667px; margin-right: 20px;">
                                <div class="service-card">
                                    <div class="icon-box">
                                        <i class="bi bi-suitcase-lg"></i>
                                    </div>
                                    <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                    <div class="content">
                                        <h4><a href="#"><?= lang('Home.featured-services.cards.business-management.title') ?></a></h4>
                                        <p><?= lang('Home.featured-services.cards.business-management.description') ?></p>
                                        <div class="service-number">01</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 5"
                                 data-swiper-slide-index="1" style="width: 418.667px; margin-right: 20px;">
                                <div class="service-card">
                                    <div class="icon-box">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                    <div class="content">
                                        <h4><a href="#"><?= lang('Home.featured-services.cards.user-management.title') ?></a></h4>
                                        <p><?= lang('Home.featured-services.cards.user-management.description') ?></p>
                                        <div class="service-number">02</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 5"
                                 data-swiper-slide-index="2" style="width: 418.667px; margin-right: 20px;">
                                <div class="service-card">
                                    <div class="icon-box">
                                        <i class="bi bi-bag-check"></i>
                                    </div>
                                    <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                    <div class="content">
                                        <h4><a href="#"><?= lang('Home.featured-services.cards.ecommerce-solutions.title') ?></a></h4>
                                        <p><?= lang('Home.featured-services.cards.ecommerce-solutions.description') ?></p>
                                        <div class="service-number">03</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="4 / 5" data-swiper-slide-index="3"
                                 style="width: 418.667px; margin-right: 20px;">
                                <div class="service-card">
                                    <div class="icon-box">
                                        <i class="bi bi-globe"></i>
                                    </div>
                                    <a href="#" class="arrow-link"><i class="bi bi-arrow-right"></i></a>
                                    <div class="content">
                                        <h4><a href="#"><?= lang('Home.featured-services.cards.webpage-solutions.title') ?></a></h4>
                                        <p><?= lang('Home.featured-services.cards.webpage-solutions.description') ?></p>
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
                        <button class="swiper-nav-prev" tabindex="0" aria-label="<?= lang('Home.featured-services.previous-slide') ?>"
                                aria-controls="swiper-wrapper-995a87c2c4461c05"><i class="bi bi-chevron-left"></i></button>
                        <button class="swiper-nav-next" tabindex="0" aria-label="<?= lang('Home.featured-services.next-slide') ?>"
                                aria-controls="swiper-wrapper-995a87c2c4461c05"><i class="bi bi-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="faq section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-left" data-aos-duration="800">
            <h2><?= lang('Home.faq.title') ?></h2>
            <p><?= lang('Home.faq.description') ?></p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="faq-wrapper">
                        <?php for ($i = 1; $i <= 7; $i++) : ?>
                        <div class="faq-item <?= (1 == $i ? 'faq-active' : '') ?>" data-aos="fade-up" data-aos-duration="<?= $i * 500 ?>">
                            <div class="faq-header">
                                <div class="faq-icon">
                                    <i class="bi bi-question-circle"></i>
                                </div>
                                <h4><?= lang('Home.faq.item-' . $i . '.question') ?></h4>
                                <div class="faq-toggle">
                                    <i class="bi bi-plus"></i>
                                    <i class="bi bi-dash"></i>
                                </div>
                            </div>
                            <div class="faq-content">
                                <div class="content-inner">
                                    <p><?= lang('Home.faq.item-' . $i . '.answer') ?></p>
                                </div>
                            </div>
                        </div><!-- End FAQ Item -->
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->endSection() ?>