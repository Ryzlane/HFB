const frame = document.querySelector(".first-player__frame");

frame.addEventListener("click", () => {
    frame.classList.add("js-selected") 
 })


if (!frame.classList.contains(".js-selected")) {
    frame.addEventListener("mouseover", () => {
        frame.classList.add("js-selection") 
     })
    frame.addEventListener("mouseout", () => {
        frame.classList.remove("js-selection") 
     }) 
}