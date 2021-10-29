<?php
    $link = mysqli_connect("localhost", "root", "","komis")
    or die("Could not select database");
    
    mysqli_select_db($link,"komis")
    or die("Could not selected database");
    
    $query = "SELECT * FROM samochody";
    $result = mysqli_query($link,$query)
    or die("Failed");
    
    while($row = mysqli_fetch_array($result))
    {
        echo $row["wykaz"];
    }
?>
