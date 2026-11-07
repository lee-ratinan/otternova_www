<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{

    /**
     * Home page
     * @return string
     */
    public function index(): string
    {
        $locale = $this->request->getLocale();
        $data   = [
            'locale' => $locale,
            'slug'   => 'home'
        ];
        return view('home', $data);
    }

    /**
     * Under construction page
     * @return string
     */
    public function underConstruction(): string
    {
        $locale = $this->request->getLocale();
        $data   = [
            'locale' => $locale
        ];
        return view('underConstruction', $data);
    }

    /**
     * Solutions page
     * @return string
     */
    public function solutions(): string
    {
        $locale = $this->request->getLocale();
        $data   = [
            'locale' => $locale,
            'slug'   => 'solutions'
        ];
        return view('solutions', $data);
    }

    /**
     * Pricing page
     * @param string $countryCode
     * @return string
     */
    public function pricing(string $countryCode = ''): string
    {
        $locale = $this->request->getLocale();
        $uri    = 'pricing/' . $countryCode;
        // Only allow Thailand pricing for now
        $countryCode = 'TH';
//        if (empty($countryCode)) {
//            $countryCode = 'ZZ';
//            if ('th' == $locale) {
//                $countryCode = 'TH';
//            }
//        }
        $pricing = [
            'ZZ' => [
                'slug'         => 'global',
                'currencyCode' => '<small>US</small>$',
                'iso4217'      => 'USD',
                'free'         => [0, 0],
                'boost'        => [12, 120],
                'velocity'     => [24, 240],
                'quantum'      => [48, 480],
                'nova'         => [-1, -1],
            ],
            'TH' => [
                'slug'         => 'thailand',
                'currencyCode' => '฿',
                'iso4217'      => 'THB',
                'free'         => [0, 0],
                'boost'        => [319, 3190],
                'velocity'     => [649, 6490],
                'quantum'      => [1299, 12990],
//                'nova'         => [-1, -1],
            ]
        ];
        /**
         * Plans shown on the pricing page, in display order.
         *
         * To add, remove or change a plan, edit this array (and the matching
         * 'plans.<slug>' block in app/Language/<locale>/Pricing.php).
         *
         *  - The array key is the slug used to build the language keys
         *    (name, description, features.<feature-key>).
         *  - 'icon'        : Bootstrap Icons name, without the "bi-" prefix
         *  - 'price'       : monthly price (number only; the currency symbol and
         *                    "/month" label come from the language file)
         *  - 'recommended' : true shows the "Recommended" badge and the featured style
         *  - 'features'    : feature keys, in display order. Each one needs a matching
         *                    entry under 'plans.<slug>.features' in the language file.
         *
         * This array can be moved to the controller or a config file and passed in
         * as $plans without changing the markup below.
         */
        $plans   = [
            'boost'    => [
                'icon'        => 'star',
                'price'       => $pricing[$countryCode]['boost'],
                'recommended' => false
            ],
            'velocity' => [
                'icon'        => 'stars',
                'price'       => $pricing[$countryCode]['velocity'],
                'recommended' => true
            ],
            'quantum'  => [
                'icon'        => 'star-fill',
                'price'       => $pricing[$countryCode]['quantum'],
                'recommended' => false
            ],
            'free'     => [
                'icon'        => 'piggy-bank',
                'price'       => $pricing[$countryCode]['free'],
                'recommended' => false
            ],
//            'nova' => [
//                'icon'        => 'fire',
//                'price'       => $pricing[$countryCode]['nova'],
//                'recommended' => false
//            ],
        ];
        $limits  = [
            'keys' => [
                config('Config\PlanLimits')::STORES                  => '<i class="bi bi-shop"></i>',
                config('Config\PlanLimits')::EMPLOYEES               => '<i class="bi bi-people"></i>',
                config('Config\PlanLimits')::PRODUCTS                => '<i class="bi bi-box"></i>',
                config('Config\PlanLimits')::SERVICES                => '<i class="bi bi-stars"></i>',
                config('Config\PlanLimits')::VARIANTS                => '<i class="bi bi-hand-index-thumb"></i>',
                config('Config\PlanLimits')::WEBPAGES                => '<i class="bi bi-file-earmark"></i>',
                config('Config\PlanLimits')::IMAGE_PER_ARTIFACT      => '<i class="bi bi-images"></i>',
                config('Config\PlanLimits')::IMAGE_PER_WEBPAGE       => '<i class="bi bi-images"></i>',
                config('Config\PlanLimits')::AI_CREDIT_TEXT_ATTEMPTS => '<i class="bi bi-cpu-fill bi-ai-gradient"></i>',
                config('Config\PlanLimits')::AI_CREDIT_IMG_ATTEMPTS  => '<i class="bi bi-cpu-fill bi-ai-gradient"></i>',
                config('Config\PlanLimits')::PRIVATE_SESSION_BOOKING => '<i class="bi bi-person-lock"></i>',
                config('Config\PlanLimits')::SESSION_REGISTRATION    => '<i class="bi bi-globe"></i>',
            ],
            'data' => [
                'free'     => config('Config\PlanLimits')->forPlan('free'),
                'boost'    => config('Config\PlanLimits')->forPlan('boost'),
                'velocity' => config('Config\PlanLimits')->forPlan('velocity'),
                'quantum'  => config('Config\PlanLimits')->forPlan('quantum'),
            ],
        ];
        $data    = [
            'locale'      => $locale,
            'countryCode' => $countryCode,
            'slug'        => 'pricing',
            'uri'         => $uri,
            'pricing'     => $pricing,
            'plans'       => $plans,
            'limits'      => $limits,
        ];
        return view('pricing', $data);
    }

    /**
     * Contact us page
     * @return string
     */
    public function contact(): string
    {
        $locale = $this->request->getLocale();
        $data   = [
            'locale'    => $locale,
            'slug'      => 'contact',
            'formToken' => $this->contactFormToken(),
        ];
        return view('contact', $data);
    }

    /**
     * A single-use token from the API for one submission of the contact form; '' when the API cannot be reached,
     * in which case the submission is refused by the API and the visitor is asked to reload the page.
     * The API refuses a token sent back within a few seconds, so it is fetched when the form is shown.
     * @return string
     */
    private function contactFormToken(): string
    {
        try {
            $response = service('curlrequest')->get(getenv('CONTACT_FORM_TOKEN_URL'), [
                'timeout'     => 5,
                'http_errors' => false,
                'headers'     => ['Accept' => 'application/json'],
            ]);
            $body = json_decode($response->getBody(), true);
            if ($response->getStatusCode() === 200 && is_string($body['data']['form_token'] ?? null)) {
                return $body['data']['form_token'];
            }
            log_message('error', 'Contact form token not issued: HTTP ' . $response->getStatusCode());
        } catch (\Exception $e) {
            log_message('error', 'Contact form token not issued: ' . $e->getMessage());
        }
        return '';
    }

    /**
     * About us page
     * @return string
     */
    public function aboutUs(): string
    {
        /**
         * Team members shown in the carousel.
         *
         * To add or remove a member, edit this array (and add/remove the matching
         * 'team.members.<slug>' block in app/Language/<locale>/AboutUs.php).
         *
         *  - The array key is the slug used to build the language keys
         *    (name, role, bio).
         *  - 'image'   : file name inside assets/img/person/
         *  - 'socials' : optional. Bootstrap Icons name => URL. Falls back to
         *                $defaultSocials. Entries with an empty URL are not rendered.
         *
         * This array can be moved to the controller or a config file and passed in
         * as $teamMembers without changing the markup below.
         */
        $locale = $this->request->getLocale();
        $data   = [
            'locale'         => $locale,
            'slug'           => 'about-us',
            'defaultSocials' => [],
            'teamMembers'    => [
                'eikin' => [
                    'image'   => 'leadership-eikin.webp',
                    'socials' => [
                        'linkedin'  => 'https://www.linkedin.com/in/ratinanlee',
                        'instagram' => 'https://www.instagram.com/ratinanlee/', 'globe' => 'https://lee.ratinan.com'
                    ]
                ],
                'jate'  => [
                    'image' => 'leadership-jate.webp'
                ],
                'fauzi' => [
                    'image' => 'leadership-fauzi.webp'
                ],
                'tat'   => [
                    'image' => 'leadership-tat.webp'
                ]
            ]
        ];
        return view('aboutUs', $data);
    }

    /**
     * Locale page
     * @return string
     */
    public function locale(): string
    {
        $locale = $this->request->getLocale();
        $data   = [
            'locale'    => $locale,
            'slug'      => 'locale',
            'supported' => config('App')->supportedLocales ?? ['en'],
            'helper'    => listSupportedLanguages()
        ];
        return view('locale', $data);
    }

    /**
     * Terms page
     * @return string
     */
    public function termsOfService(): string
    {
        $locale = $this->request->getLocale();
        $data   = [
            'locale' => $locale,
            'slug'   => 'terms-of-service',
        ];
        return view('termsOfService', $data);
    }

    /**
     * Privacy policy page
     * @return string
     */
    public function privacyPolicy(): string
    {
        $locale = $this->request->getLocale();
        $data   = [
            'locale' => $locale,
            'slug'   => 'privacy-policy',
        ];
        return view('privacyPolicy', $data);
    }

    public function siteMap(): ResponseInterface
    {
        $languages  = listSupportedLanguages();
        $main_pages = [
            ['/', '2026-10-28', 'monthly', '1.0'],
            ['/home', '2026-10-28', 'monthly', '1.0'],
            ['/solutions', '2026-10-28', 'monthly', '0.9'],
            ['/pricing', '2026-10-28', 'monthly', '0.9'],
            ['/pricing/TH', '2026-10-28', 'monthly', '0.9'],
            ['/contact', '2026-10-28', 'monthly', '0.8'],
            ['/about-us', '2026-10-28', 'monthly', '0.8'],
            ['/locale', '2026-10-28', 'monthly', '0.7'],
            ['/terms-of-service', '2026-10-28', 'monthly', '0.5'],
            ['/privacy-policy', '2026-10-28', 'monthly', '0.5']
        ];
        $xml        = [];
        foreach ($languages as $lang => $value) {
            foreach ($main_pages as $page) {
                $xml[] = [
                    'loc'        => base_url($lang . $page[0]),
                    'lastmod'    => $page[1],
                    'changefreq' => $page[2],
                    'priority'   => $page[3],
                ];
            }
        }
        $final_xml = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">';
        foreach ($xml as $item) {
            $final_xml .= '<url>';
            foreach ($item as $key => $value) {
                $final_xml .= '<' . $key . '>' . $value . '</' . $key . '>';
            }
            $final_xml .= '</url>';
        }
        $final_xml .= '</urlset>';
        return $this->response->setXML($final_xml);
    }

    /**
     * Submit contact form to the API (POST /v1/contact), which stores it and runs the spam and bot checks.
     * Answers 'OK' on success, otherwise the message to show, as assets/vendor/php-email-form/validate.js expects.
     * @return ResponseInterface
     */
    public function submitContactForm(): ResponseInterface
    {
        $locale = (string) $this->request->getPost('locale');
        if (in_array($locale, config('App')->supportedLocales, true)) {
            $this->request->setLocale($locale);
        }
        $subject = (string) $this->request->getPost('subject');
        if (in_array($subject, ['general', 'technical', 'sales'], true)) {
            $subject = lang('Contact.form.subject-options.' . $subject);
        }
        $payload = [
            'name'       => (string) $this->request->getPost('name'),
            'email'      => (string) $this->request->getPost('email'),
            'phone'      => (string) $this->request->getPost('phone'),
            'subject'    => $subject,
            'message'    => (string) $this->request->getPost('message'),
            'locale'     => $locale,
            'form_token' => (string) $this->request->getPost('form_token'),
            'website'    => (string) $this->request->getPost('website'), // the honeypot; the API decides what to do
        ];
        try {
            $response = service('curlrequest')->post(getenv('CONTACT_FORM_SUBMISSION_URL'), [
                'json'        => $payload,
                'timeout'     => 10,
                'http_errors' => false,
                'headers'     => [
                    'Accept'          => 'application/json',
                    // the API counts messages per visitor, so it needs the visitor's address, not this server's;
                    // it trusts this header only from the addresses in its PROXY_IPS
                    'X-Forwarded-For' => $this->request->getIPAddress(),
                    'User-Agent'      => (string) $this->request->getUserAgent(),
                ],
            ]);
        } catch (\Exception $e) {
            log_message('error', 'Contact form not sent to the API: ' . $e->getMessage());
            return $this->response->setBody(lang('Contact.form.error'));
        }
        $status = $response->getStatusCode();
        if ($status === 201) {
            return $this->response->setBody('OK');
        }
        $body = json_decode($response->getBody(), true);
        if ($status >= 500 || ! is_array($body)) {
            log_message('error', "Contact form refused by the API: HTTP $status");
            return $this->response->setBody(lang('Contact.form.error'));
        }
        // 400 (form expired), 422 (fields to fix) or 429 (too many): the API's message is meant for the visitor
        $lines = array_merge([$body['message'] ?? lang('Contact.form.error')], array_values($body['errors'] ?? []));
        return $this->response->setBody(esc(implode(' ', $lines)));
    }

    /**
     * Not found page
     * @return ResponseInterface|string
     */
    public function show404(): ResponseInterface|string
    {
        $method       = $this->request->getMethod();
        if ('post' == $method) {
            return $this->response->setStatusCode(404)->setJSON(json_encode(['status' => 404, 'message' => 'Page not found.']));
        }
        return view('_404');
    }
}
