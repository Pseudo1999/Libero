const submitBtn = document.querySelector('.signup-btn');
const popupScreen = document.querySelector('.popup-screen');
const closeBtn  = document.querySelector('.close-btn');

submitBtn.addEventListener("click", () =>{
    popupScreen.classList.add("popup-active");
})

closeBtn.addEventListener("click", () => {
    popupScreen.classList.remove("popup-active");
})