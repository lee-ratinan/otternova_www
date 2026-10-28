<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= lang('Meta.page-title.' . $slug) ?> | <?= lang('Meta.site-title') ?></title>
    <meta name="description" content="<?= lang('Meta.description.' . $slug) ?>">
    <meta name="keywords" content="<?= lang('Meta.keywords.' . $slug) ?>">
    <meta name="author" content="OtterNova Team">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?= lang('Meta.page-title.' . $slug) ?> | <?= lang('Meta.site-title') ?>">
    <meta property="og:description" content="<?= lang('Meta.description.' . $slug) ?>">
    <meta property="og:image" content="<?= base_url('assets/img/otternova-greeting.webp') ?>">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:type" content="website" />
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
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/flag-icon/css/flag-icons.min.css') ?>" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
    <!-- Link Languages -->
    <?php
    $languages = listSupportedLanguages();
    $url_part  = $uri ?? $slug;
    ?>
    <?php foreach ($languages as $key => $value): ?>
        <link rel="alternate" hreflang="<?= $key ?>" href="<?= base_url($key . '/' . $url_part) ?>">
    <?php endforeach; ?>
    <link rel="alternate" hreflang="x-default" href="<?= base_url($url_part) ?>">
    <link rel="canonical" href="<?= current_url() ?>">
    <!-- =======================================================
    * Template Name: Passion
    * Template URL: https://bootstrapmade.com/passion-bootstrap-template/
    * Updated: Jul 21 2025 with Bootstrap v5.3.7
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <script>
        (function () {
            const COOKIE_NAME = 'theme';
            const COOKIE_DAYS = 365;
            const root = document.documentElement;
            const media = window.matchMedia('(prefers-color-scheme: dark)');
            const ICONS = {
                light: '<i class="bi bi-brightness-high"></i>',
                dark: '<i class="bi bi-moon"></i>',
            };
            function getCookie(name) {
                const match = document.cookie.split('; ').find((row) => row.startsWith(name + '='));
                return match ? decodeURIComponent(match.split('=')[1]) : null;
            }
            function setCookie(name, value, days) {
                const maxAge = days * 24 * 60 * 60;
                document.cookie = `${name}=${encodeURIComponent(value)}; max-age=${maxAge}; path=/; SameSite=Lax`;
            }
            function getSavedTheme() {
                const saved = getCookie(COOKIE_NAME);
                return saved === 'dark' || saved === 'light' ? saved : null;
            }
            function applyTheme(theme) {
                root.setAttribute('data-theme', theme);
                const button = document.getElementById('theme-toggle');
                if (button) {button.innerHTML = ICONS[theme];}
            }
            function getCurrentTheme() {
                return root.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
            }
            // Called by the button: toggles the mode and stores the choice in the cookie
            function toggleTheme() {
                const next = getCurrentTheme() === 'dark' ? 'light' : 'dark';
                applyTheme(next);
                setCookie(COOKIE_NAME, next, COOKIE_DAYS);
            }
            function initTheme() {
                // Cookie wins; otherwise follow the browser's preference
                applyTheme(getSavedTheme() || (media.matches ? 'dark' : 'light'));
                const button = document.getElementById('theme-toggle');
                if (button) {
                    button.addEventListener('click', toggleTheme);
                }
                // Follow live OS/browser changes only while the user hasn't chosen manually
                media.addEventListener('change', (e) => {
                    if (!getSavedTheme()) {
                        applyTheme(e.matches ? 'dark' : 'light');
                    }
                });
            }
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initTheme);
            } else {
                initTheme();
            }
        })();
    </script>
</head>
<body class="index-page lang-<?= $locale ?>">
<header id="header" class="header fixed-top">
    <div class="topbar d-flex align-items-center dark-background">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?= getenv('OTTER_EMAIL') ?>"><?= getenv('OTTER_EMAIL') ?></a></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <?php
                $social = listOtterSocialMedia();
                foreach ($social as $key => $value) {
                    if (!empty($value)) {
                        echo '<a href="' . $value . '" class="' . $key . '"><i class="bi bi-' . $key . '"></i></a>';
                    }
                }
                ?>
                <a id="theme-toggle" aria-label="<?= lang('Meta.toggle-mode') ?>" href="#"></a>
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
                    <li class="dropdown"><a href="<?= base_url($locale . '/locale') ?>"><span><?= lang('Meta.change-language') ?></span> <i class="bi bi-translate toggle-dropdown"></i></a>
                        <ul>
                            <?php
                            foreach ($languages as $key => $value) {
                                $flag = strtolower(substr($key, -2));
                                echo '<li><a href="' . base_url($key . '/home') . '">' . $value . ' <span class="fi fi-' . $flag . '"></i></a></li>';
                            }
                            ?>
                            <li><a href="<?= base_url($locale . '/locale') ?>"><?= lang('Meta.page-title.locale') ?></a></li>
                        </ul>
                    </li>
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
                <hr/>
                <p>OtterNova | ทะเบียนพาณิชย์เลขที่ XXXXXXXXXXXXX</p>
                <div>[DBD logo area]</div>
            </div>
        </div>
    </div>
    <div class="container copyright text-center mt-4">
        <p>
            <span>Copyright © 2025-<?= date('Y') ?></span> <strong class="px-1 sitename"><?= lang('Meta.site-title') ?></strong> <span>All Rights Reserved</span> |
            <a href="<?= base_url($locale . '/terms-of-service') ?>"><?= lang('Meta.page-title.terms-of-service') ?></a> | <a href="<?= base_url($locale . '/privacy-policy') ?>"><?= lang('Meta.page-title.privacy-policy') ?></a>
        </p>
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