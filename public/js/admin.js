const toggle = document.getElementById("toggle");
// const alert = document.querySelector(".alert-success");
// const warning = document.querySelector(".alert-warning");

toggle.addEventListener("click", () => {
    document.body.classList.toggle("show-nav");
});

// setTimeout(() => {
//     alert.style.display = "none";
//     warning.style.display = "none";

// }, 3000);
