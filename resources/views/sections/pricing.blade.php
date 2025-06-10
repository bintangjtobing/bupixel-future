<div id="section-pricing" class="section pricing"
    style="background: url('{{ asset('images/bg.png') }}') repeat-y center top; padding: 100px 0;">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-7">
                <div class="heading-block border-bottom-0">
                    <small class="text-black-50 text-uppercase ls-3 fw-semibold">Transparent Pricing</small>
                    <h2 class="text-capitalize fw-semibold mb-2" style="font-size: 36px; letter-spacing: -1px">Excavator
                        Rental Rates</h2>
                    <p class="lead">Competitive and transparent pricing for excavator rental services with flexible
                        terms to suit your project timeline and budget.</p>
                    <p>Our pricing includes equipment delivery, basic maintenance, and technical support. We offer
                        daily, weekly, and monthly rental options across Peninsular Malaysia, particularly within the
                        Klang Valley region including Kuala Lumpur and Selangor.</p>
                </div>

                <div class="row">
                    <div class="col-6">
                        <input class="range-slider-equipment" id="equipment-slider">
                        <label class="mt-2" for="equipment-slider">Select Equipment Type</label>
                    </div>
                    <div class="col-6">
                        <input class="range-slider-days" id="days-slider">
                        <label class="mt-2" for="days-slider">Select Rental Duration</label>
                    </div>
                </div>

                <div class="row mt-4 mt-md-5">
                    <div class="col-sm-6">
                        <h4 class="fw-semibold mb-3">Rental Includes:</h4>
                        <ul class="ms-3 mb-2">
                            <li class="mb-2">Equipment Delivery & Pickup</li>
                            <li class="mb-2">Basic Maintenance Support</li>
                            <li class="mb-2">Technical Assistance</li>
                            <li class="mb-2">Safety Inspection</li>
                        </ul>
                    </div>
                    <div class="col-sm-6 mt-4 mt-sm-0">
                        <h4 class="fw-semibold mb-3">Additional Services:</h4>
                        <ul class="ms-3 mb-2">
                            <li class="mb-2">Operator Services Available</li>
                            <li class="mb-2">Extended Maintenance Plans</li>
                            <li class="mb-2">Project Consultation</li>
                            <li class="mb-2">Custom Attachments</li>
                            <li class="mb-2">Equipment Purchase Options</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 mt-4 mt-md-0 sticky-sidebar-wrap">
                <div class="card text-center border-0 shadow sticky-sidebar py-4">
                    <div class="card-body py-4">
                        <h3 class="card-title fw-normal mb-0">Estimated Cost</h3>
                        <div class="pricing-price fw-bold py-3">RM 3,500</div>
                        <p class="card-text pricing-sub text-muted">for 7 days rental</p>
                    </div>
                    <div class="line my-1"></div>
                    <div class="card-body py-4">
                        <ul class="list-unstyled ms-0" style="opacity: .8">
                            <li class="mb-2">Well-Maintained Equipment</li>
                            <li class="mb-2">Delivery & Pickup Included</li>
                            <li class="mb-2">Technical Support</li>
                            <li>Flexible Rental Terms</li>
                        </ul>
                        <a href="#modal-contact" data-lightbox="inline"
                            class="button button-rounded button-large ls-0 fw-normal ms-0 mb-2 text-transform-none">Get
                            Detailed Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    jQuery(document).ready(function() {
    var equipmentType = 1;
    var days = 7;
    var equipmentSlider = jQuery("#equipment-slider");
    var daysSlider = jQuery("#days-slider");

    // Initialize equipment slider
    if (equipmentSlider.length && typeof equipmentSlider.ionRangeSlider === 'function') {
        equipmentSlider.ionRangeSlider({
            grid: false,
            step: 1,
            min: 1,
            from: 1,
            max: 4,
            values: ['Compact', 'Mid-Size', 'Heavy-Duty', 'Specialized'],
            onChange: function(data) {
                equipmentType = data.from;
                calculatePrice(equipmentType, days);
            },
            onStart: function(data) {
                equipmentType = data.from;
            }
        });
    }

    // Initialize days slider
    if (daysSlider.length && typeof daysSlider.ionRangeSlider === 'function') {
        daysSlider.ionRangeSlider({
            grid: false,
            step: 1,
            min: 1,
            from: 7,
            max: 30,
            postfix: ' Days',
            onChange: function(data) {
                days = data.from;
                calculatePrice(equipmentType, days);
            },
            onStart: function(data) {
                days = data.from;
            }
        });
    }

    // Calculate initial price
    calculatePrice(equipmentType, days);

    function calculatePrice(equipment, days) {
        try {
            // Base rates for each equipment type (RM per day)
            var baseRates = [300, 500, 800, 1000]; // Compact, Mid-Size, Heavy-Duty, Specialized

            // Ensure equipment is a valid number
            equipment = parseInt(equipment) || 1;
            days = parseInt(days) || 1;

            // Get daily rate
            var dailyRate = baseRates[equipment - 1] || baseRates[0];
            var totalCost = dailyRate * days;

            // Apply discounts for longer rentals
            var discount = 0;
            if (days >= 7 && days < 14) {
                discount = 0.05; // 5% discount
            } else if (days >= 14 && days < 30) {
                discount = 0.10; // 10% discount
            } else if (days >= 30) {
                discount = 0.15; // 15% discount
            }

            if (discount > 0) {
                totalCost = totalCost * (1 - discount);
            }

            // Format and display price
            var formattedPrice = 'RM ' + Math.round(totalCost).toLocaleString();
            var duration = days === 1 ? '1 day' : days + ' days';

            jQuery('.pricing-price').html(formattedPrice);
            jQuery('.pricing-sub').html('for ' + duration + ' rental');

        } catch (error) {
            console.error('Error calculating price:', error);
            jQuery('.pricing-price').html('RM 500');
            jQuery('.pricing-sub').html('per day (base rate)');
        }
    }
});
</script>
@endpush
