<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <style>
        #target::after {content: '|';animation: blink 0.7s infinite;}
        @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }
    </style>
    <div class="page-title dark-background"
         style="background-image: url(<?= base_url('assets/img/website/hero-img.webp') ?>);">
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
    <section class="section light-background">
        <div class="container">
            <div class="row justify-content-center g-3">
                <div class="col-12 text-center">
                    <?php foreach ($supported as $languageCode) : ?>
                        <a class="btn btn-link mx-5 btn-minimal rounded-0 mb-3" href="<?= base_url($languageCode . '/home') ?>">
                            <?php
                            $flag = substr($languageCode, -2);
                            echo '<i class="fi fi-' . strtolower($flag) . ' me-3"></i>';
                            ?>
                            <?= $helper[$languageCode]; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="col-12 p-5 text-center">
                    <h1 id="typing-target" data-text="More languages coming soon!;近日、対応言語がさらに増えます！;Lebih banyak bahasa segera hadir!;即將支援更多語言！;Lebih banyak pilihan bahasa bakal menyusul!"></h1>
                </div>
            </div>
        </div>
    </section>
    <script src="<?= base_url('assets/js/typeText.js') ?>"></script>
<?php $this->endSection() ?>