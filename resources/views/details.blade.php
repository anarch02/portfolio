@extends('layouts.app')

@section('content')
<main id="main">

  <!-- ======= Our Portfolio Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Portfolio Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li>Portfolio Details</li>
        </ol>
      </div>

    </div>
  </section><!-- End Our Portfolio Section -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
              @foreach ($project->images as $img)
              <div class="swiper-slide">
                <img src="{{$img->path}}" alt="">
              </div>
              @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>{{$project->name}}</h3>
            <ul>
              {{-- <li><strong>Category</strong>: Web design</li>
              <li><strong>Client</strong>: ASU Company</li> --}}
              <li><strong>Project date</strong>: {{ \Carbon\Carbon::createFromFormat('Y-m-d', '1976-05-10')->format('d F Y') }}              </li>
              <li><strong>Project URL</strong>: <a href="{{$project->url}}">{{$project->url}} </a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>{{$project->preview}}</h2>
            <p>
              {{$project->description}}  
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection
