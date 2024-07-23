@extends('layouts.app')

@section('page-title')
    Animal index
@endsection

@section('main-content')
<main>
    <div class="container">
        <h1 class="text-center">Animal index</h1>
        <div class="row">
            @foreach ($animals as $animal)
                <div class="col-3">
                    <div class="card">
                        <img src="{{$animal->image}}" class="card-img-top" alt="{{$animal->common_name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$animal->scientific_name}}</h5>
                            <p class="card-text">Also known as: {{$animal->common_name}}</p>
                            <a href="{{ route('animals.show', $animal) }}" class="btn btn-primary">Go to the detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection

