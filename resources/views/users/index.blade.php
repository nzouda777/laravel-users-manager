@extends('layouts.app')

@section('content')
    <table>
        <tr><th>User id</th><th>User name</th><th>User email</th> <th>view</th></tr>
        @foreach ($users as $user)
            <tr><td>{{ $user->id }}</td> <td>{{ $user->name }}</td> <td>{{ $user->email }}</td><td><a href="{{route("users.show",$user->id)}}">show</a></td></tr>
        @endforeach
    </table>
    {{$users->links()}}
@endsection
