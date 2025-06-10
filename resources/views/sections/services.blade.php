<div id="section-services" class="section bg-transparent mt-6 mb-0">
    <div class="container">
        <div class="heading-block mx-auto text-center" style="max-width: 600px">
            <small class="text-black-50 text-uppercase ls-3 fw-semibold">Our Services</small>
            <h2 class="text-capitalize fw-semibold ls-0 mb-1" style="font-size: 36px">How We Support Your Project</h2>
            <p>Professional excavator solutions tailored to meet your construction and infrastructure development needs
                with transparent pricing and reliable service.</p>
        </div>
        <div class="clear"></div>
        <div class="row showcase-section align-items-center justify-content-between">
            <div class="col-lg-3 col-md-5">
                <ul class="mb-0">
                    <li class="showcase-feature showcase-feature-active" data-target="#target-1">
                        <h3>Project Consultation.</h3>
                        <p>We assess your project requirements and recommend the right equipment solution.</p>
                    </li>
                    <li class="showcase-feature" data-target="#target-2">
                        <h3>Equipment Selection.</h3>
                        <p>Choose from our range of well-maintained excavators suitable for your specific needs.</p>
                    </li>
                    <li class="showcase-feature" data-target="#target-3">
                        <h3>Delivery & Setup.</h3>
                        <p>Professional delivery and equipment setup at your project site across Malaysia.</p>
                    </li>
                    <li class="showcase-feature" data-target="#target-4">
                        <h3 class="text-uppercase">Project Support.</h3>
                        <p>Ongoing technical support and maintenance throughout your rental period.</p>
                    </li>
                </ul>
            </div>

            <div class="col-lg-8 col-md-7">
                <div id="target-1" class="showcase-target showcase-target-active">
                    <img class="rounded" src="{{ asset('images/services/consultation.png') }}"
                        alt="Project Consultation">
                </div>
                <div id="target-2" class="showcase-target">
                    <img class="rounded" src="{{ asset('images/services/equipment-selection.png') }}"
                        alt="Equipment Selection">
                </div>
                <div id="target-3" class="showcase-target">
                    <img class="rounded" src="{{ asset('images/services/delivery.jpg') }}" alt="Delivery & Setup">
                </div>
                <div id="target-4" class="showcase-target">
                    <div class="rounded"
                        style="background: url('{{ asset('images/services/support.jpg') }}') bottom center no-repeat; background-size: cover; min-height: 500px;">
                        <div class="row dark m-0">
                            <div class="col-lg-5 rounded py-5 px-4" style="background-color: rgba(0,0,0,0.5);">
                                <h2 class="display-5 mb-0">Professional Support.</h2>
                                <hr>
                                <p class="lead d-none d-md-block mb-0">Reliable. Responsive. Results-Driven.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function showcaseSection( element ){
        var otherElements = element.parents('.showcase-section').find('.showcase-feature'),
            elementTarget = jQuery( element.attr('data-target') ),
            otherTargets = element.parents('.showcase-section').find('.showcase-target');

        otherElements.removeClass('showcase-feature-active');
        element.addClass('showcase-feature-active');
        otherTargets.removeClass('showcase-target-active');
        elementTarget.addClass('showcase-target-active');
    }

    jQuery('.showcase-feature').hover( function(){
        showcaseSection( jQuery(this) );
    });
</script>
@endpush
