function checklogin() {
    let verzenden = true;
    let inputs = document.getElementsByClassName("checkform");
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value.length < 3) {
            inputs[i].style.backgroundColor = "red";
            verzenden = false;
        }
        else {
            inputs[i].style.backgroundColor = "lightgreen";
        }
    }
    if (verzenden) {
        document.getElementById("form").submit();
    }

    let artiest = document.getElementById("artiest").value.length
    let land = document.getElementById("land").value.length

    if (artiest < 3) {
        document.getElementById("output").innerHTML += "vul een artiets in" + "<br>";
    }
    if (land < 3) {
        document.getElementById("output").innerHTML += "vul een land in" + "<br>";
    }  
}

