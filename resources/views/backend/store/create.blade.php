@extends('backend.layouts.main')
@section('page-title','Store Create')
@section('main-content')
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
          <form action="{{route('stores.store')}}" method="POST">
            @csrf
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="storename">Store Name</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="storename" placeholder="Name"  />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input
                    type="text" name="email"
                    id="basic-default-email"
                    class="form-control"
                    placeholder="storename@gmail.com"
                    />
                </div>
              </div>
            </div>
            {{-- <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
              <div class="col-sm-10">
                <input
                  type="text" name="phone"
                  id="basic-default-phone"
                  class="form-control phone-mask"
                  placeholder="9876655443"
                 />
              </div>
            </div> --}}
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