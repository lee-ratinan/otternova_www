<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <div class="page-title dark-background" style="background-image: url(<?= base_url('assets/img/website/hero-img.webp') ?>);">
        <div class="container position-relative" data-aos="fade-left" data-aos-duration="800">
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
                <?php $i = 1; ?>
                <?php foreach ($plans as $planSlug => $plan): ?>
                    <!-- <?= esc($planSlug) ?> plan -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="<?= $i * 400 ?>">
                        <?php $i++; ?>
                        <div class="pricing-item<?= $plan['recommended'] ? ' featured' : '' ?>">
                            <?php if ($plan['recommended']): ?>
                                <div class="pricing-badge"><?= lang('Pricing.recommended') ?></div>
                            <?php endif; ?>
                            <div class="pricing-icon">
                                <i class="bi bi-<?= esc($plan['icon'], 'attr') ?>"></i>
                            </div>
                            <h3><?= lang('Pricing.plans.' . $planSlug . '.name') ?></h3>
                            <?php if (in_array($planSlug, ['boost', 'velocity', 'quantum'])): ?>
                            <div class="price">
                                <span class="currency"><?= $pricing[$countryCode]['currencyCode'] ?></span><?= number_format($plan['price'][0]) ?><span class="period"><?= lang('Pricing.per-month') ?></span>
                            </div>
                            <?php
                            $fullYearPricing = $plan['price'][0] * 12;
                            $saving          = ($fullYearPricing - $plan['price'][1]) / $fullYearPricing * 100;
                            ?>
                            <h4><?= lang('Pricing.or') ?> <?= $pricing[$countryCode]['currencyCode'] ?><?= number_format($plan['price'][1]) ?><?= lang('Pricing.per-year') ?></h4>
                            <p class="description"><?= lang('Pricing.saving', [$pricing[$countryCode]['currencyCode'], number_format($fullYearPricing), number_format($saving, 2)]) ?></p>
                            <?php elseif ('nova' == $planSlug): ?>
                                <div class="price">
                                    <span class="currency">
                                        <?= $pricing[$countryCode]['currencyCode'] ?>
                                    </span>
                                    ?
                                    <span class="period"><?= lang('Pricing.contact-sales') ?></span>
                                </div>
                            <?php else: ?>
                                <div class="price">
                                    <span class="currency"><?= $pricing[$countryCode]['currencyCode'] ?></span>0<span class="period"><?= lang('Pricing.forever') ?></span>
                                </div>
                            <?php endif; ?>
                            <p class="description"><?= lang('Pricing.plans.' . $planSlug . '.description') ?></p>
                            <?php if ('nova' == $planSlug): ?>
                                <a class="btn-pricing" href="<?= base_url($locale . '/contact') ?>"><?= lang('Contact.form.title') ?></a>
                            <?php else: ?>
                                <a href="<?= getenv('LINK_CLIENT') ?>" class="btn-pricing"><?= lang('Pricing.buy-now') ?></a>
                            <?php endif; ?>
                        </div>
                    </div><!-- End <?= esc($planSlug) ?> plan -->
                <?php endforeach; ?>
                <div class="col-12" data-aos="fade-up" data-aos-duration="800">
                    <p class="text-center">* <?= lang('Pricing.tax-info') ?></p>
                </div>
            </div>
            <div class="row mt-5 g-3 justify-content-center">
                <div class="col-12 p-5 text-center" data-aos="fade-left" data-aos-duration="800">
                    <h1 id="typing-target" data-text="More regional pricing coming soon!;各国向けの料金プランを近日公開！;Harga khusus untuk negara Anda akan segera tersedia!;即將推出各地區專屬價格！;Harga mengikut negara akan datang tidak lama lagi!"></h1>
                </div>
                <div class="col col-lg-10 col-xl-8">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-pricing" data-aos="fade-right" data-aos-duration="800">
                            <thead>
                            <tr>
                                <th class="text-center" style="min-width:300px;"><?= lang('Pricing.features.name') ?></th>
                                <?php foreach ($plans as $planSlug => $data): ?>
                                    <th class="text-center" style="min-width:100px;">
                                        <i class="bi bi-<?= $data['icon'] ?>"></i><br/>
                                        <?= lang('Pricing.plans.' . $planSlug . '.name') ?>
                                    </th>
                                <?php endforeach; ?>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th colspan="<?= count($limits['keys']) + 1 ?>" class="text-center">
                                    <b><?= lang('Pricing.price') ?></b>
                                </th>
                            </tr>
                            <tr>
                                <td><?= lang('Pricing.price-per-month') ?></td>
                                <?php foreach ($plans as $planSlug => $data): ?>
                                    <td class="text-center"><?= formatCurrency($data['price'][0], $pricing[$countryCode]['iso4217']) ?></td>
                                <?php endforeach; ?>
                            </tr>
                            <tr>
                                <td><?= lang('Pricing.price-per-year') ?></td>
                                <?php foreach ($plans as $planSlug => $data): ?>
                                    <td class="text-center"><?= formatCurrency($data['price'][1], $pricing[$countryCode]['iso4217']) ?></td>
                                <?php endforeach; ?>
                            </tr>
                            <tr>
                                <th colspan="<?= count($limits['keys']) + 1 ?>" class="text-center">
                                    <b><?= lang('Pricing.features.limits') ?></b>
                                </th>
                            </tr>
                            <?php foreach ($limits['keys'] as $feature_key => $icon): ?>
                            <tr>
                                <td><?= $icon  . ' &nbsp; ' . lang('Pricing.features.' . $feature_key) ?></td>
                                <?php foreach ($plans as $planSlug => $dummy): ?>
                                    <td class="text-center">
                                        <?php if (!$limits['data'][$planSlug][$feature_key]) : ?>
                                            <i class="bi bi-ban text-danger"></i>
                                        <?php else : ?>
                                            <?= $limits['data'][$planSlug][$feature_key] ?>
                                        <?php endif; ?>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 p-5 text-center payment-methods" data-aos="fade-up" data-aos-duration="800">
                    <h6 class="mb-3"><?= lang('Pricing.payment-methods.title') ?></h6>
                    <?= lang('Pricing.payment-methods.bank-transfer') ?>,
                    <img src="<?= base_url('assets/img/payment/promptpay.webp') ?>" alt="<?= lang('Pricing.payment-methods.promptpay') ?>" title="<?= lang('Pricing.payment-methods.promptpay') ?>" />
                    <?= lang('Pricing.payment-methods.promptpay') ?>
                </div>
            </div>
            <div class="row mt-5 g-3 justify-content-center d-none">
                <div class="col text-center">
                    <p><?= lang('Pricing.check-other-country') ?></p>
                    <?php foreach ($pricing as $keyCode => $values) : ?>
                        <?php
                        if ($keyCode == $countryCode) { continue; }
                        ?>
                        <a class="btn btn-link rounded-0 mx-5 btn-minimal" href="<?= base_url($locale . '/pricing/' . $keyCode) ?>">
                            <?php if ('ZZ' == $keyCode) : ?>
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
    <script src="<?= base_url('assets/js/typeText.js') ?>"></script>
<?php $this->endSection() ?>