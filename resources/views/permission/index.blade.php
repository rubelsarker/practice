@extends('layout')
@section('title','All Permission')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card rounded-0">
                    <div class="card-header">
                        <span style="font-size: 24px;">All Permission</span>
                        <a href="{{route('permission.create')}}" class="btn btn-success float-right rounded-0">Create Permission</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Guard Name</th>
                                <th scope="col">Created At</th>
                                {{--<th scope="col" class="text-center">Action</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $key => $permission)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td>{{$permission->name}}</td>
                                <td>{{$permission->guard_name}}</td>
                                <td>{{$permission->created_at->toDateString()}}</td>
                                {{--<td class="text-center">--}}
                                    {{--<a href="{{route('tag.show',$tag->id)}}" class="btn btn-primary rounded-0"><i class="far fa-eye"></i></a>--}}
                                    {{--<a href="{{route('tag.edit',$tag->id)}}" class="btn btn-info rounded-0"><i class="far fa-edit"></i></a>--}}
                                    {{--<a onclick="event.preventDefault();document.getElementById('form-delete-{{$tag->id}}').submit();"--}}
                                       {{--href="" class="btn btn-danger rounded-0"><i class="far fa-trash-alt"></i></a>--}}
                                    {{--<a onclick="if(confirm('Are you sure, you want to delete this ?')){--}}
                                            {{--event.preventDefault();--}}
                                            {{--document.getElementById('form-delete-{{$tag->id}}').submit();--}}
                                            {{--}--}}
                                            {{--else {--}}
                                                {{--event.preventDefault();--}}
                                            {{--}--}}
                                            {{--"--}}
                                        {{--href="" class="btn btn-danger rounded-0"><i class="far fa-trash-alt"></i></a>--}}
                                    {{--<form id="form-delete-{{$tag->id}}" action="{{route('tag.destroy',$tag->id)}}" method="post" style="display: none;">--}}
                                        {{--@csrf--}}
                                        {{--@method('DELETE')--}}
                                    {{--</form>--}}
                                {{--</td>--}}
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>

    </script>
@endsection