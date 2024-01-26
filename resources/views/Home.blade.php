<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Sinterest</title>
</head>
<nav class="bg-white-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button-->
              <button type="button"
                  class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                  aria-controls="mobile-menu" aria-expanded="false">
                  <span class="absolute -inset-0.5"></span>
                  <span class="sr-only">Open main menu</span>
                  <!--
      Icon when menu is closed.

      Menu open: "hidden", Menu closed: "block"
          -->
                  <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>
                  <!--
      Icon when menu is open
      Menu open: "block", Menu closed: "hidden"
          -->
                  <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </button>
          </div>
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex flex-shrink-0 items-center">
                  <img class="h-9 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/0/08/Pinterest-logo.png"
                      alt="logopinterest">
              </div>
              <a href="#" class="my-3 font-semibold text-white"aria-current="page">WEBSITE-GALLERY</a>
              <div class="hidden sm:ml-6 sm:block">
                  <div class="flex space-x-4">
                      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                      <div class=" sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 ">
                          <a href="#"
                              class=" font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                              aria-current="page">Gallery</a>

                          @if (Route::has('login'))

                              @auth
                              @else
                                  <a href="{{ route('login') }}" class="font-semibold text-gray">Log in</a>

                                  @if (Route::has('register'))
                                      <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray">Register</a>
                                  @endif
                              @endauth
                      </div>
                      @endif

                  </div>
              </div>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
</nav>

<body>
  <h1>

  </h1>
</body>
</html>