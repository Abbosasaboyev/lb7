<?php
$email = $_GET['email'];
$psw = $_GET['psw'];

$newmail = htmlspecialchars($email, ENT_QUOTES);
$newpsw = htmlspecialchars($psw, ENT_QUOTES);
echo $newmail;
echo "<br>";
echo $newpsw;
echo "<br>";
echo password_hash($newpsw, PASSWORD_DEFAULT);
echo "<br>";



$conn = mysqli_connect("localhost", "root", "", "mking");
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM user";
if ($result = mysqli_query($conn, $sql)) {

    $rowsCount = mysqli_num_rows($result); // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>email</th><th>Password</th></tr>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["mail"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
} else {
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);