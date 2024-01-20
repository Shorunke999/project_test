@extends('layouts.app')

@section('title', 'Login')

@section('content')
<main class="center-container">
    <div class="form-container">
        <form method="post" action="{{route('loginpost')}}">
            <div class="">
                <label for="email">Input Email</label>
                <input type="text" name="email" value="{{old('email')}}">
            </div>    
            <div class="">
                <label for="password">Input Password</label>
                <input type="text" name="password" value="{{old('password')}}">
            </div>
            <button type="submit">Submit form</button>
        </form>
        @if(session('msg'))
            <div>
                {{session('msg')}}
            </div>
        @endif
    <div>
</main>
@endsection