<?php
    // Connect to MySQL
    include("dbconnect.php");

    // Prepare the SQL statement
    $SQL = "INSERT INTO test.Infra_Sensors (BTSID ,Temperature ,Humidity ,AC_Voltage ,DC_Voltage) VALUES ('".$_GET["ip"]."', '".$_GET["temperature"]."', '".$_GET["humidity"]."', '".$_GET["acv"]."', '".$_GET["dcv"]."')";     

    // Execute SQL statement
    mysqli_query($link,$SQL);

    // Go to the review_data.php (optional)
    header("Location: review_data1.php");
    
    
?>
