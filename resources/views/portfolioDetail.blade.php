@extends('layouts.app')

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Portfoio Details</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Project Details</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/portfolio/portfolio-details-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web development</li>
              <li><strong>Client</strong>: Seff Interiors</li>
              <li><strong>Project date</strong>: 01 DEcembefr, 2022</li>
              <li><strong>Project URL</strong>: <a href="#">www.seffinteriors.co.ke</a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>This is an example of portfolio detail</h2>
            <p>
                Seff Interiors is an e-commerce platform centered towards giving the best and fast experience for customers to buy carpets and interior design products.
                 I call it a frictionless process from start to finish.
            </p>
            <div class="">
                <h3>Technologies</h3>
                <span>Laravel</span> <span>Vue</span> <span>jquery</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

@endsection
