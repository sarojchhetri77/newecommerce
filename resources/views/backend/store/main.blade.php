@extends('backend.layouts.main')
@section('page-title','Store Create')
@section('main-content')
<div class="p-1">
  <a class="btn btn-primary btn-sm " href="{{route('stores.create')}}" ><i class="fa-solid fa-plus px-1"></i>add</a>
</div>
<div class="card">
    <h5 class="card-header">View Stores</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead class="text-white">
          <tr class="bg-primary">
            <th class="text-white">S.N</th>
            <th class="text-white">Store Name</th>
            <th class="text-white">Email</th>
            <th class="text-white">Status</th>
            <th class="text-white">Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($stores as $store)
                
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$store->name}}</td>
            <td>{{$store->email}}</td>
            <td>
                @php
                    $statusClass = '';
            
                    switch($store->status) {
                        case 'pending':
                            $statusClass = 'badge bg-label-danger'; 
                            break;
                        case 'approved':
                            $statusClass = 'badge bg-label-success'; 
                            break;
                        case 'denied':
                            $statusClass = 'badge bg-label-danger'; 
                            break;
                        default:
                            $statusClass = 'badge bg-label-primary'; 
                   
                             }         @endphp
            
                    <span class="badge {{ $statusClass }} me-1">{{ $store->status }}</span>
            </td>
            @if ($store->status == "approved")
                
            <td>
                <a class="btn btn-primary btn-sm " href="{{route('storehome',$store->id)}}" ><i class="fa-solid fa-eye px-1"></i>View</a>
            </td>
            @endif

          </tr>
          @endforeach
         
        </tbody>
      </table>
    </div>
  </div>
@endsection