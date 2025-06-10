<div class="modal1 mfp-hide" id="modal-contact">
    <div class="card mx-auto" style="max-width: 540px;">
        <div class="card-header py-3 bg-transparent text-center">
            <h3 class="mb-0 fw-normal">Request Quotation</h3>
        </div>
        <div class="card-body mx-auto py-5" style="max-width: 90%;">

            <form id="quote-form" name="quote-form" class="mb-0 row gy-3" action="{{ route('quote.submit') }}"
                method="post">
                @csrf
                <div class="col-12">
                    <input type="text" id="company-name" name="company_name" value="{{ old('company_name') }}"
                        class="form-control not-dark" placeholder="Company Name" required>
                </div>

                <div class="col-12">
                    <input type="text" id="contact-person" name="contact_person" value="{{ old('contact_person') }}"
                        class="form-control not-dark" placeholder="Contact Person" required>
                </div>

                <div class="col-12">
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control not-dark"
                        placeholder="Email Address" required>
                </div>

                <div class="col-12">
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="form-control not-dark"
                        placeholder="Phone Number" required>
                </div>

                <div class="col-12">
                    <select class="form-control not-dark" name="service_type" required>
                        <option value="">Select Service Type</option>
                        <option value="rental" {{ old('service_type')=='rental' ? 'selected' : '' }}>Excavator Rental
                        </option>
                        <option value="sales" {{ old('service_type')=='sales' ? 'selected' : '' }}>Excavator Sales
                        </option>
                        <option value="consultation" {{ old('service_type')=='consultation' ? 'selected' : '' }}>Project
                            Consultation</option>
                    </select>
                </div>

                <div class="col-12">
                    <textarea class="form-control not-dark" name="project_details" rows="3"
                        placeholder="Project Details / Requirements">{{ old('project_details') }}</textarea>
                </div>

                <div class="col-12 mt-4">
                    <button class="button button-rounded w-100 m-0" type="submit">Request Quotation</button>
                </div>
            </form>
        </div>
        <div class="card-footer py-4 text-center">
            <p class="mb-0">Or contact us directly at <a
                    href="mailto:inquiry@bupixel.org"><u>inquiry@bupixel.org</u></a></p>
        </div>
    </div>
</div>
