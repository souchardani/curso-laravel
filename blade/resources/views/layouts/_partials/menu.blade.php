<header>
    <nav>
        <ul>
            {{-- las dos llaves le indican a laravel que el contenido a introdur no es html sino php --}}
            <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route("services")}}">Services</a></li>
            <li><a href="{{route("contact")}}">Contact</a></li>
        </ul>
    </nav>
</header>
