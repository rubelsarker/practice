@extends('layout')
@section('title','Tag Details')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card ">
                    <div class="card-header">
                        <span class="text-info" style="font-size: 24px;">Tag Details</span>
                        <a href="{{route('tag.index')}}" class="btn btn-info float-right rounded-0">All Tags</a>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="text-muted">{{$tag->name}}</h2>
                            </div>
                            <div class="card-body bg-info">
                               <p class="text-white"><strong>Slug :</strong> {{$tag->slug}}</p>
                               <p class="text-white"><strong>Created At :</strong> {{$tag->created_at->diffForHumans()}}</p>
                               <p class="text-white"><strong>Updated At :</strong> {{$tag->updated_at->toDateString()}}</p>
                                <a onclick="event.preventDefault();
                                        document.getElementById('form-delete-{{$tag->id}}').submit();
                                        "class="btn btn-danger btn-lg rounded-0">Delete</a>
                                <form id="form-delete-{{$tag->id}}" action="{{route('tag.destroy',$tag->id)}}" method="post" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection