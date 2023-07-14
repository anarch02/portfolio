@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="row">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Social media</span>
            <span class="badge bg-primary rounded-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div class="text-center">
                <h6 class="my-0"><i class="bi bi-instagram"></i></h6>
                <small class="text-body-secondary">Instagram</small>
              </div>
              <input type="checkbox" class="form-check-input" id="save-info">
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div class="text-center">
                <h6 class="my-0"><i class="bi bi-facebook"></i></h6>
                <small class="text-body-secondary">Facebook</small>
              </div>
              <input type="checkbox" class="form-check-input" id="save-info">
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div class="text-center">
                <h6 class="my-0"><i class="bi bi-twitter"></i></h6>
                <small class="text-body-secondary">Twitter</small>
              </div>
              <input type="checkbox" class="form-check-input" id="save-info">
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>
        </div>

        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">{{isset($project) ? __('Edit project') : __('Create new project')}}</h4>
          <form class="needs-validation" novalidate="">
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Project title:</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="{{isset($project) ? $project->name : ''}}" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
  
              <div class="col-sm-6">
                <label for="lastName" class="form-label">Project url:</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="{{isset($project) ? $project->url : ''}}" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
  
              <div class="col-12">
                <label for="username" class="form-label">Description:</label>
                <div class="input-group has-validation">
                  <textarea name="description" class="form-control" id="" cols="30" rows="10">{{isset($project) ? $project->description : ''}}</textarea>
                </div>
              </div>
  
  
              <div class="col-md-12">
                <label for="country" class="form-label">Tags</label>
                
                <select id="selectElement" class="@error('tags') border-danger @enderror" name="tags[]" multiple>
                  @foreach ($tags as $id => $name)
                    @if (isset($project))
                      @foreach ($project->tags as $item)
                      @if ($item->id == $id)
                        <option selected value="{{$id}}"> {{$name}} </option> 
                      @else
                        <option value="{{$id}}"> {{$name}} </option>                          
                      @endif
                      @endforeach
                  @endif
                  @endforeach
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
                
              </div>
  
            <hr class="my-4">
  
            <div class="col-12">
              <div class="mb-4 d-flex flex-column gap-3 align-items-center justify-content-center">
                @if (isset($project))
                <div class="image-zoom-section">
                    <div id="carouselExample" class="carousel slide">
                      <div class="carousel-inner">
                        @foreach ($project->images as $key => $img)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                          <img src="{{$img->path}}" class="d-block w-100" alt="...">
                        </div>
                        @endforeach
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                @endif
            
            <button type="button" data-bs-toggle="modal" data-bs-target="#addImage" class="btn btn-outline-dark btn-sm radius-30 px-4">
              <i class="bi bi-card-image"></i>{{isset($project) ? __('Add new image') : __('Add images')}}</button>
          </div>
            </div>
  
            <hr class="my-4">
  
            <button class="w-100 btn btn-primary btn-lg" type="submit">{{isset($project) ? __('Save changes') : __('Create new')}}</button>
          </form>
        </div>
      </div>

      <x-modal modalName="addImage">
        <form action="#" method="post">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Adding images</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <label for="images">Choose a file</label>
              <input class="form-control inputfile" type="file" name="images" id="images">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </form>
      </x-modal>
@endsection