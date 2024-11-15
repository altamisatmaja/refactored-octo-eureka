<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laptopland - Sistem Rekomendasi Laptop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Laptopland - Laptop Marketplace Website" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    @include('client.layouts.style')
</head>

<body>
    <div id="wrapper">
        @include('client.layouts.header')
        @yield('content')
        <a href="#" id="back-to-top"></a>
        @include('client.layouts.footer')
    </div>
    @include('client.layouts.script')

    @include('client.layouts.cookies')
    <script>
        $(document).ready(function() {
            $.cookit({
                backgroundColor: '#101010',
                messageColor: '#fff',
                linkColor: '#FEF006',
                buttonColor: '#FEF006',
                messageText: "This website uses cookies to ensure you get the best experience on our website.",
                linkText: "Learn more",
                linkUrl: "index.html",
                buttonText: "I accept",
            });
        });
    </script>

    @stack('js')
</body>

</html>
