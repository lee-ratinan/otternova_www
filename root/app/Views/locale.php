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
                        <a class="btn btn-link mx-5 btn-minimal" href="<?= base_url($languageCode . '/home') ?>">
                            <?php
                            $flag = substr($languageCode, -2);
                            echo '<i class="fi fi-' . strtolower($flag) . ' me-3"></i>';
                            ?>
                            <?= $helper[$languageCode]; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="col-12 p-5 text-center">
                    <h1 id="target" data-text="We promise we will serve you in more languages soon.;今後、より多くの言語でサービスを提供できるよう努めてまいります。;我們承諾，不久後將以更多語言為您服務。;Kami berjanji akan memberikan perkhidmatan kepada anda dalam lebih banyak bahasa tidak lama lagi."></h1>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const target = document.querySelector("#target");

            if (!target) return;

            // Get text from data-text attribute and split by semicolon
            const rawData = target.getAttribute("data-text") || "";
            const texts = rawData.split(";").map(t => t.trim());

            let textIndex = 0;
            const typingSpeed = 100; // Speed in milliseconds per character
            const pauseTime = 2000;   // Wait time after finishing a text (2 seconds)

            function typeText() {
                const currentText = texts[textIndex];
                let charIndex = 0;
                target.textContent = ""; // Clear existing text

                function typeChar() {
                    if (charIndex < currentText.length) {
                        target.textContent += currentText.charAt(charIndex);
                        charIndex++;
                        setTimeout(typeChar, typingSpeed);
                    } else {
                        // Wait 2 seconds before moving to the next text
                        setTimeout(() => {
                            textIndex = (textIndex + 1) % texts.length; // Loop back to start if at the end
                            typeText();
                        }, pauseTime);
                    }
                }

                typeChar();
            }

            // Start the animation if there is text
            if (texts.length > 0 && texts[0] !== "") {
                typeText();
            }
        });
    </script>
<?php $this->endSection() ?>