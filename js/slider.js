//declaramos una variable llamada carrusel y llamamos el class con querySelector
var carrusel = document.querySelector(".carrusel-items");
//declaramos una variable 
let maxScrollLeft = carrusel.scrollWidth - carrusel.clientWidth;
let intervalo = null;
let step = 1
// utilizamos un intervalo y ese intervalo estaria en star y stop
//intervalo star para que se mueva
var start = () => {
    intervalo = setInterval(function () {
        carrusel.scrollLeft = carrusel.scrollLeft + step;
    if (carrusel.scrollLeft === maxScrollLeft ) {
        step = step * -1
    } else if (carrusel.scrollLeft === 0){
        step = step * -1
    }
    }, 10);
};
// intervalo stop para que se pause la imagen y grande
var stop = () => {
    clearInterval(intervalo);
};

carrusel.addEventListener("mouseover", () => {
   stop();
});

carrusel.addEventListener("mouseout", () => {
    start();
 });
start();