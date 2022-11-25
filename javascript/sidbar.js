let burger=document.querySelector("#burger");
let asideBar=document.querySelector("#aside-bar")
burger.addEventListener("click",()=>{
    asideBar.classList.toggle("affichage");
})
