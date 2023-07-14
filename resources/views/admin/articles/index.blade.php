@extends('layouts.admin')

@section('content')

<h2>Categories list <a href="{{route('categories.create')}}" class="bi bi-plus"></a></h2>

{{-- @dump($myProperty) --}}

<div class="table-responsive small">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>
                {{$category->name}}
            </td>

            <td>
              <a href="#" class="bi bi-eye text-secondary"></a>
              <a href="{{route('categories.edit', $category->id)}}" class="bi bi-pen text-warning"></a>
              <a href="{{route('categories.edit', $category->id)}}" class="bi bi-trash text-danger"></a>
            </td>
          </tr>
        @endforeach
     
      
    </tbody>
  </table>
</div>
@endsection