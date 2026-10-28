<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Coming Soon | OtterNova</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/logo.webp') ?>" rel="icon">
    <link href="<?= base_url('assets/img/logo.webp') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if ('en-US' == $locale): ?>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php elseif ('th' == $locale): ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Thai:wght@100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php endif; ?>
    <!-- CSS -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
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
    <style>
        body, .container, .section {
            background-color: #111111 !important;
        }
        .under-construction-img {
            max-height: 60vh;
            mask-image: linear-gradient(to right, transparent, white 20%, white 80%, transparent);
        }
        [data-theme="dark"] .under-construction-img {
            max-height: 60vh;
            mask-image: linear-gradient(to right, transparent, black 20%, black 80%, transparent);
        }
    </style>
</head>
<body class="index-page lang-<?= $locale ?>">
    <div class="container">
        <section class="section text-center align-items-center justify-content-center mt-5 p-5">
            <img src="<?= base_url('assets/img/website/coming-soon.webp')?>" alt="Coming Soon" class="img-fluid under-construction-img" />
            <h1 class="pt-5"><?= lang('Meta.coming-soon.title') ?></h1>
            <h2><?= lang('Meta.coming-soon.paragraph') ?></h2>
        </section>
    </div>
</body>
</html>