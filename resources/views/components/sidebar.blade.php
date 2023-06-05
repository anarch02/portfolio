<div class="col-lg-4">

    <div class="sidebar">

      <h3 class="sidebar-title">Search</h3>
      <div class="sidebar-item search-form">
        <form action="">
          <input type="text">
          <button type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div><!-- End sidebar search formn-->


      <h3 class="sidebar-title">Tags</h3>
      <div class="sidebar-item tags">
        <ul>
          @foreach ($tags as $tag)
          <li><a href="#">{{$tag->name}}</a></li>
          @endforeach
        </ul>
      </div><!-- End sidebar tags-->

    </div><!-- End sidebar -->

  </div><!-- End blog sidebar -->
