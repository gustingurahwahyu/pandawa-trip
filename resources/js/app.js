import './bootstrap';



// // Scroll Change Color Navbar
// const navbar = document.getElementById('navbar');
// window.onscroll = function () { 
//     if ( document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200 ) {
//         navbar.classList.add("bg-white");
//         navbar.classList.remove("transparent");
//     } 
//     else {
//         navbar.classList.add("transparent");
//         navbar.classList.remove("bg-white");
//     }
// };


const navbar = document.getElementById("navbar");

window.addEventListener("scroll", () => {
  const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

    console.log(scrollTop);

  if (scrollTop > 100) {
    navbar.classList.add('bg-white/100');
    navbar.classList.remove('bg-white/0');
  } else {
      navbar.classList.add('bg-white/0');
    navbar.classList.remove('bg-white/100');
  }
});