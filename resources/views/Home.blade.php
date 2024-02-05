<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Sinterest</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <style>
      
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.header{
  background-color: #ffffff;
}

.container{
  width: 100%;
  columns: 5;
  column-gap: 15px;
  padding: 15px;
}

img{
  width: 100%;
  margin-bottom: 15px;
  border-radius: 10px;
}
</style>
</head>
<body>

<div class="bg-white">
    <header class="fixed bg-white inset-x-0 top-0 z-50 ">
      <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
          <a href="/Home " class="-m-1.5 p-1.5">
            <span class="sr-only">Sinterest</span>
            <img class="absolute left-5 top-7 h-10 w-auto" src="https://i.ibb.co/ft6fWDV/1706269969738.png"alt="Sinterest ">
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
                  <input type="text" name="search" placeholder="Search" style="padding: 10px; border: none; border-radius: 30px; width: 650px; background-color: #e2e2e2;">
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
          
          <span class="sr-only">Account</span>
          <img class="h-7 w-auto" src="https://i.ibb.co/S3jWb4V/user-image-with-black-background.png" alt="account  ">
        </a>

        <span class="sr-only">Others</span>
        <img class="h-8 w-auto" src="https://i.ibb.co/X7dP5hj/down-1.png" alt="Others  ">
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
  <div class="container">
      <img src="https://i.pinimg.com/474x/f0/95/82/f09582994175230186561d1793af7bc5.jpg">
      <img src="https://i.pinimg.com/474x/77/8f/54/778f54cf8a472288c30c4685ce791704.jpg">
      <img src="https://i.pinimg.com/474x/c7/ee/aa/c7eeaa39062e932529805de77b1f4a59.jpg">
      <img src="https://i.pinimg.com/474x/6c/25/b0/6c25b037c577fc51472546dc384390e2.jpg">
      <img src="https://i.pinimg.com/474x/d7/4a/77/d74a77466a51201d1dba2f267630f948.jpg">
      <img src="https://i.pinimg.com/474x/6e/ef/12/6eef12181e9bc7ab2ec8925f3b8f6760.jpg">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTZqYO4dOYga0x4Ef72ZLie1W_Mato9A7Ibg&usqp=CAU">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK5HXsZGhKU0qYvJWtZl2QwAi6Jzf--Bcw6g&usqp=CAU">
      <img src="https://i.pinimg.com/474x/f1/c2/5a/f1c25aecafaf87e6ecab2a2704139714.jpg">
      <img src="https://i.pinimg.com/474x/de/30/82/de3082808c048812071215eb3e4f48ec.jpg">
      <img src="https://i.pinimg.com/474x/e1/36/37/e1363742238dd33bbc7a26f35efe2717.jpg">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaTPjKEd5MhJ7pD-nKSxa_CCTHw22-GknR3w&usqp=CAU">
      <img src="https://i.ibb.co/Xp2dt4B/download-2.png">
      <img src="https://i.pinimg.com/474x/a5/48/d4/a548d4f2f7baa2eb5cc5db29879eb73f.jpg">
      <img src="https://i.pinimg.com/474x/5f/17/44/5f1744696261c3ebca5f0ea485d93d47.jpg">
      <img src="https://i.pinimg.com/474x/28/88/c9/2888c9abc725b6561746c125138cacb8.jpg">
      <img src="https://i.pinimg.com/474x/78/98/11/789811fbace1c2a984d2e7c5f7e6eab5.jpg">
      <img src="https://i.ibb.co/DKdSvYn/Whats-App-Image-2024-01-30-at-18-55-49-26d090b5.jpg">
      <img src="https://i.ibb.co/ZVWhDm4/Whats-App-Image-2024-01-30-at-18-55-49-473132b0.jpg">
      <img src="https://i.ibb.co/nbLX8WC/Whats-App-Image-2024-01-30-at-18-55-49-9aeab52c.jpg">
      <img src="https://i.pinimg.com/474x/82/30/3e/82303e3c38025a2562780c7271a0aafd.jpg">
      <img src="https://i.pinimg.com/474x/f0/a6/8f/f0a68f8808476a9e1f0030279a337c02.jpg">
      <img src="https://i.pinimg.com/474x/e4/4d/aa/e44daa69e1f10d8d776101975f8f1129.jpg">
      <img src="https://i.pinimg.com/474x/e3/cd/a0/e3cda02c2c2373a06fdea2c3d4042177.jpg">
      <img src="https://i.pinimg.com/474x/ec/4a/c8/ec4ac82d5b9f3217d6d7a5f1a9da67ce.jpg">
      <img src="https://media1.tenor.com/m/JWo08tw_xL4AAAAC/siuuuuuu.gif">
      <img src="https://i.pinimg.com/474x/c2/d7/71/c2d771d49b1a8ad67e36da11afc4ba1a.jpg">
      <img src="https://i.pinimg.com/474x/ed/c4/d1/edc4d15288252f81c925cb562f7fb74d.jpg">
      <img src="https://i.pinimg.com/474x/d4/a8/aa/d4a8aaf192347bab795da62544afb813.jpg">
      <img src="https://i.pinimg.com/474x/38/4a/d3/384ad3860b313f77192e8b6529ee0cd0.jpg">
      <img src="https://i.pinimg.com/474x/bf/99/8c/bf998ccf5f3da28019c69a5452031ba4.jpg">
      <img src="https://i.ibb.co/Lh4mQ4J/Whats-App-Image-2024-01-30-at-18-55-43-460fe632.jpg">
      <img src="https://i.pinimg.com/originals/ca/e5/35/cae535fb04a99bc1747afd8b0c357e3d.gif">
      <img src="https://iili.io/Ha1Ew2s.gif">
      <img src="https://media.tenor.com/htK6C7Jwqk4AAAAM/cantik-sekaleee.gif">
      <img src="https://i.ibb.co/LR8Kq1Q/Whats-App-Video2024-02-01at14-23-02-093447d5-ezgif-com-video-to-gif-converter.gif">
  </div>
    </main>
</body>
</html>