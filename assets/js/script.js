let btnPopup = document.getElementById("btnPopup");
let popupBox = document.querySelector(".popupBox");
let popupVisible = false;

btnPopup.addEventListener("click", () => {
    if (popupVisible == false) {
        popupBox.classList.add("visible");
        popupBox.classList.remove("invisible");
        popupVisible = true;
    } else {
        popupBox.classList.add("invisible");
        popupBox.classList.remove("visible");
        popupVisible = false;
    }
})