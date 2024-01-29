<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Sinterest</title>
</head>
<body>

<div class="bg-white">
    <header class="absolute inset-x-0 top-0 z-50">
      <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="/Home " class="-m-1.5 p-1.5">
            <span class="sr-only">Sinterest</span>
            <img class="h-9 w-auto" src="https://i.ibb.co/ft6fWDV/1706269969738.png" alt="snapedit-1705208572334" alt="Sinterest ">
          </a>
        </div>
        <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
       
        <div class="absolute left-20 lg:flex lg:flex-1 lg:gap-x-2 ">
          <a href="#" class="justify-center rounded-full bg-black -600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-candy-500">Home</a>
          <a href="/Explore  " class="justify-center rounded-full bg-white -600 px-3 py-1.5 text-sm font-semibold leading-6 text-black shadow-sm hover:bg-candy-500">Explore</a>
          <a href="/Create " class="justify-center rounded-full bg-white -600 px-3 py-1.5 text-sm font-semibold leading-6 text-black shadow-sm hover:bg-candy-500">Create</a>
        </div>
        <table style=text-align:center;>
          <tr>
              <td>
                <div>
                <form action="#">
                  <input type="text" name="search" placeholder="Search..." style="padding: 10px; border: none; border-radius: 30px; width: 650px; background-color: #e2e2e2;">
                </div>
              </form>
              </td>
          </tr>
      </table>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:gap-x-3">
        <a href="/Home" class="-m-1.5 p-1.5">
          <span class="sr-only">Notification</span>
          <img class="h-8 w-auto" src="https://i.ibb.co/xJKxMLJ/notification-bell.png" alt="Notification  ">
        </a>
          
          <span class="sr-only">Messages</span>
          <img class="h-7 w-auto" src="https://i.ibb.co/HpvMK5B/message-bubble.png" alt="Messages  ">
        </a>
          
          <span class="sr-only">Notification</span>
          <img class="h-7 w-auto" src="https://i.ibb.co/S3jWb4V/user-image-with-black-background.png" alt="Notification  ">
        </a>

        <span class="sr-only">Notification</span>
        <img class="h-8 w-auto" src="https://i.ibb.co/X7dP5hj/down-1.png" alt="Notification  ">
      </a>

      </div>
      </nav>
        <!--
        <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:gap-x-3">
          <a href="/Login   " class="justify-center rounded-full bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-candy-500">Log in </a>
          <a href="/Register   " class="justify-center rounded-full bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-candy-500">Register </a>
        </div>
      </nav>
    -->
      <!-- Mobile menu, show/hide based on menu open state. -->
      <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
          <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Sinterest</span>
              <img class="h-8 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/0/08/Pinterest-logo.png" alt="">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Close menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-2 py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
              </div>
              <div class="py-6">
                <a href="/Login " class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Lossg in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </nav>
    </header>

    <main class="mt-20">
  <div class="grid grid-cols-4 gap-3 px-10">
    <div class="grid-item grid-row-2 grid-col-2">
      <img src="https://i.pinimg.com/474x/f0/95/82/f09582994175230186561d1793af7bc5.jpg" class="rounded-2xl">
    </div>
    <div class="grid-item grid-row-1 grid-col-1 ">
      <img src="https://i.pinimg.com/474x/77/8f/54/778f54cf8a472288c30c4685ce791704.jpg" class="rounded-2xl" >
    </div>
    <div class="grid-item grid-row-1 grid-col-1 ">
      <img src="https://i.pinimg.com/474x/c7/ee/aa/c7eeaa39062e932529805de77b1f4a59.jpg" class="rounded-2xl" >
    </div>
    <div class="grid-item grid-row-1 grid-col-2 bg-gray-200 p-4 rounded-lg">
      <img src="image4.jpg" class="w-full h-32 object-cover">
      <h2 class="text-lg font-bold mt-2">Title 4</h2>
      <p class="text-gray-700">Description 4</p>
    </div>
    <div class="grid-item grid-row-2 grid-col-2">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCLTIE2BMuA4oRGxVT-KWsPvW7WCokWb1KPcJQfXitF2vFbiS2eJmL1Yild9wVBx3cTRs&usqp=CAU" class="rounded-2xl">
    </div>
    <div class="grid-item grid-row-2 grid-col-1 bg-gray-200 p-4 rounded-lg">
      <img src="image5.jpg" class="w-full h-32 object-cover">
      <h2 class="text-lg font-bold mt-2">Title 5</h2>
      <p class="text-gray-700">Description 5</p>
    </div>
    <div class="grid-item grid-row-2 grid-col-2 bg-gray-200 p-4 rounded-lg">
      <img src="image6.jpg" class="w-full h-64 object-cover">
      <h2 class="text-xl font-bold mt-2">Title 6</h2>
      <p class="text-gray-700">Description 6</p>
    </div>
    <div class="grid-item grid-row-2 grid-col-2">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTZqYO4dOYga0x4Ef72ZLie1W_Mato9A7Ibg&usqp=CAU" class="rounded-2xl">
    </div>
  </div>
    </main>
</body>
</html>