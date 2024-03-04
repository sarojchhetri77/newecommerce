@extends('backend.layouts.main')
@section('page-title',$store->name)
@section('main-content')

    <div class="card">

        <h3>{{$store->user->email}}</h3>
        <h3>{{$store->name}}</h3>
        <h3>{{$store->email}}</h3>
    </div>
@endsection