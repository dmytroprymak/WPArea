/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

(function ($) {
  // Site title and description.
  wp.customize("blogname", function (value) {
    value.bind(function (to) {
      $(".site-title a").text(to);
    });
  });
  wp.customize("blogdescription", function (value) {
    value.bind(function (to) {
      $(".site-description").text(to);
    });
  });

  // Header text color.
  wp.customize("header_textcolor", function (value) {
    value.bind(function (to) {
      if ("blank" === to) {
        $(".site-title, .site-description").css({
          clip: "rect(1px, 1px, 1px, 1px)",
          position: "absolute",
        });
      } else {
        $(".site-title, .site-description").css({
          clip: "auto",
          position: "relative",
        });
        $(".site-title a, .site-description").css({
          color: to,
        });
      }
    });
  });
})(jQuery);

const mobileMenu = document.querySelector("#primary-menu");
const menuBtnOpen = document.querySelector(".menu-btn-open");
const menuBtnClose = document.querySelector(".menu-btn-close");
const header = document.querySelector(".header");

const toggleMenu = () => {
  mobileMenu.classList.toggle("is-open");
  header.classList.toggle("is-open");
  document.body.classList.toggle("is-scroll-disabled");
};

// const disableScroll = () =>

menuBtnOpen.addEventListener("click", toggleMenu);
menuBtnClose.addEventListener("click", toggleMenu);

document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".section");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("section--visible");
        }
      });
    },
    {
      threshold: 0.2,
    }
  );

  sections.forEach((section) => observer.observe(section));
});
