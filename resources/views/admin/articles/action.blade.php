@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="row g-5 mb-5">
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">{{isset($category) ? __('Edit category') : __('Create new category')}}</h4>
          <form class="needs-validation" method="POST" action="{{isset($category) ? route('categories.update', $category->id) : route('categories.store')}}">
            @csrf
            @if (isset($category))
                @method('PUT')
            @endif
            <div class="row g-3">
              <div>
                <label for="firstName" class="form-label">Category title:</label>
                <input type="text" name="name" class="form-control" id="firstName" placeholder="" value="{{isset($category) ? $category->name : ''}}" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
  
            <button class="w-100 btn btn-primary btn-lg" type="submit">{{isset($project) ? __('Save changes') : __('Create new')}}</button>
          </form>
        </div>
      </div>
@endsection