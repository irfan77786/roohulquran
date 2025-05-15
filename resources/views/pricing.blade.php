@extends('main')

<style>
  .card-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card-hover:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  }

  ul.lh-lg li {
    line-height: 1.8rem;
  }
</style>
@section('content')


  <!-- Pricing Section -->
  <section id="pricing" class="py-5 bg-light">
    <div class="container">
  
      <h2 class="text-center mb-4 fw-bold">Islamic Learning <span class="text-primary">Packages</span></h2>
  
      <div class="row g-4 justify-content-center">
        <!-- Basic Package -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 text-black rounded-4 border-0 card-hover" style="background-color: #dde5e6;">
            <div class="card-body text-center">
              <h5 class="fw-bold">Basic Package</h5>
              <h4 class="fw-bold">30 USD / 20 POUNDS <small>/ monthly</small></h4>
              <ul class="list-unstyled lh-lg mt-3 mb-0 text-start">
                <li>✅ 2 Classes / Weekly</li>
                <li>✅ 30 Minutes Class</li>
                <li>✅ 08 Classes per Month</li>
                <li>✅ Free Evaluation Class</li>
                <li>✅ Progress Reports</li>
                <li>✅ Priority Scheduling</li>
                <li>✅ Monthly Parent Consultation</li>
              </ul>
            </div>
          </div>
        </div>
  
        <!-- Standard Package -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 text-black rounded-4 border-0 card-hover" style="background-color: #dde5e6;">
            <div class="card-body text-center">
              <h5 class="fw-bold">Standard Package</h5>
              <h4 class="fw-bold">4O USD / 25 POUNDS <small>/ monthly</small></h4>
              <ul class="list-unstyled lh-lg mt-3 mb-0 text-start">
                <li>✅ 3 Classes / Weekly</li>
                <li>✅ 30 Minutes Class</li>
                <li>✅ 12 Classes per Month</li>
                <li>✅ Free Evaluation Class</li>
                <li>✅ Progress Reports</li>
                <li>✅ Priority Scheduling</li>
                <li>✅ Monthly Parent Consultation</li>
              </ul>
            </div>
          </div>
        </div>
  
        <!-- Premium Package -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 text-white rounded-4 border-0 bg-danger card-hover">
            <div class="card-body text-center">
              <h5 class="fw-bold text-white">Premium Package</h5>
              <h4 class="fw-bold text-white">50 USD / 30 POUNDS <small>/ monthly</small></h4>
              <ul class="list-unstyled lh-lg mt-3 mb-0 text-start">
                <li>✅ 4 Classes / Weekly</li>
                <li>✅ 30 Minutes Class</li>
                <li>✅ 16 Classes per Month</li>
                <li>✅ Free Evaluation Class</li>
                <li>✅ Progress Reports</li>
                <li>✅ Priority Scheduling</li>
                <li>✅ Monthly Parent Consultation</li>
              </ul>
            </div>
          </div>
        </div>
  
        <!-- Intensive Package -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 text-black rounded-4 border-0  card-hover" style="background-color: #dde5e6;">
            <div class="card-body text-center">
              <h5 class="fw-bold">Intensive Package</h5>
              <h4 class="fw-bold">60 USD / 40 POUNDS <small>/ monthly</small></h4>
              <ul class="list-unstyled lh-lg mt-3 mb-0 text-start">
                <li>✅ 5 Classes / Weekly</li>
                <li>✅ 30 Minutes Class</li>
                <li>✅ 20 Classes per Month</li>
                <li>✅ Free Evaluation Class</li>
                <li>✅ Progress Reports</li>
                <li>✅ Priority Scheduling</li>
                <li>✅ Monthly Parent Consultation</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Notice -->
      <div class="alert alert-warning text-center mt-5" role="alert">
        <strong>Important notice:</strong> Official holidays will be observed without any corresponding monetary adjustments.
      </div>
  
      <!-- Special Discounts -->
      <div class="text-center my-5">
        <h3 class="fw-bold">Special <span class="text-primary">Discounts</span> and Offers</h3>
      </div>
  
      <div class="row g-4">
        <!-- Family Discount -->
        <div class="col-md-4">
          <div class="p-4 bg-light border rounded h-100">
            <h5 class="fw-bold text-danger">Family Package Discounts</h5>
            <p>Our family-oriented pricing structure offers increasing discounts for multiple children:</p>
            <ul class="list-unstyled">
              <li>🔸 5% discount for second child</li>
              <li>🔸 10% discount for third child</li>
              <li>🔸 15% discount for fourth child and beyond</li>
            </ul>
          </div>
        </div>
  
        <!-- Long-Term Commitment -->
        <div class="col-md-4">
          <div class="p-4 bg-light border rounded h-100">
            <h5 class="fw-bold text-info">Long-Term Commitment Benefits</h5>
            <p>We reward long-term commitments with the following discounts:</p>
            <ul class="list-unstyled">
              <li>🔹 5% discount for 6-month advance payment</li>
              <li>🔹 10% discount for 1-year advance payment</li>
            </ul>
          </div>
        </div>
  
        <!-- Referral Program -->
        <div class="col-md-4">
          <div class="p-4 bg-light border rounded h-100">
            <h5 class="fw-bold text-warning">Referral Program</h5>
            <p>Share the blessing of learning by referring others:</p>
            <ul class="list-unstyled">
              <li>⭐ Earn 1 free class per successful referral</li>
              <li>⭐ Max of 4 free classes per month</li>
            </ul>
          </div>
        </div>
      </div>
  
    </div>
  </section>
  
@endsection