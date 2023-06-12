<section class="services">
    <div class="container">

      <div class="row">
        @foreach ($services as $item)
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box {{$item['color']}}">
              <div class="icon"><i class='{{$item['icon']}}'></i></div>
              <h4 class="title"><a href=""> {{__('services.'.$item['name'].'.name')}} </a></h4>
              <p class="description">{{__('services.' . $item['name'].'.description')}}</p>
            </div>
          </div>
        @endforeach

      </div>

    </div>
  </section>