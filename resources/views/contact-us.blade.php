@extends('main')

<style>
    #get-in-touch {
        background: linear-gradient(120deg, #44137c, #2bab6d);
        /* Gradient from #44137c to #2bab6d */

    }

    #get-in-touch:hover {
        background: linear-gradient(120deg, #2bab6d, #44137c);
        /* Gradient from #2bab6d to #44137c */
    }
</style>
@section('content')
    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row gy-5">
                <!-- Left Side Contact Info -->
                <div class="col-lg-5">
                    <h6 class="text-danger mb-2">Get In Touch</h6>
                    <h2 class="fw-bold"><strong>Contact</strong> Us <span class="fw-normal">Now</span></h2>
                    <p class="text-muted">We’re here to help! Whether you have questions about our Quran courses, need
                        assistance with enrollment, or want to share feedback, feel free to reach out.</p>

                    <div class="bg-white p-4 rounded shadow-sm">
                        <div class="d-flex align-items-center mb-4">
                            <div class="me-3">
                                <i class="bi bi-telephone-fill fs-2 text-dark"></i>
                            </div>
                            <div>
                                <small class="text-muted">Call us or whatsapp Anytime</small><br>
                                <strong class="text-dark">+92 344 6781539</strong><br>
                                <strong class="text-dark">+92 343 8078216</strong>
                            </div>
                        </div>

                        <hr>

                        <div class="d-flex align-items-center mb-4">
                            <div class="me-3">
                                <i class="bi bi-envelope-fill fs-2 text-dark"></i>
                            </div>
                            <div>
                                <small class="text-muted">E-mail us Anytime</small><br>
                                <strong class="text-dark">info@roohulquranacademy.com</strong>
                            </div>
                        </div>

                        <hr>
{{-- 
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="bi bi-geo-alt-fill fs-2 text-dark"></i>
                            </div>
                            <div>
                                <small class="text-muted">Our Locations</small><br>
                                <strong class="text-dark">Hatton Garden, London, United Kingdom</strong>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <!-- Right Side Contact Form -->
                <div class="col-lg-7">
                    <h6 class="text-danger">Contact Us</h6>
                    <h2 class="fw-bold">Get in <strong>Touch</strong> with Us</h2>
                    <form id="trial-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Name"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" class="form-control" placeholder="Your Phone Number"
                                    required>
                            </div>
                            <div class="mb-3">
                              <select class="form-control rounded-pill" name="country" required>
                                <option value="" disabled selected>Select Your Country</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="UK">UK</option>
                              </select>
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control" rows="4" placeholder="Add Your Notes" required></textarea>

                                <div class="col-12">
                                    <button type="submit" id="get-in-touch" class="btn btn-dark px-4 mt-4 py-2">GET IN
                                        TOUCH</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('#trial-form').on('submit', function(e) {
            e.preventDefault();

            let form = $(this);
            let submitBtn = $('#submit-btn');
            let btnText = $('#btn-text');
            let btnLoading = $('#btn-loading');

            btnText.addClass('d-none');
            btnLoading.removeClass('d-none');
            submitBtn.prop('disabled', true);

            $.ajax({
                url: '{{ route('trial-class.store') }}',
                type: 'POST',
                data: form.serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    btnText.removeClass('d-none');
                    btnLoading.addClass('d-none');
                    submitBtn.prop('disabled', false);

                    Swal.fire('JazakAllah', response.message, 'success');
                    form[0].reset();
                },
                error: function(xhr) {
                    btnText.removeClass('d-none');
                    btnLoading.addClass('d-none');
                    submitBtn.prop('disabled', false);

                    let message = 'Something went wrong.';
                    if (xhr.status === 422) {
                        const errors = xhr.responseJSON.errors;
                        message = Object.values(errors).flat().join('\n');
                    }

                    Swal.fire('Error', message, 'error');
                }
            });
        });


        $('#trial-forms').on('submit', function(e) {
            e.preventDefault();

            let form = $(this);
            let submitBtn = $('#submit-btn');
            let btnText = $('#btn-text');
            let btnLoading = $('#btn-loading');

            btnText.addClass('d-none');
            btnLoading.removeClass('d-none');
            submitBtn.prop('disabled', true);
        });
    </script>
@endsection
