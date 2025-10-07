@extends('main')
@section('title', 'Quran classes fee structure - Online Quran Classes')


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


  .price {
    min-height: 300px;
  }

  .bottom-list {
    padding: 30px 0px;
  }

  .price.active {
    box-shadow: 0 3px 5px 3px #cdcdcd;
    position: relative;
    z-index: 9999;
  }

  #packages-plan-defcity ul {
    margin: 0px 15px;
    padding: 0px;
  }

  .packages-head-defcity p {
    line-height: 25px;
  }

  #packages-plan-defcity ul li {
    list-style: none;
    display: flex;
    line-height: 30px;
  }

  #client-logos-defcity {
    padding: 50px 0px;
  }

  div#client-logo-slider {
    margin-top: 30px;
  }

  .top-list {
    min-height: 320px;
  }

  .price {
    display: inline-block;
    width: 100%;
    border: 4px solid;
  }

  .bottom-list a {
    background: #0960d7;
    color: #fff !important;
    padding: 10px;
    display: inline-block;
    padding: 10px 20px;
    border-radius: 4px;
    margin-top: 10px;
  }


  .pricingTable {
    background-color: #fff;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    margin: 0 20px;
    box-shadow: 0 0 10px -5px rgba(0, 0, 0, 0.7);
    border-radius: 30px;
  }

  .pricingTable .pricingTable-header {
    color: #fff;
    background: linear-gradient(to bottom, #f25e74 15px, #EE0024 15px);
    padding: 20px 10px 10px;
    margin: 0 0 5px;
    border-radius: 30px 30px 0 0;
    position: relative;
    z-index: 1;
  }

  .cta-tp {
    background: #e0e0e0;
    padding: 70px 0px;
    color: #000;
  }

  .cta-tp p {
    color: #000 !important;
  }

  .cta-tp h3 {
    font-size: 32px;
    font-weight: 700 !important;
  }

  .pricingTable .title {
    font-size: 29px;
    font-weight: 600 !important;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 14px 0 10px 5px;
    color: #FFF !important;
  }

  .pricingTable .price-value {
    background-color: #f25e74;
    font-size: 40px;
    font-weight: 600;
    line-height: 102px;
    height: 110px;
    width: 110px;
    margin: 0 auto;
    border: 4px solid #EE0024;
    border-radius: 50%;
    box-shadow: 0 0 10px -5px rgba(0, 0, 0, 0.6);
  }

  .pricingTable .price-value:after {
    content: '';
    background-color: #f25e74;
    height: 85px;
    box-shadow: 0 5px 10px -5px rgba(0, 0, 0, 0.5);
    position: absolute;
    left: -10px;
    right: -10px;
    bottom: 20px;
    z-index: -1;
  }

  .pricingTable .price-value span {
    font-weight: 300;
    display: inline-block;
  }

  .pricingTable .content-list {
    padding: 25px 0 30px;
    margin: 0;
    list-style: none;
    display: inline-block;
  }

  .pricingTable .content-list li {
    color: #333;
    font-size: 16px;
    text-transform: capitalize;
    text-align: left;
    padding: 0 0 2px 25px;
    list-style: none;
    margin: 0 0 20px;
    border-bottom: 2px solid #EE0024;
    position: relative;
  }

  .pricingTable .content-list li.disable {
    color: #000;
  }

  .pricingTable .content-list li:last-child {
    margin-bottom: 0;
  }

  .pricingTable .content-list li:before {
    content: "\f00c";
    color: #EE0024;
    display: none;
    font-family: "Font Awesome 5 Free";
    font-size: 17px;
    font-weight: 900;
    position: absolute;
    top: 0;
    left: 0;
  }

  .pricingTable .pricingTable-signup {
    background: linear-gradient(to top, #d60625 15px, #EE0024 15px);
    padding: 10px 10px 25px;
    border-radius: 0 0 30px 30px;
  }

  .pricingTable .pricingTable-signup a {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    display: inline-block;
    transition: all 0.3s ease 0s;
  }

  .pricingTable .pricingTable-signup a:hover {
    font-style: italic;
    letter-spacing: 2px;
    text-shadow: 0 0 8px rgba(0, 0, 0, 0.8);
  }

  .pricingTable.blue .pricingTable-header {
    background: linear-gradient(to bottom, #353e7f 15px, #060F5E 15px);
  }

  .pricingTable.blue .price-value {
    background-color: #353e7f;
    border-color: #060F5E;
  }

  .pricingTable.blue .price-value:after {
    background-color: #353e7f;
  }

  .pricingTable.blue .content-list li {
    border-bottom-color: #060F5E;
  }

  .pricingTable.blue .content-list li:before {
    color: #060F5E;
  }

  .pricingTable.blue .content-list li.disable:before {
    color: #d1d1d1;
  }

  .pricingTable.blue .pricingTable-signup {
    background: linear-gradient(to top, #14207f 15px, #060F5E 15px);
  }

  .pricingTable.green .pricingTable-header {
    background: linear-gradient(to bottom, #25b26e 15px, #00934D 15px);
  }

  .pricingTable.green .price-value {
    background-color: #25b26e;
    border-color: #00934D;
  }

  .pricingTable.green .price-value:after {
    background-color: #25b26e;
  }

  .pricingTable.green .content-list li {
    border-bottom-color: #00934D;
  }

  .pricingTable.green .content-list li:before {
    color: #00934D;
    display: none;
  }

  .pricingTable.green .pricingTable-signup {
    background: linear-gradient(to top, #017c41 15px, #00934D 15px);
  }

  @media only screen and (max-width: 990px) {
    .pricingTable {
      margin-bottom: 30px;
    }
  }

  .demo h1 {
    margin: 10px 0px 50px 0px !important;
  }

  h1,
  h2,
  h3,
  h4,
  h5 {
    font-family: Montserrat, Arial, sans-serif !important;
  }

  p,
  a {
    font-family: Montserrat, Arial, sans-serif !important;
  }

  @media (min-width: 1200px) {
    .container {
      width: 1294px;
    }
  }

  section {
    padding-top: 4rem;
    padding-bottom: 0rem;
    background-color: #fff;
  }

  .wrap {
    display: flex;
    background: #7ab80e;
    padding: 1rem 1rem 1rem 1rem;
    border-radius: 0.5rem;
    box-shadow: 7px 7px 30px -5px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
  }

  .wrap:hover {
    background: linear-gradient(135deg, #7ab80e 33%, #335000 100%);
    color: white;
  }

  .ico-wrap {
    margin: auto;
  }

  .ico-wrap {
    width: 320px;
  }

  .mbr-iconfont {
    font-size: 4.5rem !important;
    color: #313131;
    margin: 1rem;
    padding-right: 1rem;
  }

  .vcenter {
    margin: auto;
  }

  .mbr-section-title3 {
    text-align: left;
  }

  h2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
  }

  .display-5 {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 1.4rem;
  }

  .mbr-bold {
    font-weight: 700;
  }

  p {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    line-height: 25px;
  }

  .display-6 {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 1re
  }

  .f-social {
    margin-top: 23px;
  }

  .f-social a {
    color: #fff !important;
    margin-right: 10px;
  }

  .bottom-btn {
    margin-top: 20px;
  }

  .bottom-btn a {
    color: #fff !important;
    padding: 15px 16px;
    border-radius: 2px;
    margin-right: 11px;
    font-weight: 600;
  }

  .blog-btn h3 {
    width: 155px;
    background: #7ab80f;
    padding: 18px;
    color: #fff !important;
    font-weight: 700 !important;
    border-radius: 24px;
  }

  .urdu-quran {
    background: #f1f1f1;
    padding: 14px 14px 21px 15px;
    margin-bottom: 30px
  }

  .urdu-quran h2 {
    font-size: 22px !important;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 45px;
  }
</style>
@section('content')
<section id="pricing" class="py-5 bg-light">
  <div class="container">
    <!-- ✅ Main Page Heading (only one H1) -->
    <h1 class="text-center mb-5"><strong>Quran Courses Fee (Hadiya)</strong></h1>

    <!-- 🌍 Global Fees Section -->
    <div class="row mb-5">
      <div class="col-12">
        <h2 class="text-center mb-4"><strong>International Fee of Quran Courses</strong></h2>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
        <div class="pricingTable">
          <div class="pricingTable-header">
            <h3 class="title">Free</h3>
            <div class="price-value"><span>$</span>0</div>
          </div>
          <ul class="content-list">
            <li><strong>Lecture Duration:</strong> 30 Minutes</li>
            <li><strong>Trial Duration: </strong>One Week</li>
            <li><strong>Admission: </strong>Free</li>
            <li class="disable"><strong>2nd Student: </strong>10% Off</li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
        <div class="pricingTable blue">
          <div class="pricingTable-header">
            <h3 class="title">3 Days / Week</h3>
            <div class="price-value"><span>$</span>40</div>
          </div>
          <ul class="content-list">
            <li><strong>Lecture Duration:</strong> 30 Minutes</li>
            <li><strong>Days: </strong>3 Per&nbsp;Week</li>
            <li><strong>Admission: </strong>Free</li>
            <li class="disable"><strong>2nd Student: </strong>10% Off</li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
        <div class="pricingTable green">
          <div class="pricingTable-header">
            <h3 class="title">5 Days / Week</h3>
            <div class="price-value"><span>$</span>55</div>
          </div>
          <ul class="content-list">
            <li><strong>Lecture Duration:</strong> 30 Minutes</li>
            <li><strong>Days: </strong>5 Per&nbsp;Week</li>
            <li><strong>Admission: </strong>Free</li>
            <li class="disable"><strong>2nd Student: </strong>10% Off</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- 🇬🇧 United Kingdom Fees Section -->
    <div class="row">
      <div class="col-12">
        <h2 class="text-center mb-4"><strong>United Kingdom Fee of Quran Courses</strong></h2>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
        <div class="pricingTable">
          <div class="pricingTable-header">
            <h3 class="title">Free</h3>
            <div class="price-value"><span>£</span>0</div>
          </div>
          <ul class="content-list">
            <li><strong>Lecture Duration:</strong> 30 Minutes</li>
            <li><strong>Trial Duration: </strong>One Week</li>
            <li><strong>Admission: </strong>Free</li>
            <li class="disable"><strong>2nd Student: </strong>10% Off</li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
        <div class="pricingTable blue">
          <div class="pricingTable-header">
            <h3 class="title">3 Days / Week</h3>
            <div class="price-value"><span>£</span>32</div>
          </div>
          <ul class="content-list">
            <li><strong>Lecture Duration:</strong> 30 Minutes</li>
            <li><strong>Days: </strong>3 Per&nbsp;Week</li>
            <li><strong>Admission: </strong>Free</li>
            <li class="disable"><strong>2nd Student: </strong>10% Off</li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
        <div class="pricingTable green">
          <div class="pricingTable-header">
            <h3 class="title">5 Days / Week</h3>
            <div class="price-value"><span>£</span>44</div>
          </div>
          <ul class="content-list">
            <li><strong>Lecture Duration:</strong> 30 Minutes</li>
            <li><strong>Days: </strong>5 Per&nbsp;Week</li>
            <li><strong>Admission: </strong>Free</li>
            <li class="disable"><strong>2nd Student: </strong>10% Off</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection