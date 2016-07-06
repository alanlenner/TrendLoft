/*
function run(interval, frames) {
    var int = 1;

    function func() {
        var cambio = document.getElementsByClassName('imagenInicio');
        cambio[0].id = 'home'+int;
        var cambio = document.getElementById('home'+int);
        int++;
        if(int > frames){
          int = 1;
        }
    }

    var swap = window.setInterval(func, interval);
}

run(5000, 3); //milliseconds, frames
*/

$('#divID').css("background-image", "url(/myimage.jpg)");
