@extends('backend.layouts.main')
@section('page-title', 'Category')
@section('main-content')

    <div class="card">
        <div class="col-xxl">
            <div class=" mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add Category</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('store.category.store',['id' => $id]) }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="storename">Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="storename"
                                    placeholder="Name" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="category">Choose Parent Category</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                    <option selected>Choose main Category</option>
                                    @foreach ($pcategories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                  </select>
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
    {{-- table to show the category --}}
    <div class="card mt-5">
        <h5 class="card-header">View Category</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="text-white">
                    <tr class="bg-primary">
                        <th class="text-white">S.N</th>
                        <th class="text-white">Name</th>
                        <th class="text-white">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($categories->isNotEmpty())
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $category->title }}
                                </td>
                                <td>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
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
                                <h6 class="text-center">--------Please add the category first----------</h6>
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>

@endsection
