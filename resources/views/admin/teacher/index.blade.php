@extends('layouts.app')
@section('content')
    <div id="table-wrap">
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"> First Name</th>
                    <th scope="col"> Last Name</th>
                    <th scope="col"> Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        <th scope="row">{{$teacher->id}}</th>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->specialization}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>{{$teacher->phone}}</td>
                        <td><a href="{{route('group.show', $teacher->group->id)}}">{{$teacher->group->name}}</a></td>
                        <td>
                            <div style="display: flex">
                                <a href="{{route('teacher.create')}}"><img style="width: 30px" src="/photos/courseIcons/create.png" alt=""></a>
                                <a href="{{route('teacher.edit', $teacher->id)}}"><img style="width: 30px ; margin-left: 10px" src="/photos/courseIcons/edit.png" alt=""></a>
                                <form action="{{route('teacher.delete', $teacher->id)}}" method="POST" style="margin-left: 10px">
                                    @csrf
                                    @method('delete')
                                    <button style="background: none;color: inherit;border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;"><img style="width: 30px; margin-left: 15px;" src="/photos/courseIcons/trash-bin.png" alt=""></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
