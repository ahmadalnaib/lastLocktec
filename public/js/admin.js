const toggle = document.getElementById("toggle");
const alert = document.querySelector(".alert-success");

toggle.addEventListener("click", () => {
    document.body.classList.toggle("show-nav");
});

setTimeout(() => {
    alert.style.display = "none";
}, 3000);
