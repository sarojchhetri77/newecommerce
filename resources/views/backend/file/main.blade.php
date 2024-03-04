@extends('backend.layouts.main')
@section('page-title', 'Store Create')
@section('main-content')
    <div class="p-1">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-plus pe-1"></i> Add
        </button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('file.store',["id"=>$id,"sd"=>1])}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="image">File</label>
                        <div class="col-sm-10">
                          <input type="file" name="images" class="form-control" id="image" />
                        </div>
                 
                      </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">View Images</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="text-white">
                    <tr class="bg-primary">
                        <th class="text-white">S.N</th>
                        <th class="text-white">Image</th>
                        <th class="text-white">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($images->isNotEmpty())
                        @foreach ($images as $image)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img width="100px" src="{{ asset('uploads/' . $image->name) }}" alt="">
                                </td>
                                <td>
                                    <form action="{{route('file.destroy', ['file' => $image->id, 'store' => $id])}}" method="POST">
                                    @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">
                                <h6 class="text-center">--------Please add the Image first----------</h6>
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
@endsection
