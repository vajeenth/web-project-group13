//Get element from the DOM
const menBtn=document.getElementById('menu-btn');
const navbar=document.getElementById('navbar');
const menu=document.querySelector('.menu');
//PX offset when the navbar activates
const offset=50;

//Add click event to menu button
menBtn.addEventListener('click',() => {
   menu.classList.toggle('menu-open');
});

//Add scroll event listner to the page
window.addEventListener("scroll",() => {
    //If the page is scrolled by 50px or more
    if(pageYOffset > offset) {
        //Active navbar
        navbar.classList.add('navbar-active');
    }else{
        //Deactivate navbar
        navbar.classList.remove('navbar-active');
    }
});