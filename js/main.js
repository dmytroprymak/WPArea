const mobileMenu = document.querySelector(".header__nav");
const menuBtnOpen = document.querySelector("#btn-open");
// const menuBtnClose = document.querySelector(".menu-btn-close");
const header = document.querySelector(".header");

const toggleMenu = () => {
  mobileMenu.classList.toggle("is-open");
  header.classList.toggle("is-open");
  document.body.classList.toggle("is-scroll-disabled");
};

menuBtnOpen.addEventListener("click", toggleMenu);
// menuBtnClose.addEventListener("click", toggleMenu);

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
