<!DOCTYPE html>
<html>

<head>
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>
    @section('sidebar')
        this is the master sideabar
    @endsection
@show

<div class="container">
    @yield('content')
</div>


</body>

</html>
