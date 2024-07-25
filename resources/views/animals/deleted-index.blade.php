@extends('layouts.app')

@section('page-title')
    Animal index
@endsection

@section('main-content')
<main>
    <div class="container">
        <h1 class="text-center">Deleted animal index</h1>
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
                            <form action="{{ route('animals.restore', $animal)}}" method="POST" class="d-inline-block"
                            data-animal-id="{{ $animal->id }}" data-animal-name="{{ $animal->common_name }}">
                                @method('PATCH')
                                @csrf
                                <button type="submit" class="btn btn-warning animal-delete">Restore</button>
                            </form>
                            <form action="{{ route('animals.permanent.delete', $animal)}}" method="POST" class="d-inline-block animal-delete"
                            data-animal-id="{{ $animal->id }}" data-animal-name="{{ $animal->common_name }}">
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


