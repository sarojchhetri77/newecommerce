@extends('backend.layouts.main')
@section('page-title','product view')
@section('main-content')
<div class="p-1">
  <a class="btn btn-primary btn-sm " href="{{route('store.product.create',['id' => request('id')])}}" ><i class="fa-solid fa-plus px-1"></i>add</a>
</div>
<div class="card">
    <h5 class="card-header">View Products</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="text-white">
          <tr class="bg-primary">
            <th class="text-white">S.N</th>
            <th class="text-white">Product Name</th>
            <th class="text-white">Price</th>
            <th class="text-white">stock</th>
            <th class="text-white">image</th>
            <th class="text-white">Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($products as $product)
                
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->stoke}}</td>
            <td>
        <img width="50px" src="{{ asset('../uploads/' . $product->image->name) }}" alt="">
      </td>
      <td>
        <a class="btn btn-primary btn-sm " href="{{route('product.create', ["id" => $id])}}" ><i class="fa-solid fa-eye"></i></a>
        <a class="btn btn-primary btn-sm " href="{{route('product.create', ["id" => $id])}}" ><i class="fa-solid fa-edit"></i></a>
        <a class="btn btn-danger btn-sm " href="{{route('product.create', ["id" => $id])}}" ><i class="fa-solid fa-trash"></i></a>
      </td>
              
          </tr>
          @endforeach
         
        </tbody>
      </table>
    </div>
  </div>
@endsection