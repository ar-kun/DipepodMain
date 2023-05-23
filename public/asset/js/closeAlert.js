const alertElement = document.getElementById("alert-post");
const closeButton = document.getElementById("closeButton");

closeButton.addEventListener("click", () => {
    alertElement.classList.add("hidden");
});
