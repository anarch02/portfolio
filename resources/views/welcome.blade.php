@extends('layouts.app')

@section('content')

     <!-- ======= Hero No Slider Section ======= -->
  <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h2>{{__('hero.title')}}</h2>
          <p>{{__('hero.prev')}}</p>
          <a href="" class="btn-get-started ">Read More</a>
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
          <h2>Features</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{Vite::asset('resources/img/features-4.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3> Planning.</h3>
            <p>
              During this stage, we define the project goals, discuss requirements, and outline the key functionalities. We also develop an action plan, create a schedule, and identify the resources needed to execute the project.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Project charter: provides a general overview of the project. It describes the project’s reasons, goals, objectives, and constraints, among other aspects.</li>
              <li><i class="bi bi-check"></i> Statement of Work: A statement of work defines the project’s scope, schedule, deliverables, milestones, and tasks.</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{Vite::asset('resources/img/features-1.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Development.</h3>
            <p>
              In this stage, we create and build the project. In the case of Laravel web development, we write code, design databases, create the user interface, and implement the required features. All development is done to adhere to the specified project requirements and specifications.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{Vite::asset('resources/img/features-2.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Testing.</h3>
            <p>The testing stage is crucial to ensure the quality and functionality of the project. We perform various types of testing, including unit testing, integration testing, and system testing, to verify that all functions work correctly and meet expectations.</p>
            <ul>
              <li><i class="bi bi-check"></i> Unit Testing.</li>
              <li><i class="bi bi-check"></i> Integration Testing.</li>
              <li><i class="bi bi-check"></i> System Testing.</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{Vite::asset('resources/img/features-3.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Deployment</h3>
            {{-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> --}}
            <p>
              The final stage of the project is deployment. Here, we deploy the finalized project to hosting or a server, making it accessible to the public. It is important to ensure that all settings, configurations, and site security are properly configured. Once successfully deployed, the project is ready for use and publication.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->
@endsection