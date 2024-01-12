<header>
    <div>
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC Logo">
    </div>
    <nav>
        <ul>
             <li>
                <a href="{{route ('welcome') }}">Welcome</a>
            </li> 
            <li>
                <a href="{{route ('characters') }}">Characters</a>
            </li>
            <li>
                <a href="{{route ('comics') }}">Comics</a>
            </li>
            <li>
                <a href="{{route ('movies') }}">Movies</a>
            </li>
        </ul>
    </nav>
</header>