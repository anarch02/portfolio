<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2> {{__('app.'. $page)}}</h2>

        <ol>
          <li><a href="/" class="text-dark">{{__('app.home')}}</a></li>
          <li><a href="{{route($page)}}">{{__('app.'. $page)}}</a></li>
          {{-- <li>Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia reiciendis</li> --}}
        </ol>
      </div>

    </div>
  </section>