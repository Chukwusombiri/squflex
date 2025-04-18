<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $metaDescription }}">
    <meta property="og:title" content="{{ $ogTitle }}" />
    <meta property="og:site_name" content="{{ $appName }}" />
    <meta property="og:image" content="{{ asset('/images/meta_thumbnail.png') }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:description" content="{{ $ogDescription }}" />
    <meta property="og:type" content="website">
    <title>{{ config('app.name') }} | Client Portfolio</title>

    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon-16x16.png') }}">

    <!--     Fonts and icons     -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- CSS Styles -->
    <link href="{{ asset('myassets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('myassets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.min.css">

    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script defer src="https://unpkg.com/@alpinejs/focus@3.12.0/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('myassets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- Livewire Styling -->
    @livewireStyles
    
    <style>
        .myfixed {
            background-image: url('/images/auth/page-header.jpg') !important;
        }
    </style>
    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '0ecc76141a5656bf86d6a25052c793fe82b671a3';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</head>

<body
    class="relative m-0 font-sans text-base antialiased font-normal leading-default bg-primary-light text-primary-dark">
    <div class="absolute w-full bg-cover bg-center min-h-75 myfixed">
        <div class="relative w-full min-h-75 bg-gray-900 bg-opacity-50 backdrop-blur-[2px]">

        </div>
    </div>
    <x-banner />
    <!-- sidenav  -->
    <x-sidebar />
    <!-- end sidenav -->

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        {{ $slot }}
    </main>
    <!-- plugin for scrollbar  -->
    <script src="{{ asset('myassets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
        integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js"></script>
    @stack('scripts')
    <!-- main script file  -->
    <script src="{{ asset('myassets/js/argon-dashboard-tailwind.js?v=1.0.1') }}" async></script>
    @livewireScripts
</body>

</html>
