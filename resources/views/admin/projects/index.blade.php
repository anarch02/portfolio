@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <h2>Projects list
      <a href="{{route('projects.create')}}" class="bi bi-plus">
      </a>
    </h2>
</div>


<x-table :table="$page_info['table']">
  @foreach ($objects as $object)
    <tr>
      @foreach ($page_info['table']['tbody'] as $item)
        <td>
          {{$object->$item}}
        </td>
      @endforeach
      
      <td>
          <a href="#" class="bi bi-eye text-secondary"></a>
          <a href="{{route('projects.edit', $object->id)}}" class="bi bi-pen text-warning"></a>
          <a href="{{route('projects.edit', $object->id)}}" class="bi bi-trash text-danger"></a>
      </td>
    </tr>
  @endforeach
</x-table>
@endsection