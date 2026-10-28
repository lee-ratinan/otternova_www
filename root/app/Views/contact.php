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
    <section id="contact" class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="contact-form-container">
                        <h3><?= lang('Contact.form.title') ?></h3>
                        <p><?= lang('Contact.form.subtitle') ?></p>
                        <form action="<?= base_url('submit-contact-form') ?>" method="post" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name"></label><input type="text" name="name" class="form-control" id="name" placeholder="<?= lang('Contact.form.name') ?>" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="email"></label><input type="email" class="form-control" name="email" id="email" placeholder="<?= lang('Contact.form.email') ?>" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="phone"></label><input type="tel" class="form-control" name="phone" id="phone" placeholder="<?= lang('Contact.form.phone') ?>" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="subject"></label>
                                    <select id="subject" name="subject" class="form-control" required>
                                        <option disabled><?= lang('Contact.form.subject-options.select') ?></option>
                                        <option value="general"><?= lang('Contact.form.subject-options.general') ?></option>
                                        <option value="technical"><?= lang('Contact.form.subject-options.technical') ?></option>
                                        <option value="sales"><?= lang('Contact.form.subject-options.sales') ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message"></label>
                                <textarea class="form-control" name="message" id="message" rows="5" placeholder="<?= lang('Contact.form.message') ?>" required></textarea>
                            </div>
                            <input type="hidden" name="locale" value="<?= $locale ?>">
                            <div class="my-3">
                                <div class="loading"><?= lang('Contact.form.loading') ?></div>
                                <div class="error-message"></div>
                                <div class="sent-message"><?= lang('Contact.form.complete') ?></div>
                            </div>
                            <div class="form-submit">
                                <button class="w-100" type="submit"><?= lang('Contact.form.send') ?></button>
                            </div>
                            <p class="text-center mt-3"><?= lang('Contact.form.disclaimer') ?></p>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="contact-cards-container">
                        <div class="contact-card w-100">
                            <div class="icon-box">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h4><?= lang('Contact.info.email') ?></h4>
                                <p><?= getenv('OTTER_EMAIL') ?></p>
                            </div>
                        </div>
                        <div class="contact-card w-100">
                            <div class="icon-box">
                                <i class="bi bi-clock"></i>
                            </div>
                            <div class="contact-text">
                                <h4><?= lang('Contact.info.open') ?></h4>
                                <p><?= lang('Contact.info.open-detail') ?></p>
                            </div>
                        </div>
                        <div class="contact-card w-100">
                            <div class="icon-box">
                                <i class="bi bi-share"></i>
                            </div>
                            <div class="contact-text">
                                <h4><?= lang('Contact.info.social-media') ?></h4>
                                <?php
                                $social = listOtterSocialMedia();
                                foreach ($social as $key => $value) {
                                    if (!empty($value)) {
                                        echo '<a href="' . $value . '" class="' . $key . '"><i class="bi bi-' . $key . ' me-3"></i> ' . lang('Contact.social-media.' . $key) . '</a><br/>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="contact-card w-100">
                            <div class="display-6"><i class="bi bi-shield-check"></i></div>
                            <p>
                                <b><?= lang('Contact.text.shield-1') ?></b><br/>
                                <?= lang('Contact.text.shield-2') ?>
                            </p>
                        </div>
                        <div class="contact-card w-100">
                            <div class="display-6"><i class="bi bi-clock-history"></i></div>
                            <p>
                                <b><?= lang('Contact.text.clock-1') ?></b><br/>
                                <?= lang('Contact.text.clock-2') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
<?php $this->endSection() ?>