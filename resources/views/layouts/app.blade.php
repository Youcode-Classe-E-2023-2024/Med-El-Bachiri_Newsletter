<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
@if(str_contains(url()->current(), '/dashboard') === false)
    @include('layouts.navbar')
@endif

@yield('content')

@if(str_contains(url()->current(), '/dashboard') === false)
    @include('layouts.footer')
@endif
</body>
</html>