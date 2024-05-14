<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Scroll Back To Top Button</title>
   <link href="../fonts/noto.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdn.tailwindcss.com"></script>
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

<body>

   <div id="progress" class="bg-primary-300 fixed bottom-6 right-6 w-12 h-12 z-30 grid place-items-center rounded-full dark:bg-primary-400">
      <span id="progress-value" class="block w-10 h-10 bg-white rounded-full grid place-items-center dark:bg-gray-900">
         <svg class="w-5 h-5" style="transform: rotate(-90deg);" fill="#3b82f6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
         </svg>
      </span>
   </div>

   <script src="../js/scroll-back.js"></script>

</body>

</html>