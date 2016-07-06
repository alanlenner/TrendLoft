
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

run(10000, 3); //milliseconds, frames

/*
window.onload = function() {
  var prueba = document.getElementsByClassName('imagenInicio');

  prueba[0].id = 'home2';

  var prueba = document.getElementById('home2');

  alert("prueba");
};
*/
