<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>toets</title>

    <form action="" method="post">

        <?php
        if (isset($_POST["voornaam"]) || isset($_POST["achternaam"]) || isset($_POST["email"])) {
            $voornaam = $_POST["voornaam"];

            if ($_POST["knop"] == true) {
                echo "Dankjewel" . $voornaam . "voor je aanmelding!";
            }
        }
        ?>

        </div>

    </form>
</head>

<body>




    <div id="bovenkant">
        <div id="sneeuwflokje">&#10052;</div>
        <div id="header">christmas greetings</div>
        <div id="kestboom">&#127876;</div>
    </div>

    <div id="nav" class="rounded">
        <a href="">Home |</a>
        <a href="">Products |</a>
        <a href="">Company |</a>
        <a href="">Blog </a>

    </div>

    <div id="vakjes">

        <div id="linkervakje">
            <div id="par1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempor diam ut arcu
                rhoncus, a dignissim nunc vestibulum. Donec sed metus pharetra, scelerisque eros a, fringilla arcu.
                Curabitur eu nisl accumsan, sagittis elit non, mattis leo. Sed tincidunt massa et mattis tempor. Sed
                condimentum posuere nibh, id gravida erat egestas vel. Quisque vestibulum venenatis aliquam. Sed
                placerat non ex vel posuere. Vestibulum ac justo a ante hendrerit sagittis et lobortis diam. Praesent
                iaculis velit eu velit faucibus blandit. Suspendisse a ligula lobortis, porta libero rutrum, venenatis
                ante. Integer sed mi non libero ornare facilisis. Aliquam erat volutpat. Morbi vel nunc ac eros luctus
                luctus. Morbi hendrerit velit ut lacus rutrum, et tincidunt tellus molestie.</div>
            <div id="par2">Nunc velit diam, varius quis diam at, suscipit vulputate sem. Proin sed pellentesque lorem.
                Sed a ipsum in arcu tempus ornare. Aenean venenatis tincidunt arcu, vel maximus urna maximus nec. Class
                aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam elementum
                ultrices dolor, ac pellentesque urna sollicitudin consequat. In suscipit nulla nec massa tristique
                lobortis. Quisque ac dapibus ipsum, eget dignissim sem. Cras ultrices fringilla purus in maximus.
                Vivamus ut rutrum lacus. Vivamus in turpis in felis pulvinar tincidunt. Duis eu erat eget dui blandit
                suscipit non a augue. Maecenas suscipit neque erat, id consequat quam facilisis ut.</div>
            <div id="readmore">
                <button onclick="myFunction()" id="readmore">Read more</button>
            </div>
        </div>
        <div id="rechtervakje">
            <h1> Newsletter sign up</h1>
            <label for="voornaam">Voornaam</label>
            <input type="text" id="voornaam" name="voornaam" placeholder="voornaam">
            <label for="achternaam">Achternaam</label>
            <input type="text" id="achternaam" name="achternaam" placeholder="achternaam"> <br>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="email"> <br>
            <button type="submit" name="knop">Login</button>

        </div>
    </div>






    </div>


</body>

</html>