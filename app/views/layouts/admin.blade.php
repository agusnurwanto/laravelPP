<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            @section('title')
            {{ $title }}
            @show
        </title>
        @section('css')
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        @show
    </head>
    <body>
        <header>
            <h1>MyJournal</h1>
            <nav>
                <ul>
                    <li><a href="{{ URL::route('home') }}">Home</a></li>
                    <li><a href="{{ URL::route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ URL::route('posts.index') }}">Post</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="{{ URL::route('logout.get') }}">{{ $username }}:Logout</a></li>
                </ul>
            </nav>
        </header>
        <section id="content">
            @yield('content')
        </section>
        <footer>
            @section('footer')
            <p>Powered by <a href="http://laravel.com" target="_blank">Laravel</a>. Copyright &copy; Pondok Programmer 2014</p>
            @show
        </footer>
        @section('script')
        @show
    </body>
</html>
