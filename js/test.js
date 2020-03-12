// Hamburger menu
function onClickMenu() {
  document.getElementById("hamburgerMenuIcon").classList.toggle("change");
  document.getElementById("hamburgerNavbar").classList.toggle("change");
  document
    .getElementById("hamburgerMenuBackground")
    .classList.toggle("changeBackground");
  document.body.style.overflow = "hidden";
}
