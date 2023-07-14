@extends('layouts.app')

@section('content')
<main id="main">

    <!-- ======= About Us Section ======= -->
    <x-breadcrumb></x-breadcrumb>
    <!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{Vite::asset('resources/img/me.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3> {{__('about.title')}} </h3>
            <p class="fst-italic">
              {{__('about.prev')}}
            </p>

            <ul>
              @foreach (__('about.items') as $item)
              <li><i class="bi bi-check2-circle"></i> {{$item}}</li>
              @endforeach
            </ul>

            <p>
              {{__('about.decription')}}
            </p>

            
            

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

@endsection
