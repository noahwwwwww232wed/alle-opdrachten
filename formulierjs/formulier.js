//function check() {
//alert("ingevuld");
//let vnaam = document.getElementById("voornaam").value;
//console.log("de voornaam is" + vnaam);
//}


function check1() {

    let anaam = document.getElementById("achternaam").value.length
    let vnaam = document.getElementById("voornaam").value.length
    let tv = document.getElementById("tv").value.length
    let adres = document.getElementById("adres").value.length
    let plaats = document.getElementById("plaats").value.length
    let postcode = document.getElementById("postcode").value.length
    let output = document.getElementById("output").value
    
    let verzenden = true;
    let inputs = document.getElementsByTagName("inputs");

    document.getElementById("output").innerHTML = "";


    if (vnaam < 2) {
        document.getElementById("voornaam").style.backgroundColor = "red";
        document.getElementById("output").innerHTML += "voornaam mag niet leeg zijn" + "<br>";

    } else {    
        document.getElementById("voornaam").style.backgroundColor = "lightgreen";
    }

    if (anaam < 2) {
        document.getElementById("achternaam").style.backgroundColor = "red";
        document.getElementById("output").innerHTML += "achternaam mag niet leeg zijn" + "<br>";

    }
    else {
        document.getElementById("achternaam").style.backgroundColor = "lightgreen";
    }
    
    if (adres < 2) {
        document.getElementById("adres").style.backgroundColor = "red";
        document.getElementById("output").innerHTML += "adres mag niet leeg zijn" + "<br>";

    }
    else {
        document.getElementById("adres").style.backgroundColor = "lightgreen";
    }
    if (postcode < 2) {
        document.getElementById("postcode").style.backgroundColor = "red";
        document.getElementById("output").innerHTML += "postcode mag niet leeg zijn" + "<br>";

    }
    else {
        document.getElementById("postcode").style.backgroundColor = "lightgreen";
    }
    if (plaats < 2) {
        document.getElementById("plaats").style.backgroundColor = "red";
        document.getElementById("output").innerHTML += "plaats mag niet leeg zijn";
    }
    else {
        document.getElementById("plaats").style.backgroundColor = "lightgreen";
    }
}





