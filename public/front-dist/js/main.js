const loginBtn = document.querySelector("#login");
const loginPageShow = document.querySelector("#loginPageShow");

// Toggle modal
loginBtn.addEventListener("click", function (event) {
  event.preventDefault();
  event.stopPropagation(); // Prevent document click from immediately hiding it
  loginPageShow.classList.toggle("hidden");
});

// Always listen for clicks anywhere on the page
document.addEventListener("click", function (e) {
  if (
    !loginPageShow.classList.contains("hidden") && // only if modal is visible
    !loginPageShow.contains(e.target) &&           // and click is not inside modal
    e.target !== loginBtn                          // and not the login button
  ) {
    loginPageShow.classList.add("hidden");         // then hide modal
  }
});

