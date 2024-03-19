<!DOCTYPE html>
<html>

<head>
    <title>CSP2 base files</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    Output van in JS opgebouwde HTML (zie JS-script)
    <div id="output"></div>

    <!-- aanroepen van Axios bibliotheek voor het maken van HTTP-requests (= AJAX-calls) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>
    <script>
        // function waarin met een AJAX-request met Axios, de bieren worden opgehaald 
        // en de fShow wordt aangeroepen die de bieren toont
        function fStart() {
            let url = 'https://15euros.nl/api/bier_basic.php';
            //console.log("in fLoadJson. URL = " + url);
            axios.get(url)
                .then((response) => {
                    let beers = response.data;
                    //console.log("beers =", beers);
                    fShow(beers)
                })
                .catch(function (error) {
                    console.log("error=", error);
                });
        }
        fStart(); //fStart wordt bij het laden van de pagina direct aangeroepen

        // fShow krijgt als parameter "beers" mee van het AJAX-request en bouwt 
        // met een JS foreach een variabele html op waarin de biertjes getoond worden
        function fShow(beers) {
            let html = "";
            html += "<table>"
            beers.forEach(function (beer, index) {
                html += "<tr>"
                html += "<td>" + beer.naam + "</td>"
                html += "<td>" + beer.brouwer + "</td>"
                html += "</tr>"
                //html += (index+1) + ") " + beer.naam + ", " + beer.brouwer + "perc: " + Math.round(100*beer.perc) +"<br>";
            });
            html += "</table>"
            document.getElementById("output").innerHTML += html;
        }
    </script>
</body>

</html>