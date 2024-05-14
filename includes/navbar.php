<!doctype html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ITClub SMK Kristen Immanuel</title>
   <link href="../fonts/noto.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdn.tailwindcss.com"></script>
   <script>
      tailwind.config = {
         darkMode: "class",
         theme: {
            extend: {
               colors: {
                  primary: {
                     "50": "#eff6ff",
                     "100": "#dbeafe",
                     "200": "#bfdbfe",
                     "300": "#93c5fd",
                     "400": "#60a5fa",
                     "500": "#3b82f6",
                     "600": "#2563eb",
                     "700": "#1d4ed8",
                     "800": "#1e40af",
                     "900": "#1e3a8a",
                     "950": "#172554"
                  }
               }
            },
            fontFamily: {
               'noto': ['Noto Sans']
            },
         }
      }
   </script>
</head>

<body>
   <nav class="navbar-sticky bg-white font-noto border-b border-gray-200 dark:bg-gray-900 dark:bg-clip-padding dark:backdrop-filter dark:backdrop-blur-sm dark:bg-opacity-10 dark:border-gray-600 fixed w-full z-20 top-0">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-6">
         <a href="../pages/index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="../assets/logo/logo-light.png" class="h-12 select-none" alt="ITClub Logo">
         </a>
         <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button onclick="toggleDarkMode()" class="sm:px-2 md:px-4 text-gray-700 dark:text-gray-200 hover:text-gray-800 dark:hover:text-white focus:outline-none">
               <i id="theme-icon" class="fas fa-solid fa-sun text-lg"></i>
            </button>
            <form action="../pages/login.php">
               <button type="submit" class="hidden sm:block text-white bg-primary-600 transition-all select-none hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-500 dark:focus:ring-primary-800">Login</button>
            </form>
            <button type="button" id="mobile-menu-button" onclick="toggleMobileMenu()" class="md:hidden relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
               <span class="absolute -inset-0.5"></span>
               <span class="sr-only">Open main menu</span>
               <svg id="hamburger-icon" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
               </svg>
               <svg id="close-icon" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
               </svg>
            </button>
         </div>
         <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
               <li>
                  <a href="#home" class="block py-2 px-3 text-gray-800 rounded select-none hover:bg-gray-200 md:hover:bg-transparent transition-all duration-500 md:hover:text-primary-700 md:p-0 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-white dark:hover:text-gray-800 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
               </li>
               <li>
                  <a href="#about" class="block py-2 px-3 text-gray-800 rounded select-none hover:bg-gray-200 md:hover:bg-transparent transition-all duration-500 md:hover:text-primary-700 md:p-0 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-white dark:hover:text-gray-800 md:dark:hover:bg-transparent dark:border-gray-700">About</a>
               </li>
               <li>
                  <a href="#clubs" class="block py-2 px-3 text-gray-800 rounded select-none hover:bg-gray-200 md:hover:bg-transparent transition-all duration-500 md:hover:text-primary-700 md:p-0 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-white dark:hover:text-gray-800 md:dark:hover:bg-transparent dark:border-gray-700">Clubs</a>
               </li>
               <li>
                  <a href="#gallery" class="block py-2 px-3 text-gray-800 rounded select-none hover:bg-gray-200 md:hover:bg-transparent transition-all duration-500 md:hover:text-primary-700 md:p-0 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-white dark:hover:text-gray-800 md:dark:hover:bg-transparent dark:border-gray-700">Gallery</a>
               </li>
               <li>
                  <a href="#contact" class="block py-2 px-3 text-gray-800 rounded select-none hover:bg-gray-200 md:hover:bg-transparent transition-all duration-500 md:hover:text-primary-700 md:p-0 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-white dark:hover:text-gray-800 md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
               </li>
               <li>
                  <a href="#login" class="block py-2 px-3 text-gray-800 rounded select-none hover:bg-gray-200 md:hover:bg-transparent transition-all duration-500 md:hidden md:hover:text-primary-700 md:p-0 md:dark:hover:text-primary-500 dark:text-white dark:hover:bg-white dark:hover:text-gray-800 md:dark:hover:bg-transparent dark:border-gray-700">Login</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <script src="../js/navbar.js"></script>
</body>

</html>