

  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Rakhmatjonov</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html"><img src="{{Vite::asset('resources/img/logo.png')}}" alt="" class="img-fluid"></a> --}}
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          @foreach($menu as $item)
          <li><a @if($item['active']) class="active " @endif  href="{{route($item['route'])}}">{{$item['title']}}</a></li>
          @endforeach
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->