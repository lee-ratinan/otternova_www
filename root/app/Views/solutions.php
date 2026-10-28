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
                        <h2><?= lang('Solutions.about.title') ?></h2>
                        <p class="lead"><?= lang('Solutions.about.lead') ?></p>
                        <h3 class="mb-3"><?= lang('Solutions.about.features-title') ?></h3>
                        <h4><i class="bi bi-globe2"></i> <?= lang('Solutions.about.features.website-builder.title') ?></h4>
                        <p><?= lang('Solutions.about.features.website-builder.description') ?></p>
                        <h4><i class="bi bi-calendar-check"></i> <?= lang('Solutions.about.features.appointment-booking.title') ?></h4>
                        <p><?= lang('Solutions.about.features.appointment-booking.description') ?></p>
                        <h4><i class="bi bi-people"></i> <?= lang('Solutions.about.features.group-sessions.title') ?></h4>
                        <p><?= lang('Solutions.about.features.group-sessions.description') ?></p>
                        <h4><i class="bi bi-bag-check"></i> <?= lang('Solutions.about.features.sell-products.title') ?></h4>
                        <p><?= lang('Solutions.about.features.sell-products.description') ?></p>
                        <h4><i class="bi bi-bank"></i> <?= lang('Solutions.about.features.easy-payments.title') ?></h4>
                        <p><?= lang('Solutions.about.features.easy-payments.description') ?></p>
                        <h4><i class="bi bi-gear-wide-connected"></i> <?= lang('Solutions.about.features.smart-dashboard.title') ?></h4>
                        <p><?= lang('Solutions.about.features.smart-dashboard.description') ?></p>
                        <h4><i class="bi bi-graph-up-arrow"></i> <?= lang('Solutions.about.features.reports-insights.title') ?></h4>
                        <p><?= lang('Solutions.about.features.reports-insights.description') ?></p>
                        <div class="cta-wrapper">
                            <a href="<?= getenv('LINK_CLIENT') ?>" class="btn btn-primary"><?= lang('Solutions.about.create-account') ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="<?= base_url('assets/img/website/hero-solutions-1.webp') ?>" alt="<?= lang('Solutions.about.image-alt') ?>" class="img-fluid main-image">
                        <div class="floating-card">
                            <div class="card-content">
                                <i class="bi bi-award"></i>
                                <div class="text">
                                    <h5><?= lang('Solutions.about.support-locals.title') ?></h5>
                                    <span><?= lang('Solutions.about.support-locals.description') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="featured-services" class="featured-services section light-background">
        <div class="container section-title">
            <h2><?= lang('Solutions.featured-services.title') ?></h2>
            <p><?= lang('Solutions.featured-services.description') ?></p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-content" data-aos-duration="900">
                        <h2><?= lang('Solutions.featured-services.heading') ?></h2>
                        <p data-aos-duration="800"><?= lang('Solutions.featured-services.intro') ?></p>
                        <div class="mt-4" data-aos-duration="1100">
                            <a href="<?= base_url($locale . '/contact') ?>" class="btn-consultation"><span><?= lang('Solutions.featured-services.request-consultation') ?></span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-image">
                        <img src="<?= base_url('assets/img/website/hero-solutions-2.webp') ?>" alt="<?= lang('Solutions.featured-services.image-alt') ?>" class="img-fluid">
                        <div class="shape-circle"></div>
                        <div class="shape-accent"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->endSection() ?>