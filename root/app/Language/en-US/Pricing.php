<?php

return [
    // ------------------------------------------------------------------
    // Shared pricing labels
    // ------------------------------------------------------------------
    'recommended'         => 'Recommended',
    'or'                  => 'or',
    'per-month'           => '/month',
    'per-year'            => '/year',
    'forever'             => 'Forever', // Free forever
    'buy-now'             => 'Get Started',
    'saving'              => '<small>From</small> {0}{1} <small>(-{2}%)</small>',
    'contact-sales'       => 'Contact Sales',
    'check-other-country' => 'See plans for other countries:',
    'plan-country'        => [
        'global'   => 'Global',
        'thailand' => 'Thailand',
    ],

    // ------------------------------------------------------------------
    // Plans
    // ------------------------------------------------------------------
    // The key of each plan must match the key used in $plans in the view,
    // and each feature key must match an entry in that plan's 'features' list.
    'plans'               => [
        'free'     => [
            'name'        => 'Free',
            'description' => 'Everything you need to get your business online, free forever.',
            'features'    => [
                'feature-1' => '1 user account',
                'feature-2' => '1 web page',
                'feature-3' => '1 service',
                'feature-4' => 'Unlimited walk-in bookings',
                'feature-5' => '<i class="bi bi-ban text-danger"></i> No AI credits',
            ],
        ],
        'boost'    => [
            'name'        => 'Boost',
            'description' => 'Room to grow with more users, services, and products.',
            'features'    => [
                'feature-1' => 'Up to 3 users',
                'feature-2' => '1 web page',
                'feature-3' => 'Up to 5 services',
                'feature-4' => 'Up to 5 products',
                'feature-5' => 'Email support',
                'feature-6' => 'Unlimited walk-in bookings',
                'feature-7' => 'Sell products alongside your services',
                'feature-8' => '<i class="bi bi-cpu bi-ai-gradient"></i> 2 AI attempts per entity',
            ],
        ],
        'velocity' => [
            'name'        => 'Velocity',
            'description' => 'Built for businesses ready to expand.',
            'features'    => [
                'feature-1' => 'Up to 10 users',
                'feature-2' => 'Up to 3 web pages',
                'feature-3' => 'Up to 20 services',
                'feature-4' => 'Up to 20 products',
                'feature-5' => 'Email support',
                'feature-6' => 'Unlimited walk-in and session-based bookings',
                'feature-7' => 'Sell products alongside your services',
                'feature-8' => '<i class="bi bi-cpu bi-ai-gradient"></i> 2 AI attempts per entity',
            ],
        ],
        'quantum'  => [
            'name'        => 'Quantum',
            'description' => 'Take your business to the world with more pages and room to scale.',
            'features'    => [
                'feature-1' => 'Up to 30 users',
                'feature-2' => 'Up to 5 web pages',
                'feature-3' => 'Up to 50 services',
                'feature-4' => 'Up to 50 products',
                'feature-5' => 'Email support',
                'feature-6' => 'Unlimited walk-in and session-based bookings',
                'feature-7' => 'Sell products alongside your services',
                'feature-8' => '<i class="bi bi-cpu bi-ai-gradient"></i> 3 AI attempts per entity',
            ],
        ],
        'nova'  => [
            'name'        => 'Nova',
            'description' => 'My business is big, I need it big now!',
            'features'    => [
                'feature-1' => 'Set the limits together',
                'feature-2' => '<i class="bi bi-cpu bi-ai-gradient"></i> Use AI if you want',
            ],
        ],
    ],
];