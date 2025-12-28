<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="jalalidatepicker.min.css" />
<script type="text/javascript" src="jalalidatepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Page Title' }}</title>
         @stack("css")
        <style>


            .container {
  max-width: 2000px;
  margin: 0 auto;
}

        </style>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    </head>

    <body id="body" class=" light bg-platinum dark:bg-raisin-black min-h-[100vh] ">    <!-- تاگل -->
@include('sweetalert2::index')
         <h1 class="text-yellow-800 ">hi</h1>
        <livewire:header />
        <div class="container mx-auto max-w-[1200px] ">
        {{ $slot }}
        </div>
          <livewire:footer/>

    </body>
</html>
