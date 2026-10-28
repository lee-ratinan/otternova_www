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
    <section id="pricing" class="pricing section">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <?php foreach ($plans as $planSlug => $plan): ?>
                    <!-- <?= esc($planSlug) ?> plan -->
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-item<?= $plan['recommended'] ? ' featured' : '' ?>">
                            <?php if ($plan['recommended']): ?>
                                <div class="pricing-badge"><?= lang('Pricing.recommended') ?></div>
                            <?php endif; ?>
                            <div class="pricing-icon">
                                <i class="bi bi-<?= esc($plan['icon'], 'attr') ?>"></i>
                            </div>
                            <h3><?= lang('Pricing.plans.' . $planSlug . '.name') ?></h3>
                            <?php if ('free' != $planSlug) : ?>
                            <div class="price">
                                <span class="currency"><?= $pricing[$countryCode]['currencyCode'] ?></span><?= number_format($plan['price'][0]) ?><span class="period"><?= lang('Pricing.per-month') ?></span>
                            </div>
                            <?php
                            $fullYearPricing = $plan['price'][0] * 12;
                            $saving          = ($fullYearPricing - $plan['price'][1]) / $fullYearPricing * 100;
                            ?>
                            <h4><?= lang('Pricing.or') ?> <?= $pricing[$countryCode]['currencyCode'] ?><?= number_format($plan['price'][1]) ?><?= lang('Pricing.per-year') ?></h4>
                            <p class="description"><?= lang('Pricing.saving', [$pricing[$countryCode]['currencyCode'], number_format($fullYearPricing), number_format($saving, 2)]) ?></p>
                            <?php else: ?>
                                <div class="price">
                                    <span class="currency"><?= $pricing[$countryCode]['currencyCode'] ?></span>0<span class="period"><?= lang('Pricing.forever') ?></span>
                                </div>
                            <?php endif; ?>
                            <p class="description"><?= lang('Pricing.plans.' . $planSlug . '.description') ?></p>
                            <ul class="features-list">
                                <?php foreach (lang('Pricing.plans.' . $planSlug . '.features') as $feature): ?>
                                    <li><i class="bi bi-check2"></i> <?= $feature ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="<?= getenv('LINK_CLIENT') ?>" class="btn-pricing"><?= lang('Pricing.buy-now') ?></a>
                        </div>
                    </div><!-- End <?= esc($planSlug) ?> plan -->
                <?php endforeach; ?>
            </div>
            <div class="row mt-5 g-3 justify-content-center">
                <div class="col text-center">
                    <p><?= lang('Pricing.check-other-country') ?></p>
                    <?php foreach ($pricing as $keyCode => $values) : ?>
                        <?php
                        if ($keyCode == $countryCode) { continue; }
                        ?>
                        <a class="btn btn-link mx-5 btn-minimal" href="<?= base_url($locale . '/pricing/' . $keyCode) ?>">
                            <?php if ('XX' == $keyCode) : ?>
                                <i class="bi bi-globe me-3"></i>
                            <?php else: ?>
                                <span class="fi fi-<?= strtolower($keyCode) ?> me-3"></span>
                            <?php endif; ?>
                            <?= lang('Pricing.plan-country.' . $values['slug']) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php $this->endSection() ?>