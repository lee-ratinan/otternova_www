<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class Home extends BaseController
{

    /**
     * @param $name
     * @param $message
     * @return bool
     */
    private function isSpamSubmission ($name, $message): bool
    {
        // 1. Check for Same First & Last Name Pattern (e.g., "John John")
        // This cleans up whitespace and checks if the name repeats.
        $cleanedName = trim(preg_replace('/\s+/', ' ', $name));
        $nameParts = explode(' ', $cleanedName);
        if (count($nameParts) === 2 && strtolower($nameParts[0]) === strtolower($nameParts[1])) {
            return true;
        }
        // 2. Check for HTML link injection
        if (preg_match('/<a\s+href|\[url=/i', $message)) {
            return true;
        }
        // 3. Count URLs - If more than 2 links, flag it
        $urlCount = preg_match_all('/https?:\/\//i', $message);
        if ($urlCount > 2) {
            return true;
        }
        // 4. Spam Keywords Array (Grouped by pipes '|' for regex)
        $spamPatterns = [
            'seo|backlink|rank on google|search engine optimization|domain authority|guest post|drive traffic', // SEO
            'crypto|bitcoin|forex|trading bot|passive income|make \$\$\$|earn cash', // Financial
            'account suspended|payment declined|copyright infringement|legal action|urgent response', // Phishing
            'viagra|casino|betting|weight loss pill' // Adult/Pharma
        ];
        // Combine all groups into one regex pattern
        $masterPattern = '/' . implode('|', $spamPatterns) . '/i'; // 'i' flag makes it case-insensitive
        if (preg_match($masterPattern, $message)) {
            return true;
        }
        return false; // Looks clean!
    }

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
        return view('underConstruction');
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
    public function pricing(string $countryCode = 'TH'): string
    {
        $locale = $this->request->getLocale();
        $data   = [
            'locale'      => $locale,
            'countryCode' => $countryCode,
            'slug'        => 'pricing'
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
            'locale' => $locale,
            'slug'   => 'contact'
        ];
        return view('contact', $data);
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
                'fauzi' => [
                    'image' => 'leadership-fauzi.webp'
                ],
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
     * Submit contact form via email
     * @return ResponseInterface
     */
    public function submitContactForm(): ResponseInterface
    {
        try {
            $locale   = $this->request->getPost('locale');
            $this->request->setLocale($locale);
            $to       = getenv('CONTACT_FORM_EMAIL');
            $no_reply = getenv('NO_REPLY_EMAIL');
            $company  = $this->request->getPost('company-name');
            $company  = htmlspecialchars($company, ENT_QUOTES, 'UTF-8');
            $name     = $this->request->getPost('name');
            $name     = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
            $from     = $this->request->getPost('email');
            $from     = htmlspecialchars($from, ENT_QUOTES, 'UTF-8');
            $phone    = $this->request->getPost('phone');
            $phone     = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
            $subject  = $this->request->getPost('subject');
            $subject  = lang('Contact.form.subject-options.' . $subject);
            $message  = $this->request->getPost('message');
            $message  = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
            $date     = date('M d, Y');
            // Check spam potential
            $is_spam  = $this->isSpamSubmission($name, $message);
            if ($is_spam) {
                $subject = 'SPAM? - ' . $subject;
            }
            // Send the email
            $email    = Services::email();
            $email->setTo($to);
            $email->setFrom($no_reply);
            $email->setReplyTo($from);
            $email_subject = "[OtterNova][$subject] From: $name - $date";
            $email_body    = "Contact Form Submission\n\nName: $name\nEmail: $from\nPhone: $phone\nMessage: $message\nLanguage: $locale\n\nThis email is system generated.\nOtterNova";
            $email->setSubject($email_subject);
            $email->setMessage($email_body);
            log_message('debug', $email_subject);
            log_message('debug', $email_body);
            if ($email->send()) {
                log_message('debug', "Email is sent.");
                return $this->response->setBody('OK');
            } else {
                log_message('error', "Email not sent: " . $email->printDebugger());
                return $this->response->setBody(lang('Contact.form.error'));
            }
        } catch (\Exception $e) {
            log_message('error', "Email not sent: " . $e->getMessage());
            return $this->response->setBody(lang('Contact.form.error') . ': ' . $e->getMessage());
        }
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
