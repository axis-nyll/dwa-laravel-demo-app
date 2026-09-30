@extends('layouts.app')

@section('content')
<h1>Add Student</h1>

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <input type="text" name="first_name" placeholder="First Name">
    <input type="text" name="last_name" placeholder="Last Name">
    <input type="email" name="email" placeholder="Email">
    <input type="date" name="enrolled_date">
    <button type="submit">Save Student</button>
</form>
@endsection