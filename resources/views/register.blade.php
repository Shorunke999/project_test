@extends('layouts.app')

@section('title','Registration form')
@section('content')
    <form method="post" action="{{route('register')}}">
        <div class="">
            <label for="name">Input Name</label>
            <input type="text" name="name" value="{{old('name')}}" id="name">
        </div>
        <div class="">
            <label for="email">Input Email</label>
            <input type="text" name="email" value="{{old('email')}}" id="email">
        </div>
        <div class="">
            <label for="password">Input Password</label>
            <input type="text" name="password" value="{{old('password')}}" id="password">
        </div>
        <div class="">
            <label for="v_password">Verify password</label>
            <input type="text" name="v_password" value="{{old('v_password')}}" id="v_password">
        </div>
        <button type="submit" id='submit'>Submit form</button>
    </form>
    <div id="error-message">
        
    </div>
    @if(session('msg'))
        <div class="">
            <h1>{{session('msg')}}</h1>
        </div>
    @endif
@endsection