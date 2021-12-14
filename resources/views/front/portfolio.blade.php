@extends('layouts.front')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        
        <div class="d-flex justify-content-start align-items-center mt-1">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Product</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach ($pcategories as $category)
              <li data-filter=".{{ $category->id }}">{{ $category->name }}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          @foreach ($portfolio as $portfolio)
          <div class="col-lg-4 col-md-6 portfolio-item {{ $portfolio->pcategory_id }}">
            <img src="{{ asset('storage/'.$portfolio->cover) }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h3>Project Information</h3>
              <ul>
                <li><strong>Name</strong>: {{ $portfolio->name }}</li>
                <li><strong>Category</strong>:  {{ $portfolio->pcategory->name }}</li>
                <li><strong>Client</strong>: {{ $portfolio->client }}</li>
                <li><strong>Project date</strong>: {{ Carbon\Carbon::parse($portfolio->date)->format("d F, Y") }}</li>
              </ul>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
@endsection