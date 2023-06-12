@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1> 
  <h2> </h2>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
    </div>
    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
      <svg class="bi"><use xlink:href="#calendar3"></use></svg>
      This week
    </button>
  </div>
</div>

<canvas class="my-4 w-100" id="myChart" width="867" height="366" style="display: block; box-sizing: border-box; height: 366px; width: 867px;"></canvas>



@endsection