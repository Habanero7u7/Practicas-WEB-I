document.write("<h2>Operadores aritméticos con javascript </h2>" + "<br>")
document.write("<p>En esta página vamos a ver los distintos operadores aritméticos con javascript.</p>")
document.write("<p>Para ello necesito que me des dos números con los que haremos las operaciones: </p>" + "<br>")

var a = prompt("escribe un número");
var b = prompt("escribe otro número");

a = Number(a)
b = Number(b)

document.write("<h3>Operadores clásicos</h3>" + "<br>")
var suma = a + b ;
var resta = a - b;
var multiplicacion = a * b;
var division = a / b;
var modulo = a % b

document.write ("Suma: " + a +" + " + b + " = " + suma + "<br>")
document.write ("Resta: " + a +" - " + b + " = " + resta + "<br>")
document.write ("Multiplicación: " + a + " * " + b + " = " + multiplicacion + "<br>")
document.write ("División: " + a + " / " + b + " = " + division + "<br>")
document.write ("Módulo: " + a + " mod. " + b + " = " + modulo + "<br>" + "<br>" + "<hr>")