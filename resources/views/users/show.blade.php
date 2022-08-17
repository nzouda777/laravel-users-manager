@extends('layouts.app')

@section('content')
    <ul>
        <li>{{ $user->id }}</li>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>
@endsection
