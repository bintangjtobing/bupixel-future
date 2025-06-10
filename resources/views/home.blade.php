@extends('layouts.app')

@section('title', 'BU Pixel Future Sdn Bhd | Excavator Rental & Sales Services Malaysia')
@section('meta_description', 'BU Pixel Future Sdn Bhd - Leading excavator rental & sales company in Malaysia.
Professional machinery solutions for construction, infrastructure development, land clearing & earthmoving projects
across Peninsular Malaysia.')

@section('meta_keywords', 'excavator rental Malaysia, excavator sales Malaysia, construction equipment rental KL,
earthmoving machinery Selangor, heavy machinery rental, infrastructure development equipment, land clearing services,
trenching excavator, demolition equipment, compact excavator rental, BU Pixel Future')

@section('og_title', 'BU Pixel Future Sdn Bhd | Professional Excavator Rental & Sales Malaysia')
@section('og_description', 'Leading excavator rental & sales company in Malaysia. Professional machinery solutions for
construction and infrastructure development across Peninsular Malaysia since October 2024.')
@section('og_image', asset('images/hero-excavator-og.jpg'))

@section('twitter_title', 'Professional Excavator Rental & Sales Services in Malaysia | BU Pixel Future')
@section('twitter_description', 'Reliable excavator rental & sales services across Malaysia. Construction equipment for
infrastructure development, land clearing & earthmoving projects.')
@section('twitter_image', asset('images/hero-excavator-twitter.jpg'))
@section('content')
<section id="content">
    <div class="content-wrap py-0">

        <!-- Hero Section -->
        <div class="section section-curve mt-0"
            style="background: var(--cnvs-color-light) url('{{ asset('images/hero-excavator.png') }}') right 70% / cover; height: 750px;">
            <div class="container text-center">
                <div class="heading-block mt-4 border-bottom-0">
                    <h1 class="text-transform-none fw-semibold" style="font-size: 44px; letter-spacing: -1px">
                        Excavator Rental & Sales Services</h1>
                    <small class="mb-5 h6 lead">Reliable machinery solutions for construction and infrastructure
                        development in Malaysia.</small>
                </div>

                <a href="#modal-contact" data-lightbox="inline"
                    class="button ls-1 text-uppercase fw-bold button-large button-rounded button-shadow">Get
                    Quotation</a>
                <a href="#section-services"
                    class="button ls-1 text-uppercase fw-bold button-large button-rounded button-border">Our
                    Services</a>
            </div>
        </div>
        <!-- Video Section -->
        <div class="container">
            <div class="card border-0 mx-auto rounded ytb-card" style="box-shadow: 0 32px 46px 2px rgba(0,0,0,0.12);">
                <div id="ytb-video" class="yt-bg-player card-img-top rounded-top" data-quality="hd1080" data-volume="80"
                    data-autoplay="false" data-container="self" data-video="https://youtu.be/2lDcyfgIJLs">
                    <div class="ytb-poster rounded-top"
                        style="background: url('{{ asset('images/hero-excavator.jpg') }}') center center / cover; position: absolute; left: 0; top: 0; width: 100%; height: 100%;">
                    </div>
                    <a href="#" id="ytb-video-button" class="play-icon"><i class="bi-play"></i><i
                            class="bi-pause"></i></a>
                </div>
                <div class="card-body p-5">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6">
                            <div class="heading-block border-bottom-0 mb-0">
                                <small class="text-black-50 text-uppercase ls-3 fw-semibold">Professional
                                    Equipment</small>
                                <h2 class="text-transform-none fw-semibold ls-0 mb-2">Quality Excavators for Every
                                    Project</h2>
                                <p class="mb-1">From land clearing to infrastructure development, our well-maintained
                                    excavators deliver reliable performance for projects of all sizes across Malaysia.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 mt-3 mt-md-0">
                            <div class="subscribe-widget" data-loader="button">
                                <div class="widget-subscribe-form-result"></div>
                                <form id="widget-subscribe-form" action="{{ route('subscribe') }}" method="post"
                                    class="mb-0">
                                    @csrf
                                    <input type="email" id="widget-subscribe-form-email" name="email"
                                        class="form-control not-dark required email"
                                        placeholder="Enter your Email Address.." required>
                                    <div class="form-check py-3">
                                        <input type="checkbox" class="form-check-input" id="subscribe-news"
                                            name="newsletter" value="1">
                                        <label class="form-check-label text-transform-none ls-0 fw-normal"
                                            for="subscribe-news">Get Updates on New Equipment & Services</label>
                                    </div>
                                    <button
                                        class="button button-shadow button-rounded m-0 text-transform-none ls-0 w-100"
                                        type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trusted Partners -->
            <div class="row mt-5 align-items-center mx-auto mb-6" style="max-width: 840px">
                <div class="col-md-3 mb-2 mb-md-0">
                    <h3 class="mb-0">Trusted by:</h3>
                </div>
                <div class="col-md-9">
                    <div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="50"
                        data-nav="true" data-pagi="false" data-items-xs="2" data-items-md="3" data-items-xl="4"
                        data-loop="true" data-autoplay="3500">
                        <div class="oc-item"><a href="#"><img src="{{ asset('images/clients/1.png') }}"
                                    alt="construction companies"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{ asset('images/clients/2.png') }}"
                                    alt="developers"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{ asset('images/clients/3.png') }}"
                                    alt="contractors"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{ asset('images/clients/4.png') }}"
                                    alt="builders"></a></div>
                        <div class="oc-item"><a href="#"><img src="{{ asset('images/clients/5.png') }}"
                                    alt="infrastructure companies"></a></div>
                    </div>
                </div>
            </div>
        </div>

        @include('sections.services')
        @include('sections.equipment')
        @include('sections.about')
        @include('sections.pricing')
        @include('sections.coverage')
        @include('sections.contact')

    </div>
</section>
@endsection

@push('scripts')
<script>
    jQuery('#ytb-video').on('click', function(e){
        e.preventDefault();

        if( jQuery(this).hasClass('video-played') ) {
            jQuery('#ytb-video').YTPPause();
        } else {
            jQuery('#ytb-video').YTPPlay();
            jQuery('.ytb-poster').stop(true,true).fadeTo( "slow", 0 );
        }

        jQuery(this).toggleClass('video-played');
    });
</script>
@endpush
