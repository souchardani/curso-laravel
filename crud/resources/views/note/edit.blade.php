@extends('layouts.app')


@section("content")
<a href="{{ route("note.index") }}">Back</a>
<form action="{{ route("note.update", $note->id) }}" method="POST">
    @method("PUT")
    @csrf
    <label>Title:</label>
    {{-- es importante en el value poner dolar $ en el objeto --}}
    <input type="text" name="title" value="{{ $note->title }}">
    <label>Description:</label>
    <input type="text" name="description" value="{{ $note->description }}">
    <input type="submit" value="Update">
</form>
@endsection
