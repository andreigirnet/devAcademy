@extends('layouts.app')
@section('content')
    <div id="table-wrap">
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Group Name</th>
                    <th scope="col">Course in Name</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($groups as $group)
                    <tr>
                        <th scope="row">{{$group->id}}</th>
                        <td>{{$group->name}}</td>
                        <td>{{$group->course->name}}</td>
                        <td>
                            <div style="display: flex">
                                <a href="{{route('group.create')}}"><img style="width: 30px" src="/photos/courseIcons/create.png" alt=""></a>
                                <a href="{{route('group.edit', $group->id)}}"><img style="width: 30px ; margin-left: 10px" src="/photos/courseIcons/edit.png" alt=""></a>
                                <a href="{{route('group.show', $group->id)}}"><img style="width: 30px ; margin-left: 10px" src="/photos/courseIcons/eye.png" alt=""></a>
                                <form action="{{route('group.delete', $group->id)}}" method="POST" style="margin-left: 10px">
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
