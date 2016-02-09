<?php 
    // Start MySQL Connection
    include('dbconnect.php'); 
?>

<html>
<head>
    <title>TCL Wireless POP Infra Monitoring</title>
    <style type="text/css">
        .table_titles, .table_cells_odd, .table_cells_even {
                padding-right: 20px;
                padding-left: 20px;
                color: #000;
        }
        .table_titles {
            color: #FFF;
            background-color: #666;
        }
        .table_cells_odd {
            background-color: #CCC;
        }
        .table_cells_even {
            background-color: #FAFAFA;
        }
        table {
            border: 2px solid #333;
        }
        body { font-family: "Trebuchet MS", Arial; }
    </style>
</head>

<!--<meta http-equiv="refresh" content="5" > -->

    <body>
        <h1>TCL Wireless POP Infra Monitoring</h1>
    <table border="0" cellspacing="0" cellpadding="4">
      <tr>
            <td class="table_titles">ID</td>
            <td class="table_titles">Date and Time</td>
            <td class="table_titles">BTS_IP</td>
            <td class="table_titles">Temperature in Celsius</td>
            <td class="table_titles">Humidity in RH</td>
            <td class="table_titles">AC Voltage (Y/N)</td>
            <td class="table_titles">DC Voltage (V)</td>
          </tr>
<?php
    // Retrieve all records and display them
    $result = mysqli_query($link, "SELECT * FROM Infra_Sensors ORDER BY id ASC");

    // Used for row color toggle
    $oddrow = true;

    // process every record
    while( $row = mysqli_fetch_array($result) )
    {
        if ($oddrow) 
        { 
            $css_class=' class="table_cells_odd"'; 
        }
        else
        { 
            $css_class=' class="table_cells_even"'; 
        }

        $oddrow = !$oddrow;

        echo '<tr>';
        echo '   <td'.$css_class.'>'.$row["id"].'</td>';
        echo '   <td'.$css_class.'>'.$row["event"].'</td>';
        echo '   <td'.$css_class.'>'.$row["BTSID"].'</td>';
        echo '   <td'.$css_class.'>'.$row["Temperature"].'</td>';
        echo '   <td'.$css_class.'>'.$row["Humidity"].'</td>';
        echo '   <td'.$css_class.'>'.$row["AC_Voltage"].'</td>';
        echo '   <td'.$css_class.'>'.$row["DC_Voltage"].'</td>';
        echo '</tr>';
    }
?>
    </table>
    </body>
</html>
