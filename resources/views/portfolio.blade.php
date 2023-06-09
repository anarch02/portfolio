@extends('layouts.app')

@section('content')

    
  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <x-breadcrumb></x-breadcrumb>
    <!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>
        
        @if ($projects)
        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

          @foreach ($projects as $project)
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
            <div class="portfolio-item">
              <img src="{{$project->images[0]->path}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>
                  {{$project->name}}
                </h3>
                <div>
                  <a href="{{$project->images[0]->path}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{route('portfolio.details', $project->id)}}" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
        @else
            {{__('app.null_message')}}
        @endif
        

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
@endsection
