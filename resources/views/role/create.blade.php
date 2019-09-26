@extends('layout')
@section('title','Create')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card rounded-0">
                    <div class="card-header">
                        <span style="font-size: 24px;">Create Role</span>
                        <a href="{{route('role.index')}}" class="btn btn-info float-right rounded-0">All Roles</a>
                    </div>
                    <form action="{{route('role.store')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control rounded-0" id="name" name="name" placeholder="Role Name">
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