@extends('layouts.app')

@section('content')
    <form action="{{ route("users.store")}}" method="POST">
        @method("POST")
        @csrf
        <input type="text" placeholder="set username" name="usrname">
        <input type="email" name="email" id="">
        <input type="text" placeholder="set password" name="usrPassword" id="">
        <input type="text" placeholder="set password" name="usrPassword_confirmation" id="">
        <input type="submit" value="set new user">
    </form>
@endsection
