let navbar = document.querySelector('.header-container .navbar')
let menubtn = document.querySelector('#menu-btn')

menubtn.onclick= () =>{
    menubtn.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menubtn.classList.remove('fa-times');
    navbar.classList.remove('active');
}