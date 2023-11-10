@extends('master')
@section('content')

<header class="bg-dark text-white text-center py-5">
    <h1>Welcome to Our Pharmaceuticals Company</h1>
    <p>Providing high-quality healthcare solutions</p>
  </header>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6">
        <img src="https://via.placeholder.com/600x400" alt="Pharmaceuticals Image" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h2>Our Services</h2>
        <ul class="list-unstyled">
          <li><strong>1. Research & Development</strong> - Advancing healthcare through innovative research.</li>
          <li><strong>2. Manufacturing</strong> - State-of-the-art facilities for pharmaceutical production.</li>
          <li><strong>3. Distribution</strong> - Efficient distribution network for timely delivery.</li>
          <li><strong>4. Quality Assurance</strong> - Ensuring the highest standards of quality and safety.</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Call-to-Action Section -->
  <section class="call-to-action text-center text-white">
    <div class="container">
      <h2>Partner with PharmaCo for Your Healthcare Needs</h2>
      <p>Contact us today to explore our services and products.</p>
      <a href="#" class="btn btn-primary btn-lg">Contact Us</a>
    </div>
  </section>

  <section class="bg-light py-5">
    <div class="container">
      <h2>Featured Products</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/300x200" alt="Product 1" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text">Description of Product 1.</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/300x200" alt="Product 2" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Product 2</h5>
              <p class="card-text">Description of Product 2.</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/300x200" alt="Product 3" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Product 3</h5>
              <p class="card-text">Description of Product 3.</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials text-center">
    <div class="container">
      <h2>What Our Clients Say</h2>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card">
            <div class="card-body">
              <p class="card-text">PharmaCo has been our trusted partner for years. Their commitment to quality and innovation is unparalleled.</p>
              <p class="card-text"><strong>- John Doe, CEO of HealthCare Inc.</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection