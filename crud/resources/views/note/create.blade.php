@extends('layouts.app')


@section('content')
{{-- @if($errors->any()){
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
}
@endif --}}
<a href="{{ route("note.index") }}">Back</a>
<form method="POST" action="{{ route("note.store") }}">
    {{-- directiva de seguridad FUNDAMENTAL --}}
    @csrf
    <label for="">Title</label>
    <input type="text" name="title" id=""> <br>
    @error("title")
        <p style="color:red">{{ $message }}</p>
    @enderror()

    <label for="">Description</label>
    <input type="text" name="description" id=""> <br>
    @error("description")
        <p style="color:red">{{ $message }}</p>
    @enderror

    <input type="submit" value="Create">
</form>

@endsection
