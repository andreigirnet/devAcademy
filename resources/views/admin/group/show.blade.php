@extends('layouts.app')
@section('content')
    <div id="table-wrap">
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Group Name</th>
                    <th scope="col">Group Course In</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{$group->id}}</th>
                    <td>{{$group->name}}</td>
                    <td>{{$group->course->name}}</td>
                </tr>
                </tbody>
            </table>
            <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
                <div style="font-size: 30px; color: #dc3545">Students: </div>
                <div style="margin-left: 20px; font-size: 25px">
                    {{$group->students->implode('first_name', ', ')}}<br>
                    {{$group->students->implode('last_name', ', ')}}<br>
                    {{$group->students->implode('email', ', ')}}
                </div>
            </div>
        </div>
    </div>
@endsection
