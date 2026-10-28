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
                            <span class="badge-custom"><?= lang('AboutUs.call-to-action.badge') ?></span>
                            <h2 class="mt-4 mb-4"><?= lang('AboutUs.call-to-action.title') ?></h2>
                            <p class="mb-4"><?= lang('AboutUs.call-to-action.description') ?></p>
                            <div class="row benefits-row mb-5">
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <div class="icon-box">
                                            <i class="bi bi-lightning-charge-fill"></i>
                                        </div>
                                        <div class="benefit-content">
                                            <h5><?= lang('AboutUs.call-to-action.benefits.quick-setup.title') ?></h5>
                                            <p><?= lang('AboutUs.call-to-action.benefits.quick-setup.description') ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="benefit-item">
                                        <div class="icon-box">
                                            <i class="bi bi-shield-check"></i>
                                        </div>
                                        <div class="benefit-content">
                                            <h5><?= lang('AboutUs.call-to-action.benefits.full-security.title') ?></h5>
                                            <p><?= lang('AboutUs.call-to-action.benefits.full-security.description') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="action-buttons">
                                <a href="<?= getenv('LINK_CLIENT') ?>" class="btn btn-primary"><?= lang('AboutUs.call-to-action.start-now') ?></a>
                                <a href="<?= base_url($locale . '/solutions') ?>" class="btn btn-outline"><?= lang('AboutUs.call-to-action.learn-more') ?></a>
                                <div class="guarantee-badge">
                                    <i class="bi bi-patch-check-fill"></i>
                                    <span><?= lang('AboutUs.call-to-action.guarantee') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="cta-image-container">
                            <img src="<?= base_url('assets/img/website/hero-about-us.webp') ?>" alt="<?= lang('AboutUs.call-to-action.image-alt') ?>" class="img-fluid main-image">
                            <div class="floating-element element-1">
                                <i class="bi bi-star-fill"></i>
                                <span><?= lang('AboutUs.call-to-action.rating') ?></span>
                            </div>
                            <div class="floating-element element-2">
                                <i class="bi bi-people-fill"></i>
                                <span><?= lang('AboutUs.call-to-action.users') ?></span>
                            </div>
                            <div class="pattern-dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="team section">
        <div class="container section-title">
            <h2><?= lang('AboutUs.team.title') ?></h2>
            <p><?= lang('AboutUs.team.description') ?></p>
        </div>
        <div class="container">
            <div class="team-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">{"loop":true,"speed":800,"autoplay":{"delay":5000},"slidesPerView":1,"spaceBetween":30,"pagination":{"el":".swiper-pagination","type":"bullets","clickable":true},"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev"},"breakpoints":{"576":{"slidesPerView":2},"992":{"slidesPerView":3},"1200":{"slidesPerView":4}}}</script>
                <div class="swiper-wrapper">
                    <?php foreach ($teamMembers as $slug => $member): ?>
                        <?php $socials = $member['socials'] ?? $defaultSocials; ?>
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-image">
                                    <img src="<?= base_url('assets/img/website/' . $member['image']) ?>" class="img-fluid" alt="" loading="lazy">
                                    <div class="team-overlay">
                                        <div class="social-links">
                                            <?php foreach ($socials as $icon => $url): ?>
                                                <?php if (! empty($url)): ?>
                                                    <a href="<?= esc($url, 'attr') ?>"><i class="bi bi-<?= esc($icon, 'attr') ?>"></i></a>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3><?= lang('AboutUs.team.members.' . $slug . '.name') ?></h3>
                                    <span><?= lang('AboutUs.team.members.' . $slug . '.role') ?></span>
                                    <p><?= lang('AboutUs.team.members.' . $slug . '.bio') ?></p>
                                </div>
                            </div><!-- End Team Card -->
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev" aria-label="<?= lang('AboutUs.team.previous-slide') ?>"></div>
                <div class="swiper-button-next" aria-label="<?= lang('AboutUs.team.next-slide') ?>"></div>
            </div>
        </div>
    </section>
<?php $this->endSection() ?>