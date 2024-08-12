@extends('layout.mylayout')

@section('content')
<div class="form_container">
    <h1>Sign in</h1>
    <form action="/signinuser"  method="post">
        @csrf
        <label for="username">Username</label>
        <input type="username" id="username" name="name" required> <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required> <br>



        <button type="submit">Add the book</button>
    </form>
@endsection
