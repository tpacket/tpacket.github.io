var dark = 0;

window.addEventListener("load", function() {
  dark = Number(sessionStorage.getItem("dark-mode"));
  document.body.className = dark ? "dark-mode" : "";
});

function toggleDark() {
  dark = 1 - dark;
  sessionStorage.setItem("dark-mode", dark);
  document.body.className = dark ? "dark-mode" : "";
}