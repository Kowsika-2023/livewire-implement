<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <!-- Add your CSS files here -->
    @livewireStyles
    <!-- Load your JS files here -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- Load jQuery Mask Plugin before your custom scripts -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script> -->
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.sidebar')
    @yield('content')
        {{$slot}}
    @include('layouts.footer')

</head>
<body>
    <div class="container">
    </div>
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>

</body>
</html>
