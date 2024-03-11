@extends('backend.layouts.main')
@section('page-title', 'Product Create')
@section('main-content')
    {{-- error message --}}
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('image_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('stock')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('costprice')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    {{-- end of the error message --}}
    <div class="p-1">
        <a class="btn btn-primary btn-sm " href="{{ route('store.product.index',['id' => request('id')]) }}"><i
                class="fa-solid fa-eye px-1"></i>view </a>
    </div>
    <div class="card">
        <div class="col-xxl">
            <div class=" mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add Store</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('store.product.store',["id" => $id]) }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="product">Product Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="product"
                                    placeholder="Name" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Price</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="price" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Upload Image</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    @include('backend.model')
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Stock</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="stock" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Cost Price</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" name="costprice" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Description</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <textarea name="description" class="form-control" id="" cols="5" rows="5"></textarea>
                                </div>
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
