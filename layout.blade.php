<h1>KWU APP | @yield('title')</h1>
<nav>
    <ul>
        {{-- http://localhost:8000/home --}}
        <li><a href="{{ url ('home') }}">Home</a></li>
        <li><a href="{{ url ('about') }}">About</a></li>
        <li><a href="{{ url ('contact') }}">Contact</a></li>
    </ul>
</nav>
<hr>
<div>
    @yield('content')
</div>