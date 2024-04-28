function primos() {

    document.getElementById("resul","resultados").innerHTML = ""

    var x = Number(document.getElementById("numero").value);

    var i
    var z
    var primo

    document.getElementById("resultado").innerHTML =
                "<br>" + 
                "<h1>" +
                "Los numeros primos antes de " + x + " son: "
                "</h1>"

    for(i = 2; i<=x; i++){
        primo = true;

        for(z = 2; z<i ; z++){
            if(i%z == 0){
            primo = false;
            }
        }
            if(primo){
                document.getElementById("resul").innerText += " " + i  
            }
        }
    }