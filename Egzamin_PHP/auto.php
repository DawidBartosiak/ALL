<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="auto.css">
</head>

<?php
    //skrypt 1
    $link = mysqli_connect("localhost", "root", "","komis")
    or die("Could not select database");
    
    mysqli_select_db($link,"komis")
    or die("Could not selected database");
    
    $query1 = "SELECT id, marka, model FROM samochody";
    $result1 = mysqli_query($link,$query1)
    or die("Failed"); 
?>

<?php
    //skrypt 2
    $link = mysqli_connect("localhost", "root", "","komis")
    or die("Could not select database");
    
    mysqli_select_db($link,"komis")
    or die("Could not selected database");
    
    $query = "SELECT Samochody_id, klient FROM zamowienia";
    $result = mysqli_query($link,$query)
    or die("Failed"); 
?>

<?php
    //skrypt 3
    $link = mysqli_connect("localhost", "root", "","komis")
    or die("Could not select database");
    
    mysqli_select_db($link,"komis")
    or die("Could not selected database");
    
    $query2 = "SELECT * FROM samochody WHERE marka='Fiat'";
    $result2 = mysqli_query($link,$query2)
    or die("Failed"); 
?>


<body>
    <div class="baner">
        <h1>SAMOCHODY</h1>
    </div>
    
    <div class="lewy">
        <h2>Wykaz samochodów</h2>
            <ul class="wykaz">
            
            <?php
            while($row = mysqli_fetch_array($result1))
            {
             echo $row[0]." ". $row[1]." ". $row[2].     "<br>";
            }
            ?>
        
            </ul>

        <h2>Zamówienia</h2>
            <ul class="zamowienia">
                <?php
            while($row = mysqli_fetch_array($result))
    {
        echo $row[0]." ". $row[1].     "<br>";
    }
    ?>
            </ul>
    </div>

    <div class="prawy">
        <h2>Pełne dane: Fiat</h2>
        

        <?php
            while($row = mysqli_fetch_array($result2))
        {
            echo $row[0]." ". $row[1]. $row[2]." ". $row[3]." ". $row[4]." ". $row[5]." ".  "<br>";
        }
        ?>


    </div>
    
    <div class="stopka">

    <table>
        <tr>
            <td>
                <a target="_blank" href="kwerendy.txt">kwerendy</a>
            </td> 
            
            <td>
                <p>Autor: 02311102318</p>
            </td> 
            
            <td>
            <img src="auto.png" alt="komis samochodowy">
            </td>
        </tr>
    </table>


    </div>
</body>
</html>



