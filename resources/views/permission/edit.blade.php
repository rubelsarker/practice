@extends('layout')
@section('title','Update Tag')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card rounded-0">
                    <div class="card-header">
                        <span style="font-size: 24px;">Update Tag</span>
                        <a href="{{route('tag.index')}}" class="btn btn-info float-right rounded-0">All Tags</a>
                    </div>
                    <form action="{{route('tag.update',$tag->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" value="{{$tag->name}}" class="form-control rounded-0" id="name" name="name">
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('tag.index')}}" class="btn btn-warning rounded-0">Back</a>
                            <button type="submit" class="btn btn-success float-right rounded-0 mb-2">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection