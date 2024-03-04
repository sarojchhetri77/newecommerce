@extends('backend.layouts.main')
@section('page-title','Store Create')
@section('main-content')
@error('images')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="p-1">
  <a class="btn btn-primary btn-sm " href="{{route('stores.index')}}" ><i class="fa-solid fa-eye px-1"></i>view </a>
</div>
<div class="card">
    <div class="col-xxl">
      <div class=" mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Add Store</h5>
        </div>
        <div class="card-body">
          <form action="{{route('file.store',["id" => $id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="image">File</label>
              <div class="col-sm-10">
                <input type="file" name="images" class="form-control" id="image" />
              </div>
       
            </div>
         
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection