var num1 = document.getElementById("numero1")
var num2 = document.getElementById("numero2")

function operaciones() {
    var c = Number(num1.value);
    var d = Number(num2.value);

    var suma = c + d;
    var resta = c - d;
    var mult = c * d;
    var divi = c / d;
    var modulo = c % d;

    document.getElementById("resultados").innerHTML = 
    "<br><h1>Resultados:</h1>" +
    "Suma: " + c + " + " + d + " = " + suma + "<br>" +
    "Resta: " + c + " - " + d + " = " + resta + "<br>" +
    "Multiplicación:" + c + " * " + d + " = " +mult+ "<br>" +
    "División: " + c + " / " + d + " = " + divi + "<br>" +
    "Módulo: " + c + " mod. " + d + " = " + modulo + "<br>"
    }