@include('front.header')
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Nulis Yuk</a>
        </div>
        <div class="justify-content-end">
            <a class="btn btn-info btn-sm" href="{{ route('login') }}">{{ __('Login') }}</a>
            <a class="btn btn-info btn-sm" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
    </nav>

    <nav class="breadcrumb">
        <span class="breadcrumb-item active">Postingan Terbaru</span>
    </nav>
    <div class="container">
       @yield('content')
    </div>

    @include('front.footer')

</body>
</html>