@extends('layout')

@section('content')
<h1>Hello World</h1>
<form action="{{ route('contact-store') }}" method="POST">
    @csrf
    <input type="email" name="email" id="email">

    <button type="submit">Email Here</button>

    @error('email')
    <div>
    <p>{{ $message }}</p>
    </div>
    @enderror
</form>
@endsection