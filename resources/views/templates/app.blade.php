<!-- resources/views/templates/app.blade.php -->

@include('templates.header')
@include('templates.navbar')

@yield('content')

<div class="main-content">
{{$slot}}
</div>

@include('templates.footer')
@livewireStyles
@livewireScripts

<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
