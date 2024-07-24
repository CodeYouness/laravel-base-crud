@extends('layouts.app')

@section('page-title')
    Edit {{ $animal->common_name }}
@endsection

@section('main-content')
    <main class="container">
        <h1 class="text-center">
            Editing {{ $animal->common_name }}
        </h1>
        <div class="row">
            <div class="col-6 m-auto">
                <form action="{{ route('animals.store') }}" method="POST" id="creation-form">
                    @csrf
                    <div class="mb-3">
                        <label for="common_name" class="form-label">Common name:</label>
                        <input type="text" class="form-control" id="common_name" name="common_name" value="{{ $animal->common_name}}">
                    </div>
                    <div class="mb-3">
                        <label for="scientific_name" class="form-label">Scientific name:</label>
                        <input type="text" class="form-control" id="scientific_name" name="scientific_name" value="{{ $animal->scientific_name}}">
                    </div>
                    <div class="mb-3">
                        <label for="habitat" class="form-label">Habitat:</label>
                        <input type="text" class="form-control" id="habitat" name="habitat" value="{{ $animal->habitat}}">
                    </div>
                    <div class="mb-3">
                        <label for="class" class="form-label">Class:</label>
                        <input type="text" class="form-control" id="class" name="class" value="{{ $animal->class}}">
                    </div>
                    <div class="mb-3">
                        <label for="family" class="form-label">Family:</label>
                        <input type="text" class="form-control" id="family" name="family" value="{{ $animal->family}}">
                    </div>
                    <div class="mb-3">
                        <label for="average_life" class="form-label">Average life::</label>
                        <input type="number" class="form-control" id="average_life" name="average_life" value="{{ $animal->average_life}}">
                    </div>
                    <div class="mb-3">
                        <label for="average_weight" class="form-label">Average weight:</label>
                        <input type="number" class="form-control" id="average_weight" name="average_weight" value="{{ $animal->average_weight}}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image url:</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{ $animal->image}}">
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>

                </form>
            </div>
        </div>
    </main>
@endsection

@section('custom-scripts')
    @vite('resources/js/confirm.js')
@endsection
