function checklogin() {
    let verzenden = true;
    let inputs = document.getElementsByClassName("inputs");
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
        document.getElementById("myform").submit();
    }
}
