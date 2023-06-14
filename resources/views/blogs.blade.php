@extends('layouts.app')

@section('content')

<main id="main">

    <!-- ======= Blog Section ======= -->
    <x-breadcrumb></x-breadcrumb>
    <!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        @if ($articles && $tags)
        <div class="row">

          <div class="col-lg-8 entries">

            @foreach ($articles as $article)
            <article class="entry">

              <div class="entry-img">
                <img src="{{$article->image}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">
                  {{$article->title}}
                </a>
              </h2>

              {{-- <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div> --}}

              <div class="entry-content">
                <p>
                  {{$article->preview}}
                </p>
                <div class="read-more">
                  <a href="{{route('article', $article->id)}}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            @endforeach
            

           
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <x-sidebar></x-sidebar>
        </div>
        @else
            {{__('app.null_message')}}
        @endif
        

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection
