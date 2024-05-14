<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>IT Club SMK Kristen Immanuel Pontianak</title>
   <link href="../fonts/noto.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="../css/scroll-bar.css">
   <link rel="stylesheet" href="../css/club-text.css">
   <script>
      tailwind.config = {
         darkMode: 'class',
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

<body class="selection:bg-gray-800 selection:text-white dark:selection:bg-white dark:selection:text-gray-900">
   <div class="fixed top-0 left-0 w-full h-full bg-transparent">
      <canvas class="hidden blur-3xl dark:block"></canvas>
   </div>

   <!-- Navigation Bar -->
   <?php include "../includes/navbar.php"; ?>

   <!-- Hero Section -->
   <section id="home" class="home-section bg-white dark:bg-gray-900 font-noto min-h-screen flex justify-center items-center">
      <div class="grid max-w-screen-xl px-4 py-8 mx-auto z-10 lg:gap-8 xl:gap-0 lg:py-16 md:px-8 lg:grid-cols-12">
         <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none bg-gradient-to-r from-primary-500 to-primary-100 bg-clip-text text-transparent md:text-5xl xl:text-6xl">
               Welcome To ITClub <br>
               <span id="clubText" class="text-slate-800 dark:text-white"></span>
            </h1>
            <p class="max-w-2xl mb-6 font-light text-sm text-gray-800 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-300">
               "The advance of technology is based on making it fit in so that you don't really even notice it, so it's part of everyday life." ~ Bill Gates
            </p>
            <a href="#" class="inline-flex items-center justify-center px-4 py-3 mr-3 font-medium text-sm text-center text-white rounded-lg bg-primary-600 select-none transition-all duration-300 sm:px-5 sm:py-3 sm:text-base hover:bg-primary-700 focus:ring-4 focus:ring-primary-300 dark:bg-blue-600 dark:hover:bg-blue-500 dark:focus:ring-primary-900">
               Get started
               <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
               </svg>
            </a>
            <a href="#about" class="inline-flex items-center justify-center px-4 py-3 font-medium text-sm text-center text-gray-900 border border-gray-500 rounded-lg select-none transition-all duration-300 sm:px-5 sm:py-3 sm:text-base hover:bg-gray-800 hover:text-white focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-300 dark:hover:bg-white dark:hover:text-gray-800">
               About ITClub
            </a>
         </div>
         <div class="hidden select-none lg:mt-0 lg:col-span-5 lg:flex">
            <img src="../assets/img/hero.svg" alt="Online Tech Talks Vector" width="1000px">
         </div>
      </div>
   </section>

   <!-- Footer -->

   <script src="../js/canvas.js"></script>
   <script src="../js/club-text.js"></script>
</body>

</html>