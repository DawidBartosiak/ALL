<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl1.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Ogłoszeniowy</title>
</head>
<body>
    <div class="baner">
        <h1>Portal Ogłoszeniowy</h1>
    </div>
    <div class="lewy">
        <h2>Kategorie Ogłoszeń</h2>
        <ul>
            <li>
                Książki
            </li>
            <li>
                Muzyka
            </li>
            <li>
                Filmy
            </li>
        </ul>
        <img src="ksiazki.jpg">
        <table>
            <tr>
                <td>Liczba ogłoszeń</td>
                <td>Cena ogłoszenia</td>
                <td>Bonus</td>
            </tr>
            <tr>
                <td>1 - 10</td>
                <td>1 PLN</td>
                <td rowspan="3"> Subskrypcja newslettera o upust 0,20 PLN na ogłoszenie </td>
            </tr>
            <tr>
                <td>11 - 50</td>
                <td>0,80PLN</td>
            </tr>
            <tr>
                <td>51 i więcej</td>
                <td>0,60 PLN</td>
            </tr>
            
        </table>
    </div>
    <div class="prawy">
        <h2>Ogłoszenia kategorii książki</h2>

        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ogloszenia";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Zapytanie 1 <br><br>";

$sql = "SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { 
      echo "id: " . $row["id"]. " - Tytuł: " .  $row["tytul"]. " Treść " . $row["tresc"]. "<br>";
    }
  } else {
    echo "0 results";
  }

  echo "<br><br>Zapytanie 2 <br><br>";

  $sql = "SELECT DISTINCT `ogloszenie`.`uzytkownik_id`, `uzytkownik`.`telefon` FROM `ogloszenie` , `uzytkownik` WHERE `ogloszenie`.`uzytkownik_id`=1;";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) { 
      echo "ID: " . $row["uzytkownik_id"]. " - Telefon: " .  $row["telefon"]. "<br>";
    }

  echo "<br><br>Zapytanie 3 <br><br>";

  $sql = "CREATE USER 'moderator'@'localhost' IDENTIFIED BY 'qwerty'";
  $result = $conn->query($sql);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
      echo "Wykonano";
  }

  echo "<br><br>Zapytanie 4 <br><br>";

  $sql = "GRANT SELECT, DELETE ON *.* TO 'moderator'@'localhost'";
  $result = $conn->query($sql);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
      echo "Wykonano";
  }

$conn->close();
?>
    </div>
    <div class="stopka">
        <p>Portal ogłoszeniowy opracował: Dawid Bartosiak</p>
    </div>
</body>
</html>