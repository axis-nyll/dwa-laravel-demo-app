@extends('layouts.app')

@section('content')
<h1>Students</h1>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<a href="{{ route('students.create') }}">Add New Student</a>

<ul>
@foreach($students as $student)
    <li>
    {{ $student->first_name }}
    {{ $student->last_name }} — {{ $student->email }}
    <a href="{{ route('students.show', $student->id) }}">View</a>
    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
    </li>
@endforeach
</ul>
@endsection