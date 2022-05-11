@extends('layouts.main')
@section('title', 'Products')

@section('container')

  <div class="container mt-5">
    <h1 class="fw-bold mb-3">Our Products</h1>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 g-md-4">
      @foreach ($shoes as $shoe)
        <div class="col">
          <div class="card rounded-10 p-3">
            <div class="position-absolute badge bg-light mx-3 my-3">
              <a class="text-decoration-none text-dark" href="#">{{ $shoe }}</a>
            </div>
            <img src="https://source.unsplash.com/300x200/?{{ $shoe }}" class="card-img-top rounded-10" alt="">
            <div class="card-body p-0 mt-3">
              <h5 class="card-title m-0">
                <a class="text-decoration-none link-dark" href="#">
                  {{ $shoe }}
                </a>
              </h5>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

@endsection
