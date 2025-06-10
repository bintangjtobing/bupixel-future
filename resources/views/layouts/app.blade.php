<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="BU Pixel Future Sdn Bhd">
    <meta name="description"
        content="BU Pixel Future Sdn Bhd - Excavator Rental & Sales Services in Malaysia. Reliable machinery solutions for construction and infrastructure development.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Meta Tags -->
    <meta name="author" content="BU Pixel Future Sdn Bhd">
    <meta name="description"
        content="@yield('meta_description', 'BU Pixel Future Sdn Bhd - Professional excavator rental & sales services in Malaysia. Reliable machinery solutions for construction, infrastructure development, land clearing & earthmoving projects.')">
    <meta name="keywords"
        content="@yield('meta_keywords', 'excavator rental Malaysia, excavator sales, construction equipment rental, earthmoving machinery, Kuala Lumpur excavator, Selangor excavator rental, infrastructure development, land clearing services, trenching equipment, heavy machinery rental')">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">

    <!-- Open Graph Meta Tags (Facebook) -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="BU Pixel Future Sdn Bhd">
    <meta property="og:title"
        content="@yield('og_title', 'BU Pixel Future Sdn Bhd | Excavator Rental & Sales Services Malaysia')">
    <meta property="og:description"
        content="@yield('og_description', 'Professional excavator rental & sales services in Malaysia. Reliable machinery solutions for construction and infrastructure development across Peninsular Malaysia.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@bupixelfuture">
    <meta name="twitter:creator" content="@bupixelfuture">
    <meta name="twitter:title"
        content="@yield('twitter_title', 'BU Pixel Future Sdn Bhd | Excavator Rental & Sales Services Malaysia')">
    <meta name="twitter:description"
        content="@yield('twitter_description', 'Professional excavator rental & sales services in Malaysia. Reliable machinery solutions for construction and infrastructure development.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/twitter-image.jpg'))">

    <!-- Business Schema.org -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "BU Pixel Future Sdn Bhd",
        "description": "Excavator rental and sales services in Malaysia. Professional machinery solutions for construction and infrastructure development.",
        "url": "{{ url('/') }}",
        "telephone": "+60-XXX-XXXXXXX",
        "email": "inquiry@bupixel.org",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Kuala Lumpur",
            "addressRegion": "Federal Territory",
            "addressCountry": "MY"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "3.139",
            "longitude": "101.6869"
        },
        "openingHours": "Mo-Su 00:00-23:59",
        "priceRange": "RM300-RM1000",
        "image": "{{ asset('buf.png') }}",
        "logo": "{{ asset('buf.png') }}",
        "sameAs": [
            "https://facebook.com/bupixelfuture",
            "https://linkedin.com/company/bupixelfuture"
        ],
        "serviceArea": {
            "@type": "State",
            "name": "Peninsular Malaysia"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Excavator Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Compact Excavator Rental",
                        "description": "Small excavators for residential and utility work"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Heavy-Duty Excavator Rental",
                        "description": "Large excavators for infrastructure projects"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Excavator Sales",
                        "description": "New and used excavator sales"
                    }
                }
            ]
        }
    }
    </script>

    <!-- Additional Meta Tags -->
    <meta name="theme-color" content="#2B2D6B">
    <meta name="msapplication-TileColor" content="#2B2D6B">
    <meta name="msapplication-config" content="{{ asset('browserconfig.xml') }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="ms" href="{{ url()->current() }}">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&family=Istok+Web:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('one-page/css/et-line.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/ion.rangeslider.css') }}">
    <link rel="stylesheet" href="{{ asset('demos/bike/bike.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <title>@yield('title', 'BU Pixel Future Sdn Bhd | Excavator Rental & Sales Services Malaysia')</title>
    <link rel="shortcut icon" href="{{ asset('buf-icon.png') }}" type="image/x-icon">

    @stack('styles')
</head>

<body class="stretched">
    <div id="wrapper">

        @include('partials.modal-contact')

        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')

    </div>

    <!-- Go To Top -->
    <div id="gotoTop" class="uil uil-angle-up"></div>

    <!-- JavaScript -->
    <script src="{{ asset('js/plugins.min.js') }}"></script>
    <script src="{{ asset('js/functions.bundle.js') }}"></script>
    <script src="{{ asset('js/components/rangeslider.min.js') }}"></script>

    @stack('scripts')
</body>

</html>
