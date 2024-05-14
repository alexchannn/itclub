const toggleMobileMenu = () => {
   const navbar = document.getElementById("navbar-sticky");
   const mobileMenuButton = document.getElementById("mobile-menu-button");
   const hamburgerIcon = document.getElementById("hamburger-icon");
   const closeIcon = document.getElementById("close-icon");

   if (navbar.classList.contains("hidden")) {
      navbar.classList.remove("hidden");
      navbar.classList.add("block");
      mobileMenuButton.setAttribute("aria-expanded", "true");
      hamburgerIcon.classList.add("hidden");
      closeIcon.classList.remove("hidden");
   } else {
      navbar.classList.remove("block");
      navbar.classList.add("hidden");
      mobileMenuButton.setAttribute("aria-expanded", "false");
      hamburgerIcon.classList.remove("hidden");
      closeIcon.classList.add("hidden");
   }
};

const toggleDarkMode = () => {
   const body = document.body;
   body.classList.toggle("dark");
   const icon = document.getElementById("theme-icon");
   const logoImg = document.querySelector(".navbar-sticky img");

   if (body.classList.contains("dark")) {
      icon.classList.remove("fa-sun");
      icon.classList.add("fa-moon");
      logoImg.src = "../assets/logo/logo-dark.png";
   } else {
      icon.classList.remove("fa-moon");
      icon.classList.add("fa-sun");
      logoImg.src = "../assets/logo/logo-light.png";
   }
};
