<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body>
<div class="max-w-[50rem] flex flex-col mx-auto size-full">
    <!-- ========== HEADER ========== -->
    <header class="mb-auto flex justify-center z-50 w-full py-4">
      <nav class="px-4 sm:px-6 lg:px-8">
        <a class="flex-none text-xl font-semibold sm:text-3xl" href="#" aria-label="Brand">Brand</a>
      </nav>
    </header>
    <!-- ========== END HEADER ========== -->
  
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
      <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
        <h1 class="block text-7xl font-bold text-gray-800 sm:text-9xl">404</h1>
        <p class="mt-3 text-gray-600">Oops, something went wrong.</p>
        <p class="text-gray-600">Sorry, we couldn't find your page.</p>
        <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
          <a wire:navigate class="w-full sm:w-auto py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="/">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
            Back to Home
          </a>
        </div>
      </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
  
    <!-- ========== FOOTER ========== -->
    <footer class="mt-auto text-center py-5">
      <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-sm text-gray-500">© All Rights Reserved. 2022.</p>
      </div>
    </footer>
    <!-- ========== END FOOTER ========== -->
  </div>
    </body>
</html>