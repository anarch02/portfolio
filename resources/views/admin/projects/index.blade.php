@extends('layouts.admin')

@section('content')

<h2>Projects list 
  <x-create>
    <div class="modal fade" id="modalDialogCreateForm" tabindex="-1">
      <div class="modal-dialog modal-dialog-scrollable">
          <form id="add-form" action="{{route($page_info['create_route'])}}" method="post">
              @csrf
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Create new</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      @foreach ($page_info['form']['inputs'] as $key => $item)
                          <div class="mb-2 form-group">
                              <label for="{{$key}}" class="form-label">{{$item['label']}}</label>
                              <input type="{{$item['type']}}" class="form-control" id="{{$key}}" name="{{$key}}" required>
                          </div>
                      @endforeach
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
  </x-create>
</h2>

<x-table :table="$page_info['table']">
  @foreach ($objects as $object)
    <tr>
      @foreach ($page_info['table']['tbody'] as $item)
        <td>
          {{$object->$item}}
        </td>
      @endforeach
      
      <td>
          <a href="#" class="bi bi-eye"></a>
          <a href="#" class="bi bi-pen"></a>
          <a href="#" class="bi bi-trash"></a>
      </td>
    </tr>
  @endforeach
</x-table>
@endsection