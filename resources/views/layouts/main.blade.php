<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
 <head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link
   rel="stylesheet"
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
   integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
   crossorigin="anonymous"
   referrerpolicy="no-referrer"
  />
  <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="{{ config('midtrans.snap_url')}}"
      data-client-key="{{ config('midtrans.client_key')}}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->


  <link rel="stylesheet" href="{{ asset('css/app.css') }}">


  <title>{{ $title }} | DIPEPOD</title>
 </head>
 <body id="up">
  <!-- header start -->
  @include('layouts.partials.header')
  <!-- header end -->
  @yield('content')
  <!-- Footer start -->
  @include('layouts.partials.footer')
  <!-- Footer end -->
  <!-- Back to top start -->
  <a
   href="#up"
   id="toTop"
   class="fixed bottom-4 right-4 z-[999] hidden h-10 w-10 items-center justify-center rounded-full bg-primary transition duration-300 ease-in-out hover:animate-pulse"
   ><span class="mt-2 block h-3 w-3 rotate-45 border-t-2 border-l-2"></span
  ></a>
  <!-- Back to top end -->

  <script src="{{ asset('asset/js/script.js') }}"></script>
 </body>
</html>
