function functie1() {
    let naamInput = document.getElementById("naam");
    let spanNaam = document.getElementById("spannaam");


    if(document.getElementById("naam").value.length < 2 || document.getElementById("naam").value.length > 10){
        document.getElementById("naam").style.backgroundColor = "red";
        spannaam.innerHTML = "de tekst moet minimaal 2 karkaters bevatten en maximaal 10";
    }
    else{
        document.getElementById("naam").style.backgroundColor = "green";
        spannaam.innerHTML = "voldoet aan de eisen";
    }
}

function functie2() {
    let leeftijd = document.getElementById("leeftijd").value;
    let output = document.getElementById("output")
    output.innerHTML = "";
    output.innerHTML = leeftijd + "<br>";

    let text = output.innerHTML;
    let length = text.length - 4;
    span.innerHTML = "Aantal letters in leeftijd: " + length;

    
}





