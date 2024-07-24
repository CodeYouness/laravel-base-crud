@extends('layouts.app')

@section('page-title')
    Create new animal
@endsection

@section('main-content')
    <main class="container">
        <h1 class="text-center">
            Create a new animal
        </h1>
        <div class="row">
            <div class="col-6 m-auto">
                <form action="{{ route('animals.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="common_name" class="form-label">Common name:</label>
                        <input type="text" class="form-control" id="common_name" aria-describedby="common_name">
                    </div>
                    <div class="mb-3">
                        <label for="scientific_name" class="form-label">Scientific name:</label>
                        <input type="text" class="form-control" id="scientific_name">
                    </div>
                    <div class="mb-3">
                        <label for="habitat" class="form-label">Habitat:</label>
                        <input type="text" class="form-control" id="habitat">
                    </div>
                    <div class="mb-3">
                        <label for="class" class="form-label">Class:</label>
                        <input type="text" class="form-control" id="class">
                    </div>
                    <div class="mb-3">
                        <label for="family" class="form-label">Family:</label>
                        <input type="text" class="form-control" id="family">
                    </div>
                    <div class="mb-3">
                        <label for="average_life" class="form-label">Average life::</label>
                        <input type="number" class="form-control" id="average_life">
                    </div>
                    <div class="mb-3">
                        <label for="average_weight" class="form-label">Average weight:</label>
                        <input type="number" class="form-control" id="average_weight">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image url:</label>
                        <input type="text" class="form-control" id="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </main>
@endsection
