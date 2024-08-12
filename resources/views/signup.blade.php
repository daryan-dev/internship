@extends('layout.mylayout')

@section('content')
<div class="form_container">
    <h1>Sign up</h1>
<form action="/insertuser" method="post">

        @csrf
        <label for="username">Username</label>
        <input type="username" id="username" name="name" required> <br>


        <label for="email">Email</label>
        <input type="email" id="email" name="email" required> <br>


        <label for="password">Password</label>
        <input type="password" id="password" name="password" required> <br>



        <button type="submit">signup</button>
    </form>
    </div>
@endsection
