/**
 * Rainbow & Dove — Navigation
 * Handles sticky header, mobile menu toggle, and keyboard-accessible dropdowns.
 */
(function () {
  "use strict";

  const header     = document.querySelector(".site-header");
  const menuToggle = document.querySelector(".rd-menu-toggle");
  const mobileMenu = document.querySelector(".rd-mobile-menu");

  // ── Sticky header shadow on scroll ──────────────────────────────────
  if (header) {
    window.addEventListener("scroll", function () {
      header.classList.toggle("is-scrolled", window.scrollY > 10);
    }, { passive: true });
  }

  // ── Mobile menu toggle ───────────────────────────────────────────────
  if (menuToggle && mobileMenu) {
    menuToggle.addEventListener("click", function () {
      const isOpen = mobileMenu.classList.toggle("is-open");
      menuToggle.setAttribute("aria-expanded", String(isOpen));
    });
  }

  // ── Accessible dropdowns: open on hover (desktop), click (mobile) ───
  document.querySelectorAll(".wp-block-navigation-submenu").forEach(function (item) {
    const toggle = item.querySelector(".wp-block-navigation-submenu__toggle");
    const submenu = item.querySelector(".wp-block-navigation__submenu-container");
    if (!toggle || !submenu) return;

    // Hover (desktop)
    item.addEventListener("mouseenter", function () {
      submenu.style.display = "block";
    });
    item.addEventListener("mouseleave", function () {
      submenu.style.display = "";
    });

    // Click (keyboard / mobile)
    toggle.addEventListener("click", function (e) {
      e.stopPropagation();
      const isOpen = submenu.style.display === "block";
      submenu.style.display = isOpen ? "" : "block";
      toggle.setAttribute("aria-expanded", String(!isOpen));
    });
  });

  // Close dropdowns on outside click
  document.addEventListener("click", function () {
    document.querySelectorAll(".wp-block-navigation__submenu-container").forEach(function (m) {
      m.style.display = "";
    });
  });
})();
