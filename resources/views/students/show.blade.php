@extends('layouts.app')

@section('content')
<h1>{{ $student->first_name }} {{ $student->last_name }}</h1>
<p>Email: {{ $student->email }}</p>
<p>Enrolled Date: {{ $student->enrolled_date }}</p>
<form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Delete this student?');">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endsection