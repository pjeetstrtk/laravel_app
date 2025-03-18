@extends('layouts.app')

@section('title')
homepage

@endsection

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/hello.php">raw_php_site</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/admin">admin site</a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
@endsection
