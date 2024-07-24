@extends('layouts.app')

@section('page-title')
    {{$animal->common_name}}
@endsection

@section('main-content')
<div class="container">
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message')}}
    </div>
@endif
    <div class="card w-50 m-auto">
        <div class="card-header">
            <h5 class="card-title">{{$animal->scientific_name}}</h5>
        </div>
        <img src="{{$animal->image}}" class="card-img-top" alt="{{$animal->common_name}}">
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$animal->common_name}}</h6>
            <p class="card-text">Commonly they live for {{$animal->average_life}} years, and their habitat is the {{$animal->habitat}},</p>
            <div class="d-flex justify-content-between">
                <a href="{{route('animals.index')}}" class="btn btn-primary">Return to the list</a>
                <a href="{{route('animals.edit', $animal)}}" class="btn btn-warning">Edit information</a>
            </div>
        </div>
    </div>
</div>
@endsection
