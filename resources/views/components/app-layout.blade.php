<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
     <!-- resources/views/components/app-layout.blade.php -->
@include('templates.header')
@extends('templates.navbar')

{{ $slot }}
@include('templates.footer')
@livewireStyles
@livewireScripts
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>

</div>
