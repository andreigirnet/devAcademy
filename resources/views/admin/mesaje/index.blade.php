@extends('layouts.app')
@section('content')
    <div id="table-wrap">
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <th scope="row">{{$contact->id}}</th>
                        <td>{{$contact->first_name}}</td>
                        <td>{{$contact->last_name}}</td>
                        <td>{{$contact->telephone}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->message}}</td>
                        <td>
                            @if($contact->paid)
                                <div style="color: green">Paid</div>
                            @else
                                <div style="color:red">Not Paid</div>
                            @endif
                        </td>
                        <td>
                            <div style="display: flex">
                                <a href="{{route('edit', $contact->id)}}"><img style="width: 30px" src="/photos/courseIcons/edit.png" alt=""></a>
                                <form action="{{route('delete', $contact->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button style="border: none; background: white; width: 60px; margin-left: 30px"><img style="width: 30px; margin-left: 15px;" src="/photos/courseIcons/trash-bin.png" alt=""></button>
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
