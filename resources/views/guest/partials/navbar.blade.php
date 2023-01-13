<nav>
    <ul>
        @foreach ($menu as $link)
            <li><a href="{{ route($link['route']) }}">{{ $link['label'] }}</a></li>
        @endforeach
    </ul>
</nav>
