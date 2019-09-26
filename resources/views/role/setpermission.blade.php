@extends('layout')
@section('title','Set Permission')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card rounded-0">
                    <div class="card-header">
                        <span style="font-size: 24px;">Set Permission in {{$role->name}}</span>
                        {{--<a href="{{route('role.index')}}" class="btn btn-info float-right rounded-0">All Roles</a>--}}
                    </div>
                    <form action="{{route('set.permission',$role->id)}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <select class="custom-select" name="permission">
                                    @foreach($permissions as $permission)
                                    <option value="{{$permission->id}}">{{$permission->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('role.index')}}" class="btn btn-warning rounded-0">Back</a>
                            <button type="submit" class="btn btn-success float-right rounded-0 mb-2">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection