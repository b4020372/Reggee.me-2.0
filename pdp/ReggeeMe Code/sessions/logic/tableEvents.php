<?php
    // Make a MySQL Connection
    mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("_db2") or die(mysql_error());

    // Get all the data from the "events" table
    $result = mysql_query("SELECT * FROM events") 
    or die(mysql_error());  

    echo '<table id="events" summary="Datapass">
<thead>
    <tr>
        <th scope="col">Event ID</th> //Name off table in DB
        <th scope="col">Module Code</th> //Name off table in DB
        <th scope="col">Event Name</th> //Name off table in DB
        <th scope="col">Start Week</th> //Name off table in DB
        <th scope="col">Event Type</th> //Name off table in DB
        <th scope="col">Time</th> //Name off table in DB
        <th scope="col">Weekday</th> //Name off table in DB
        <th scope="col">Frequency</th> //Name off table in DB
        <th scope="col">Duration (weeks)</th> //Name off table in DB       
    </tr>
</thead>
<tbody>';


    // keeps getting the next row until there are no more to get
    while($row = mysql_fetch_array( $result )) {
        if( $i % 2 == 0 ) {
            $class = " class='odd'";
        } else {
            $class = "";
        }
        // Print out the contents of each row into a table
        echo "<tr" . $class . "><td>"; 
        echo $row['name'];
        echo "</td><td>"; 
        echo $row['age'];
        echo "</td><td>"; 
        echo $row['issue'];
        echo "</td><td>"; 
        echo $row['Description'];
        echo "</td><td>";
        echo $row['quality'];
        echo "</td></tr>"; 
    } 

    echo "</tbody></table>";
?>