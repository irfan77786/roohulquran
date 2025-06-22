<style>

#testimonials {
    background-color: #f5f5f5;
  }

  .testimonial-card {
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .badge-card {
    bottom: -20px;
    transform: translateX(-50%);
  }

  .badge-card i {
    font-size: 2rem;
    color: #e5a72a;
  }

  .swiper {
    width: 100%;
    height: auto;
  }

  .swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .testimonial-card {
    max-width: 90%;
    margin: auto;
  }
</style>
<section id="testimonials" class="py-5" style="background-color: #f5f5f5;">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Content -->
      <div class="col-lg-6" data-aos="fade-up">
        <h6 class="text-danger">Our Testimonial</h6>
        <h2 class="mb-4">
          Why Students Love <span style="color: #e5a72a;">Learning</span> Quran with Us
        </h2>
        <!-- Swiper Slider -->
        <div class="swiper testimonial-slider">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
              <div class="testimonial-card p-4 rounded shadow bg-white">
                <div class="rating mb-3">
                  <span class="stars" style="color: #ffc107; font-size: 1.5rem;">★★★★★</span>
                </div>
                <p class="mb-4">
                  My son has developed such a deep love for the Quran, and it's all thanks to the dedicated teachers and
                  their kind approach. The online classes are convenient, and the communication with parents is
                  excellent. Highly recommended!
                </p>
                <div class="d-flex align-items-center">
                  <img src="{{ asset('assets/img/ai/test-1.jpg') }}" alt="User" class="rounded-circle me-3"
                    style="width: 50px; height: 50px; object-fit: cover;">
                  <div>
                    <h5 class="mb-0">Muhammad Zakir</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
              <div class="testimonial-card p-4 rounded shadow bg-white">
                <div class="rating mb-3">
                  <span class="stars" style="color: #ffc107; font-size: 1.5rem;">★★★★★</span>
                </div>
                <p class="mb-4">
                  Roohul Quran has been a blessing for our family. My daughter looks forward to every class and is
                  memorizing Quran with proper tajweed, something we were struggling with before. May Allah reward the
                  teachers for their efforts.
                </p>
                <div class="d-flex align-items-center">
                  <img src="{{ asset('assets/img/ai/test-2.png') }}" alt="User" class="rounded-circle me-3"
                    style="width: 50px; height: 50px; object-fit: cover;">
                  <div>
                    <h5 class="mb-0">Ayesha Khan</h5>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card p-4 rounded shadow bg-white">
                <div class="rating mb-3">
                  <span class="stars" style="color: #ffc107; font-size: 1.5rem;">★★★★★</span>
                </div>
                <p class="mb-4">
                  I appreciate how Roohul Quran combines Islamic values with modern teaching methods. The progress
                  reports and regular feedback keep us informed. My children are more disciplined and spiritually
                  connected, Alhamdulillah
                </p>
                <div class="d-flex align-items-center">
                  <img src="{{ asset('assets/img/ai/test-3.jpg') }}" alt="User" class="rounded-circle me-3"
                    style="width: 50px; height: 50px; object-fit: cover;">
                  <div>
                    <h5 class="mb-0">Muhammad Zeeshan</h5>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card p-4 rounded shadow bg-white">
                <div class="rating mb-3">
                  <span class="stars" style="color: #ffc107; font-size: 1.5rem;">★★★★★</span>
                </div>
                <p class="mb-4">
                  We live in a Western country, and finding reliable Quran education was difficult. Roohul Quran filled
                  that gap perfectly. The teachers are patient, experienced, and caring. I’ve seen huge improvement in
                  my kids' reading and understanding of the Quran.
                </p>
                <div class="d-flex align-items-center">
                  <img src="{{ asset('assets/img/ai/test-4.jpg') }}" alt="User" class="rounded-circle me-3"
                    style="width: 50px; height: 50px; object-fit: cover;">
                  <div>
                    <h5 class="mb-0">M Yaseen</h5>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-card p-4 rounded shadow bg-white">
                <div class="rating mb-3">
                  <span class="stars" style="color: #ffc107; font-size: 1.5rem;">★★★★★</span>
                </div>
                <p class="mb-4">
                  Learning Quran online has been a blessing for me. The instructors are very knowledgeable and patient.
                  I highly recommend QTeaching to anyone looking to deepen their understanding of the Quran.
                </p>
                <div class="d-flex align-items-center">
                  <img src="{{ asset('assets/img/ai/test-5.jpg') }}" alt="User" class="rounded-circle me-3"
                    style="width: 50px; height: 50px; object-fit: cover;">
                  <div>
                    <h5 class="mb-0">Habibullah</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- Add more slides as needed -->
          </div>
          <br><br>
          <div class="swiper-pagination"></div>
          <!-- Swiper Pagination -->
        </div>
      </div>

      <!-- Right Content -->
      <div class="col-lg-6 text-center position-relative" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('assets/img/ai/happystudent.svg') }}" alt="Student" class="img-fluid rounded" style="max-height: 400px;">
        <div
          class="badge-card position-absolute bottom-0 start-50 translate-middle-x bg-white shadow p-3 rounded d-flex align-items-center"
          style="margin-bottom: -30px;">
          <i class="bi bi-mortarboard text-danger" style="font-size: 2rem;"></i>
          <div class="ms-3">
            <h4 class="mb-0 text-danger">400+</h4>
            <p class="mb-0">Satisfied Students</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>