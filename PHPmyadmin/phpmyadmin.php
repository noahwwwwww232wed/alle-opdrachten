<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHPmyadmin</title>
</head>

<body>

    <?php
    $con = mysqli_connect("localhost", "root", "", "test1");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $sql = ("SELECT * FROM users");

    if ($result = mysqli_query($con, $sql)) {
        // Fetch one and one row
        while ($row = mysqli_fetch_row($result)) {
            echo $row[0] . $row[1] . "<br>";        
        }
        mysqli_free_result($result);
    }

    mysqli_close($con);

    ?>

</body>

</html>