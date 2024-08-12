@extends('layout.mylayout')

@section('content')
<div class="form_container">
    <h1>Sign in</h1>
    <form action="binsert"  method="get">

        <label for="username">Username</label>
        <input type="username" id="username" name="username" required> <br>

        <label for="password">Email</label>
        <input type="email" id="email" name="email" required> <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required> <br>



        <button type="submit">Add the book</button>
    </form>
@endsection
