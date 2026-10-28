<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <div class="page-title dark-background" style="background-image: url(<?= base_url('assets/img/website/hero-img.webp') ?>);">
        <div class="container position-relative">
            <h1><?= lang('Meta.page-title.' . $slug) ?></h1>
        </div>
    </div>
    <main class="main">
        <section id="content-section" class="starter-section section mt-5">
            <div class="container aos-init aos-animate mt-5" data-aos="fade-up">
                <div class="row">
                    <div class="col col-lg-10 col-xl-8">
                        <div id="source" class="d-none"><?php include_once 'docs/generic-privacy-policy-' . strtolower($locale) . '.md'; ?></div>
                        <div id="markdown"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script>
        let source = document.getElementById('source').innerHTML;
        document.getElementById('markdown').innerHTML = marked.parse(source);
    </script>
<?php $this->endSection() ?>