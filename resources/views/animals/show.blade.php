@extends('layouts.app')

@section('page-title')
    {{$animal->common_name}}
@endsection

<div class="container">
    <div class="card">
        <img src="{{$animal->image}}" class="card-img-top" alt="{{$animal->common_name}}">
        <div class="card-body">
            <h5 class="card-title">{{$animal->scientific_name}}</h5>
            <p class="card-text">Also known as: {{$animal->common_name}}</p>
            <a href="{{route('animals.index', $animal)}}" class="btn btn-primary">Go to the detail</a>
        </div>
    </div>
</div>
