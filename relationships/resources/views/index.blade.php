<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- *********PARA LAS 1:1* --}}
    {{-- <h1>Email:{{ $user->email }}</h1>
    <h1>Prefix:{{ $user->phone->prefix }}</h1>
    <h1>Number:{{ $user->phone->phone_number }}</h1> --}}

    {{-- ***PARA LAS 1:N --}}
    <h1>{{ $user->name }} Phones:</h1>
    <ul>
    @foreach ($user->phones as $phone)
            <li>{{ $phone->prefix }} {{ $phone->phone_number }}</li>
    @endforeach
    </ul>
    {{-- para los roles por ejemplo --}}
    <h1>Los roles de {{ $user->name }} son:</h1>
    <ul>
    @foreach ($user->roles as $role)
        <li>{{ $role->name}} Added By: {{ $role->pivot->added_by }}</li>
    @endforeach

    {{-- para el hasOneThrough --}}
    <h1>Información de la sim</h1>
    <div>{{ $user->phoneSim }}</div>
</ul>

</body>
</html>
