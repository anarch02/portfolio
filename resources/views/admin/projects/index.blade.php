@extends('layouts.admin')

@section('content')

<h2>Projects list <x-create></x-create></h2>

{{-- @dump($myProperty) --}}

<div class="table-responsive small">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">URL</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <td>
                {{$project->name}}
            </td>
            <td>
              {{$project->url}}
            </td>
            {{-- <td>placeholder</td> --}}
            <td>
                <a href="#" class="bi bi-eye"></a>
                <a href="#" class="bi bi-pen"></a>
                <a href="#" class="bi bi-trash"></a>
            </td>
          </tr>
        @endforeach
     
      
    </tbody>
  </table>
</div>
@endsection