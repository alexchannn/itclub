<?php

include "includes/functions.php";

$clubs = query("SELECT * FROM tb_club");
$mentors = query("SELECT * FROM tb_mentor WHERE status = 'Active' LIMIT 9 ");
$gallerys = query("SELECT * FROM tb_gallery");

?>

<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>IT Club SMK Kristen Immanuel Pontianak</title>
   <link href="fonts/noto.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="css/scroll-bar.css">
   <link rel="stylesheet" href="css/club-text.css">
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
   <!-- Darkmode Background Effect -->
   <div class="fixed top-0 left-0 w-full h-full bg-transparent">
      <canvas class="hidden blur-3xl dark:block"></canvas>
   </div>

   <!-- Navigation Bar -->
   <nav class="navbar-sticky bg-white font-noto border-b border-gray-200 dark:bg-gray-900 dark:bg-clip-padding dark:backdrop-filter dark:backdrop-blur-sm dark:bg-opacity-10 dark:border-gray-600 fixed w-full z-20 top-0">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-6">
         <a href="pages/index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="assets/logo/logo-light.png" class="h-12 select-none" alt="ITClub Logo">
         </a>
         <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button onclick="toggleDarkMode()" class="sm:px-2 md:px-4 text-gray-700 dark:text-gray-200 hover:text-gray-800 dark:hover:text-white focus:outline-none">
               <i id="theme-icon" class="fas fa-solid fa-sun text-lg"></i>
            </button>
            <form action="pages/login.php">
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
            <img src="assets/img/hero.svg" alt="Online Tech Talks Vector" width="1000px">
         </div>
      </div>
   </section>

   <!-- About Section -->
   <section id="about" class="about-section bg-white dark:bg-gray-900 font-noto min-h-screen flex justify-center items-center">
      <div class="grid max-w-screen-xl px-4 py-8 mx-auto z-10 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
         <div class="hidden select-none lg:mt-0 lg:col-span-5 lg:flex">
            <img src="assets/img/about.svg" alt="Tech Company Vector" width="1000px">
         </div>
         <div class="ml-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none bg-gradient-to-r from-blue-500 to-blue-300 bg-clip-text text-transparent md:text-5xl xl:text-6xl dark:bg-gradient-to-r from-blue-50 to-blue-50 bg-clip-text text-transparent">
               About ITClub
            </h1>
            <p class="max-w-2xl mb-6 font-light text-sm text-gray-800 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-300">
               Ekstrakurikuler ITClub adalah kegiatan di bidang Informasi dan Teknologi di SMK Kristen Immanuel Pontianak. Berdiri sejak 2018, ITClub SMK Kristen Immanuel Pontianak bertujuan mengembangkan kemampuan siswa-siswi di bidang Informasi Teknologi.
            </p>
         </div>
      </div>
   </section>

   <!-- Clubs Section -->
   <section id="clubs" class="clubs-section bg-white dark:bg-gray-900 pt-24 font-noto min-h-screen flex flex-col justify-center items-center">
      <h1 class="text-3xl text-slate-800 font-extrabold font-noto z-10 dark:text-white">Our Programs</h1>
      <div class="grid max-w-screen-xl py-8 px-8 mx-auto z-10 gap-8 lg:py-16 xl:grid-cols-5 sm:grid-cols-2 2xl:px-0">
         <?php foreach ($clubs as $id => $club) : ?>
            <div class="max-w-sm bg-white bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10 border border-gray-200 rounded-lg dark:bg-gray-800 dark:bg-clip-padding dark:backdrop-filter dark:backdrop-blur-sm dark:bg-opacity-10 dark:border-gray-500">
               <img class="rounded-t-lg select-none" src="assets/img/club/<?= $club["gambar"]; ?>" alt="<?= $club["nama"]; ?>" />
               <div class="p-4">
                  <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $club["nama"]; ?></h5>
                  <p class="mb-3 text-sm text-gray-700 dark:text-gray-400"><?= $club["slogan"]; ?></p>
                  <p class="mb-3 font-light text-sm text-gray-600 dark:text-gray-400"><?= $club["hari"]; ?> • <?= $club["jam"]; ?></p>
                  <a href="clubs/<?= $club["nama"]; ?>.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-600 rounded-lg select-none transition-all hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-500 dark:hover:bg-primary-400 dark:focus:ring-primary-800">
                     Read more
                     <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                     </svg>
                  </a>
               </div>
            </div>
         <?php endforeach; ?>
      </div>
   </section>

   <!-- Mentor Section -->
   <section id="mentor" class="mentor-section bg-white dark:bg-gray-900 pt-24 font-noto min-h-screen flex flex-col justify-center items-center">
      <h1 class="text-3xl text-slate-800 font-extrabold font-noto z-10 dark:text-white">Current Mentors</h1>
      <div class="max-w-screen-xl py-8 px-8 mx-auto z-10 lg:py-12 2xl:px-0">
         <div class="grid grid-cols-2 grid-rows-5 gap-8 md:grid-cols-5 md:grid-rows-2">
            <?php foreach ($mentors as $id => $mentor) : ?>
               <div class="max-w-sm bg-white bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-10 border border-gray-200 rounded-lg dark:bg-gray-800 dark:bg-clip-padding dark:backdrop-filter dark:backdrop-blur-sm dark:bg-opacity-10 dark:border-gray-500">
                  <div class="flex flex-col items-center pb-10">
                     <img class="w-24 h-24 my-4 border border-gray-300 rounded-full select-none" src="assets/img/mentor/<?= $mentor["gambar"]; ?>" alt="<?= $mentor["nama"]; ?>" />
                     <h5 class="mb-1 px-4 font-medium text-gray-900 dark:text-white"><?= $mentor["nama"]; ?></h5>
                     <span class="text-xs text-gray-800 dark:text-gray-400"><?= $mentor["club"]; ?></span>
                  </div>
               </div>
            <?php endforeach; ?>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:bg-clip-padding dark:backdrop-filter dark:backdrop-blur-sm dark:bg-opacity-10 dark:border-gray-500">
               <div class="flex flex-col items-center">
                  <div class="w-24 h-24 bg-white rounded-full my-4 grid place-items-center select-none">
                     <img class="p-5" src="assets/img/mentor/More.jpg" alt="More Icon" />
                  </div>
                  <a href="pages/mentors.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-gray-800 bg-white border border-gray-500 rounded-lg transition-all hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-transparent dark:border-gray-200 dark:text-white dark:hover:bg-white dark:hover:text-gray-800 dark:focus:ring-primary-800">
                     See more
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Gallery Section -->
   <section id="gallery" class="gallery-section bg-white dark:bg-gray-900 pt-32 font-noto min-h-screen flex flex-col justify-center items-center">
      <h1 class="text-3xl text-slate-800 font-extrabold font-noto z-10 dark:text-white">ITClub Gallery</h1>
      <div class="max-w-screen-xl py-4 px-8 mx-auto z-10 lg:py-12 2xl:px-24">
         <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
            <?php foreach ($gallerys as $id => $gallery) : ?>
               <div class="overflow-hidden border rounded-lg">
                  <img class="h-auto max-w-full rounded-lg select-none hover:scale-110 transition-all duration-500" src="assets/img/gallery/<?= $gallery["gambar"]; ?>" alt="<?= $gallery["gambar"]; ?>">
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </section>

   <!-- Contact Section -->
   <section id="contact" class="contact-section bg-white dark:bg-gray-900 pt-12 font-noto min-h-screen z-20 flex flex-col justify-center items-center">
      <div class="max-w-screen-xl py-4 px-8 mx-auto z-10 lg:py-12 md:px-24 lg:px-48 2xl:px-72">
         <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
         <p class="mb-8 lg:mb-16 font-light text-center text-gray-800 dark:text-gray-300 sm:text-xl">Share Your Feedback and Suggestions to Help Us Enhance Service Quality</p>
         <form action="#" class="space-y-8">
            <div>
               <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
               <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="itclub@gmail.com" required>
            </div>
            <div class="sm:col-span-2">
               <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
               <textarea id="message" rows="6" class="block resize-none p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
            </div>
            <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-600 transition-all sm:w-fit hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-500 dark:hover:bg-primary-400 dark:focus:ring-primary-800">Send message</button>
         </form>
      </div>
   </section>

   <!-- Footer -->
   <footer class="bg-white dark:bg-gray-900 py-24 font-noto flex flex-col justify-center items-center">
      <div class="mx-auto w-full z-10 max-w-screen-xl p-6 sm:p-8 md:p-12 xl:p-8">
         <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
               <a href="index.php" class="flex items-center">
                  <img src="assets/logo/logo-light.png" class="h-16 me-12 md:h-24 select-none" alt="ITClub Logo" />
               </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
               <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                     <li class="mb-4">
                        <a href="https://unsplash.com/" class="hover:underline transition-all duration-500">Unsplash</a>
                     </li>
                     <li>
                        <a href="https://tailwindcss.com/" class="hover:underline transition-all duration-500">Tailwind CSS</a>
                     </li>
                  </ul>
               </div>
               <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                     <li class="mb-4">
                        <a href="#" class="hover:underline transition-all duration-500 ">Instagram</a>
                     </li>
                     <li>
                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline transition-all duration-500">Discord</a>
                     </li>
                  </ul>
               </div>
               <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                     <li class="mb-4">
                        <a href="#" class="hover:underline transition-all duration-500">Privacy Policy</a>
                     </li>
                     <li>
                        <a href="#" class="hover:underline transition-all duration-500">Terms &amp; Conditions</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
         <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#" class="hover:underline transition-all duration-500">ITClub™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
               <a href="#" class="text-gray-500 hover:text-gray-900 transition-all duration-300 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                     <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Facebook page</span>
               </a>
               <a href="#" class="text-gray-500 hover:text-gray-900 transition-all duration-300 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                     <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                  </svg>
                  <span class="sr-only">Discord community</span>
               </a>
               <a href="#" class="text-gray-500 hover:text-gray-900 transition-all duration-300 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                     <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Twitter page</span>
               </a>
               <a href="#" class="text-gray-500 hover:text-gray-900 transition-all duration-300 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                     <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">GitHub account</span>
               </a>
               <a href="#" class="text-gray-500 hover:text-gray-900 transition-all duration-300 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                     <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Dribbble account</span>
               </a>
            </div>
         </div>
      </div>
   </footer>

   <!-- Scroll Back To Top Button -->
   <?php include "includes/scroll-back.php"; ?>

   <!-- Scroll Back To Top Javascript -->
   <script src="js/scroll-back.js"></script>

   <!-- Navbar's JavaScript -->
   <script src="js/navbar.js"></script>

   <!-- Darkmode Background Effect -->
   <script src="js/canvas.js"></script>

   <!-- Club Text Animation -->
   <script src="js/club-text.js"></script>
</body>

</html>