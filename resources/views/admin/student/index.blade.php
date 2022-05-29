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
                    <th scope="col">Phone</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Completed</th>
                    <th scope="col">Course</th>
                    <th scope="col">Age</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <th scope="row">{{$student->id}}</th>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone}}</td>
                        <td>
                            @if($student->payment_status)
                                <div style="color: green">Paid</div>
                            @else
                                <div style="color: red">Not Paid</div>
                            @endif
                        </td>
                        <td>
                            @if($student->completed)
                                <div style="color: green">Course Completed</div>
                            @else
                                <div style="color: #c1791f">Pending</div>
                            @endif
                        </td>
                        <td><a href="{{route('group.show', $student->group->id)}}">{{$student->group->name}}</a></td>
                        <td>{{$student->phone}}</td>
                        <td>
                            <div style="display: flex">
                                <a href="{{route('student.create')}}"><img style="width: 30px" src="/photos/courseIcons/create.png" alt=""></a>
                                <a href="{{route('student.edit', $student->id)}}"><img style="width: 30px ; margin-left: 10px" src="/photos/courseIcons/edit.png" alt=""></a>
                                <form action="{{route('student.delete', $student->id)}}" method="POST" style="margin-left: 10px">
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
