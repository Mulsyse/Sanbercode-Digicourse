@extends('layouts.master')

@section('tittle')
    halaman pendaftaran
@endsection

@section('content')
<form action="{{ url('/welcome') }}" method="POST">
    @csrf
    <label for="first_name">First name:</label><br><br>
    <input type="text" name="first_name" required><br><br>

    <label for="last_name">Last name:</label><br><br>
    <input type="text" name="last_name" required><br><br>

    <label>Gender:</label><br><br>
    <input type="radio" name="gender" value="Male"> Male<br>
    <input type="radio" name="gender" value="Female"> Female<br>
    <input type="radio" name="gender" value="Other"> Other<br><br>

    <label>Nationality:</label><br><br>
    <select name="nationality">
        <option value="Indonesian">Indonesian</option>
        <option value="Japan">Japan</option>
        <option value="Thailand">Thailand</option>
        <option value="Singapore">Singapore</option>
    </select><br><br>

    <label>Language Spoken:</label><br><br>
    <input type="checkbox" name="language[]" value="Indonesia"> Indonesia<br>
    <input type="checkbox" name="language[]" value="Japan"> Japan<br>
    <input type="checkbox" name="language[]" value="Thailand"> Thailand<br>
    <input type="checkbox" name="language[]" value="English"> English<br>
    <input type="checkbox" name="language[]" value="Other"> Other<br><br>

    <label>Bio:</label><br><br>
    <textarea name="bio" rows="10" cols="30"></textarea><br><br>

    <input type="submit" value="Sign up">
</form>
@endsection

