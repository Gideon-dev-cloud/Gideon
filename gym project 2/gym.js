/**
 * Honcho's GYM - JavaScript for Interactivity
 */

document.addEventListener("DOMContentLoaded", () => {
  // 1. Mobile Navigation Toggle
  const menuToggle = document.getElementById("menuToggle");
  const navMenu = document.getElementById("navMenu");

  if (menuToggle && navMenu) {
    menuToggle.addEventListener("click", () => {
      // Toggle the 'active' class on the nav menu
      navMenu.classList.toggle("active");

      // Optional: Change the icon (hamburger to 'X' or vice-versa)
      const isExpanded = navMenu.classList.contains("active");
      menuToggle.classList.toggle("fa-bars", !isExpanded);
      menuToggle.classList.toggle("fa-xmark", isExpanded);
    });

    // Close the menu when a link is clicked (useful for single-page sites)
    const navLinks = navMenu.querySelectorAll("a");
    navLinks.forEach((link) => {
      link.addEventListener("click", () => {
        navMenu.classList.remove("active");
        menuToggle.classList.remove("fa-xmark");
        menuToggle.classList.add("fa-bars");
      });
    });
  }

  // 2. Add an animation to the anchor buttons on load/scroll for visual pop (optional)
  const anchorDiv = document.querySelector(".anchor");
  if (anchorDiv) {
    // Simple fade-in animation by adding a class after a delay
    setTimeout(() => {
      anchorDiv.style.opacity = "1";
      anchorDiv.style.transform = "translateY(0)";
    }, 500);

    // Add styles to gymproj.css:
    // .anchor { opacity: 0; transform: translateY(20px); transition: opacity 0.5s ease-out, transform 0.5s ease-out; }
  }

  console.log("Honcho's GYM scripts loaded successfully.");
});
