const blocksHome = document.querySelectorAll(".live-battles__block");


for(let i = 0; i < blocksHome.length; i++) {
    blocksHome[i].addEventListener("mouseover", () => {
        const timerToBet = blocksHome[i].querySelector(".text-container__timer")
       timerToBet.innerText = "Bet"
       const pictureEffect = blocksHome[i].querySelector(".js-effect")
       pictureEffect.classList.add("is-active") 
    })
}

for(let i = 0; i < blocksHome.length; i++) {
    blocksHome[i].addEventListener("mouseout", () => {
        const timerToBet = blocksHome[i].querySelector(".text-container__timer")
       timerToBet.innerText = "0:39"
       const pictureEffect = blocksHome[i].querySelector(".js-effect")
       pictureEffect.classList.remove("is-active")
    })
}


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

console.log(frame.classList.contains(".js-selected"))