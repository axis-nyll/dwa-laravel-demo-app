@extends('layouts.app')

@section('content')
<h1>Edit Student</h1>

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="first_name" placeholder="First Name" value="{{ $student->first_name }}">
    <input type="text" name="last_name" placeholder="Last Name" value="{{ $student->last_name }}">
    <input type="email" name="email" placeholder="Email" value="{{ $student->email }}">
    <input type="date" name="enrolled_date" value="{{ $student->enrolled_date }}">
    <button type="submit">Update Student</button>
</form>
@endsection