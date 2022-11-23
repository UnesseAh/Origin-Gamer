let burger=document.querySelector("#burger");
let asideBar=document.querySelector("#aside-bar")
let section=document.querySelector("#section")
burger.addEventListener("click",()=>{
    asideBar.classList.toggle("d-block");
    section.classList.toggle("respons");
})
