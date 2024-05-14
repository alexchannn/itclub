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

<body class="selection:bg-gray-900 selection:text-white dark:selection:bg-white dark:selection:text-gray-900">
   <section id="login" class="login-section px-8 bg-primary-500 dark:bg-gray-900 font-noto min-h-screen flex justify-center items-center">
      <div class="grid max-w-screen-xl rounded-xl mx-auto z-10 lg:gap-8 xl:gap-0 lg:grid-cols-10">
         <div class="bg-white rounded-l-lg p-4 space-y-4 md:space-y-6 lg:p-8 lg:col-span-5">
            <div class="space-y-2">
               <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-800 lg:text-4xl dark:text-white">
                  Welcome To ITClub
               </h1>
               <h1 class="text-xl leading-tight tracking-tight text-gray-800 lg:text-sm dark:text-white">
                  Please enter login details below
               </h1>
            </div>
            <form class="space-y-4 md:space-y-6" action="#">
               <div>
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-800 dark:text-white">Your Name</label>
                  <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-800 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ethan Chuancia" required="">
               </div>
               <div>
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-800 dark:text-white">Your email</label>
                  <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-800 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com" required="">
               </div>
               <div>
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-800 dark:text-white">Password</label>
                  <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-800 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
               </div>
               <button type="submit" class="w-full text-white bg-primary-500 transition-all duration-300 hover:bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign up</button>
               <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                  Already have an account? <a href="./login.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign in</a>
               </p>
            </form>
         </div>
         <div class="hidden p-16 border border-y-[14px] border-r-[14px] border-white rounded-r-lg lg:mt-0 lg:col-span-5 lg:flex">
            <img src="../assets/img/register.svg" class="w-96 select-none" alt="Tech Company Vector">
         </div>
      </div>
   </section>

   <script src="../js/navbar.js"></script>
</body>

</html>