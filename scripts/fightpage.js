const frame = document.querySelectorAll(".js-frame");

for(let i = 0; i < frame.length; i++) {
    frame[i].addEventListener("click", () => {
        for(let j = 0; j < frame.length; j++) {
            if(frame[j].classList.contains("js-selected")) {
                frame[j].classList.remove("js-selected") 
            }
        }
        frame[i].classList.add("js-selected") 
     })
    
    
    if (!frame[i].classList.contains(".js-selected")) {
        frame[i].addEventListener("mouseover", () => {
            frame[i].classList.add("js-selection") 
         })
         frame[i].addEventListener("mouseout", () => {
            frame[i].classList.remove("js-selection") 
         }) 
    }
}