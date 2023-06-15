@extends('layouts.app')

@section('content')

     <!-- ======= Hero No Slider Section ======= -->
  <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h2>{{__('hero.title')}}</h2>
          <p>{{__('hero.prev')}}</p>
          <a href="" class="btn-get-started ">{{__('app.more')}}</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero No Slider Sectio -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <x-services></x-services>
    <!-- End Services Section -->


    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>{{__('hero.features')}}</h2>
          <p>{{__('hero.features_desc')}}</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{Vite::asset('resources/img/features-4.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>{{__('hero.planning')}}</h3>
            <p>
              {{__('hero.plannig_desc')}}
            </p>
            <ul>
              @foreach (__('hero.planning_items') as $item)
              <li><i class="bi bi-check"></i> {{$item}}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{Vite::asset('resources/img/features-1.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>{{__('hero.development')}}</h3>
            <p>
              {{__('hero.development_desc')}}
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{Vite::asset('resources/img/features-2.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3> {{__('hero.testing')}}</h3>
            <p>{{__('hero.testing_desc')}}</p>
            <ul>
              @foreach (__('hero.testing_items') as $item)
              <li><i class="bi bi-check"></i> {{$item}}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{Vite::asset('resources/img/features-3.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>{{__('hero.deployment')}}</h3>
            {{-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> --}}
            <p>
              {{__('hero.deployment_desc')}}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->
@endsection