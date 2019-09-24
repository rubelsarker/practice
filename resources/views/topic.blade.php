@extends('layout')
@section('custom-css')
    <style>
        #topic li.list-group-item{
            background-color: aqua;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <ul class="list-group" id="topic">

                    <li class="list-group-item text-center bg-dark text-white"><h3>Topic we will cover</h3></li>
                    <li class="list-group-item">Image upload,show and image related work using intervation package</li>
                    <li class="list-group-item">Create dummy data for book model using seed and factory</li>
                    <li class="list-group-item">curd operation in tag</li>
                    <li class="list-group-item">default auth laravel 6 and mail configureation env file </li>
                </ul>
            </div>
        </div>

    </div>
@endsection