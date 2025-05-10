// script.js

// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById("nav-toggle");
    const navMenu = document.getElementById("nav-menu");
  
    // Toggle navigation menu visibility on mobile
    toggleBtn.addEventListener("click", function () {
      navMenu.classList.toggle("show");
    });
  
    // Optional: Collapse nav menu when a link is clicked (on mobile)
    const navLinks = document.querySelectorAll(".nav-link");
    navLinks.forEach(function (link) {
      link.addEventListener("click", function () {
        navMenu.classList.remove("show");
      });
    });
  });
  window.scrollTo({ top: section.offsetTop, behavior: 'smooth' });