@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <form method="post" action="{{route('login')}}">
        <div class="">
            <label for="name">Input Name</label>
            <input type="text" name="name" value="{{__old('name')}}">
        </div>
        <div class="">
            <label for="email">Input Email</label>
            <input type="text" name="email" value="{{__old('email')}}">
        </div>
        <div class="">
            <label for="password">Input Password</label>
            <input type="text" name="password" value="{{__old('password')}}">
        </div>
        <button type="submit">Submit form</button>
    </form>
@endsection