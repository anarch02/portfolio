

  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light"><a href="/"><span>Rakhmatjonov</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html"><img src="{{Vite::asset('resources/img/logo.png')}}" alt="" class="img-fluid"></a> --}}
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          @foreach($menu as $item)
          <li><a @if($item['active']) class="active " @endif  href="{{route($item['route'])}}">{{__('app.' . $item['title']) }}</a></li>
          @endforeach
          <li class="dropdown"><a href="#"><span> {{__('app.lang')}} </span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="{{route('lang', 'en')}}">English</a></li>
              <li><a href="{{route('lang', 'ru')}}">Русский</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->