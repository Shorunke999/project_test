@extends('layouts.app')

@section('title', 'Registration form')
@section('content')
    <main class="center-container">
        <div class="form-container">
            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Input Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Input Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Input Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="v_password">Verify password</label>
                    <input type="password" name="v_password" id="v_password">
                </div>
                <button type="submit" id='submit'>Submit form</button>
            </form>

            <div id="error-message">
            </div>

            @if(session('msg'))
                <div class="success-message">
                    <h1>{{ session('msg') }}</h1>
                </div>
            @endif
        </div>
    </main>
@endsection
