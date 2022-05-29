@extends('layouts.app')
@section('content')
    <div id="table-wrap">
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $course)
                    <tr>
                        <th scope="row">{{$course->id}}</th>
                        <td>{{$course->name}}</td>
                        <td>
                            <div style="display: flex">
                                <a href="{{route('course.create')}}"><img style="width: 30px" src="/photos/courseIcons/create.png" alt=""></a>
                                <a href="{{route('course.edit', $course->id)}}"><img style="width: 30px ; margin-left: 10px" src="/photos/courseIcons/edit.png" alt=""></a>
                                <form action="{{route('course.delete', $course->id)}}" method="POST" style="margin-left: 10px">
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
