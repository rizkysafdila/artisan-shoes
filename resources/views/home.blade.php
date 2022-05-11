@extends('layouts.main')
@section('title', 'Home')

@section('container')

  <section id="home" class="hero-section bg-violet-100 p-3 p-md-4 p-lg-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-1 text-md-end mb-5 mb-md-0">
          <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded-3">
              <div class="hero-img carousel-item active">
                <img class="text-end img-fluid" src="https://source.unsplash.com/300x200/?shoes" class="d-block" alt="..." width="100%">
              </div>
              <div class="hero-img carousel-item">
                <img class="text-end img-fluid" src="https://source.unsplash.com/300x200/?shoes" class="d-block" alt="..." width="100%">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-0">
          <h5 class="fw-light text-muted">WELCOME TO</h5>
          <h1 class="display-3 fw-bold lh-sm">ARTISAN SHOES</h1>
          <p class="hero-desc">
            Toko sepatu terbaik No.1 di Indonesia
          </p>
          <div class="social-media d-flex my-4">
            <p class="text-secondary">Follow Us</p>
            <a class="media-icon link-secondary ms-3" href="#">
              <i class="fa-brands fa-instagram fa-2x"></i>
            </a>
            <a class="media-icon link-secondary ms-3" href="#">
              <i class="fa-brands fa-youtube fa-2x"></i>
            </a>
          </div>
          <button type="button" class="btn btn-primmary btn-cta" data-bs-toggle="modal" data-bs-target="#aboutUs">
            About Us
          </button>
        </div>
      </div>
    </div>
  </section>

@endsection
