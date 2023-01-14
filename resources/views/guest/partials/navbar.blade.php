<div class="navbar">
    <img src="{{ asset('img/dc-logo.png')}}" alt="logo">
    <ul class="menu-list">
        @foreach ($menu as $link)
            <li><a href="{{ route($link['route']) }}">{{ $link['label'] }}</a></li>
        @endforeach
    </ul>
</div>
<div class="jumbo" />
