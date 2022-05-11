@extends('layouts.main')
@section('title', 'Profile')

@section('container')

  <div class="container mt-5">
    <h1 class="fw-bold mb-3 text-center">Company Profile</h1>

    <div class="d-flex justify-content-center">
      <div class="card mb-3" style="max-width: 750px">
        <div class="row g-0">
          <div class="col">
            <img src="https://source.unsplash.com/300x200/?shoes" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col">
            <div class="card-body">
              <h5 class="card-title">{{ $name }}</h5>
              <p class="card-text">{{ $desc }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
