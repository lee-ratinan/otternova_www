<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Meta.page-title.' . $slug) ?> | <?= lang('Meta.site-title') ?></title>
    <meta name="description" content="<?= lang('Meta.description.' . $slug) ?>">
    <meta name="keywords" content="<?= lang('Meta.keywords.' . $slug) ?>">
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/logo.webp') ?>" rel="icon">
    <link href="<?= base_url('assets/img/logo.webp') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <?php if ('en-US' == $locale): ?>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php elseif ('th' == $locale): ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Thai:wght@100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php endif; ?>
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
    <!-- =======================================================
    * Template Name: Passion
    * Template URL: https://bootstrapmade.com/passion-bootstrap-template/
    * Updated: Jul 21 2025 with Bootstrap v5.3.7
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <script>
        function applySystemTheme(e) {
            const isDark = e.matches;
            document.documentElement.setAttribute('data-theme', isDark ? 'dark' : 'light');
        }
        const colorSchemeQuery = window.matchMedia('(prefers-color-scheme: dark)');
        applySystemTheme(colorSchemeQuery);
        colorSchemeQuery.addEventListener('change', applySystemTheme);
    </script>
</head>
<body class="index-page lang-<?= $locale ?>">
<header id="header" class="header fixed-top">
    <div class="topbar d-flex align-items-center dark-background">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?= getenv('OTTER_EMAIL') ?>"><?= getenv('OTTER_EMAIL') ?></a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span><?= formatPhoneNumber(getenv('OTTER_PHONE')) ?></span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <?php
                $social = [
                    'twitter-x' => getenv('OTTER_TWITTER'),
                    'facebook'  => getenv('OTTER_FACEBOOK'),
                    'instagram' => getenv('OTTER_INSTAGRAM'),
                    'linkedin'  => getenv('OTTER_LINKEDIN'),
                ];
                foreach ($social as $key => $value) {
                    if (!empty($value)) {
                        echo '<a href="' . $value . '" class="' . $key . '"><i class="bi bi-' . $key . '"></i></a>';
                    }
                }
                ?>
            </div>
        </div>
    </div><!-- End Top Bar -->
    <div class="branding d-flex align-items-cente">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="<?= base_url($locale . '/home') ?>" class="logo d-flex align-items-center">
                <img src="<?= base_url('assets/img/logo-dark.webp') ?>" alt="<?= lang('Meta.site-title') ?>">
                <h1 class="sitename"><?= lang('Meta.site-title') ?></h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="<?= base_url($locale . '/home') ?>" <?= ('home' == $slug ? 'class="active"' : '') ?>><?= lang('Meta.page-title.home') ?></a></li>
                    <li><a href="<?= base_url($locale . '/solutions') ?>" <?= ('solutions' == $slug ? 'class="active"' : '') ?>><?= lang('Meta.page-title.solutions') ?></a></li>
                    <li><a href="<?= base_url($locale . '/pricing') ?>" <?= ('pricing' == $slug ? 'class="active"' : '') ?>><?= lang('Meta.page-title.pricing') ?></a></li>
                    <li><a href="<?= base_url($locale . '/about-us') ?>" <?= ('about-us' == $slug ? 'class="active"' : '') ?>><?= lang('Meta.page-title.about-us') ?></a></li>
                    <li><a href="<?= base_url($locale . '/contact') ?>" <?= ('contact' == $slug ? 'class="active"' : '') ?>><?= lang('Meta.page-title.contact') ?></a></li>
                    <li><a href="<?= base_url($locale . '/locale') ?>" <?= ('locale' == $slug ? 'class="active"' : '') ?>><?= lang('Meta.change-language') ?></a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>
</header>
<main class="main">
    <?= $this->renderSection('content') ?>
</main>
<footer id="footer" class="footer position-relative dark-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="<?= base_url($locale . '/home') ?>" class="logo d-flex align-items-center">
                    <span class="sitename"><?= lang('Meta.site-title') ?></span>
                </a>
                <p><?= lang('Meta.site-footer-description') ?></p>
                <div class="social-links d-flex mt-4">
                    <?php
                    foreach ($social as $key => $value) {
                        if (!empty($value)) {
                            echo '<a href="' . $value . '" class="' . $key . '"><i class="bi bi-' . $key . '"></i></a>';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-2 col-6 footer-links">
                <h4><?= lang('Meta.useful-links') ?></h4>
                <ul>
                    <li><a href="<?= base_url($locale . '/home') ?>"><?= lang('Meta.page-title.home') ?></a></li>
                    <li><a href="<?= base_url($locale . '/solutions') ?>"><?= lang('Meta.page-title.solutions') ?></a></li>
                    <li><a href="<?= base_url($locale . '/pricing') ?>"><?= lang('Meta.page-title.pricing') ?></a></li>
                    <li><a href="<?= base_url($locale . '/about-us') ?>"><?= lang('Meta.page-title.about-us') ?></a></li>
                    <li><a href="<?= base_url($locale . '/contact') ?>"><?= lang('Meta.page-title.contact') ?></a></li>
                    <li><a href="<?= base_url($locale . '/locale') ?>"><?= lang('Meta.change-language') ?></a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-6 footer-links">
            </div>
            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4><?= lang('Meta.page-title.contact') ?></h4>
                <p><i class="bi bi-phone"></i> <span><?= formatPhoneNumber(getenv('OTTER_PHONE')) ?></span></p>
                <p><i class="bi bi-envelope"></i> <span><a href="mailto:<?= getenv('OTTER_EMAIL') ?>"><?= getenv('OTTER_EMAIL') ?></a></span></p>
            </div>
        </div>
    </div>
    <div class="container copyright text-center mt-4">
        <p>©2026 <span>Copyright</span> <strong class="px-1 sitename"><?= lang('Meta.site-title') ?></strong> <span>All Rights Reserved</span></p>
    </div>

</footer>
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Preloader -->
<div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div>
<!-- Vendor JS Files -->
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
<script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
<!-- Main JS File -->
<script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>