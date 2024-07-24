@extends('layouts.app')

@section('page-title')
    Animal index
@endsection

@section('main-content')
<main>
    <div class="container">
        <h1 class="text-center">Animal index</h1>
        @if (session('deleted-message'))
    <div class="alert alert-danger">
        {{ session('deleted-message')}}
    </div>
@endif
        <div class="row">
            @foreach ($animals as $animal)
                <div class="col-3">
                    <div class="card mb-3">
                        <img src="{{$animal->image}}" class="card-img-top" alt="{{$animal->common_name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$animal->scientific_name}}</h5>
                            <p class="card-text">Also known as: {{$animal->common_name}}</p>
                            <a href="{{ route('animals.show', $animal) }}" class="btn btn-primary">Details</a>
                            <a href="{{ route('animals.edit', $animal) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('animals.destroy', $animal)}}" method="POST" class="d-inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger animal-delete">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection

@section('custom-scripts')
    @vite('resources/js/delete.js')
@endsection


