var nombre = prompt("Como te llamas")

if (nombre != ""){
    alert("Hola!! " + nombre)
} else {
    alert("No se ingreso nombre. Porfavor ingresa un nombre")
    window.location.reload()
}
