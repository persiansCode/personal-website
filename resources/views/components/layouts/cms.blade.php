<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light" >
    <head>
      <!-- در بخش head -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" href="{{ asset("admin-assets/select2/css/select2.min.css") }}"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        @vite(  'resources/css/app.css' )
        @vite(  'resources/js/app.js' )

        <title>{{ $title ?? 'Page Title' }}</title>
    
        <style>




            .container {
  max-width: 2000px;
  margin: 0 auto;
}

        </style>


         @stack('cdn')
    </head>

    <body id="body" class=" light bg-platinum dark:bg-raisin-black min-h-[100vh] " x-data="{open : true}">    <!-- تاگل -->


         <livewire:cms.cms-header/>

        <div class="container mx-auto max-w-[1200px] relative grid grid-cols-12" dir="rtl">
            <x-cms.sidebar.sidebar/>
        {{ $slot }}
        </div>
          <!-- <livewire:footer/> -->

<!-- <script src="{{  asset("admin-assets/select2/js/select2.min.js") }}"> -->
        
      </script>
      @stack("script")
    </body>
   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
   
</script>

    
</html>
