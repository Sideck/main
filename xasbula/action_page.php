<?php
$conn = new mysqli("localhost", "root", "", "XASBULA");
if ($connect === false) {
    die("SideckCourses | Ошибка при подключение к БД MySQL: ". mysqli_connect_error());
}

//$sql = "INSERT INTO Abdurozik (name, email, course, kodcoins) VALUES ('Hi GitLera HUB', 'her76o@mail.ru','PHP','655')";
//if(mysqli_query($conn, $sql)){
//echo "SideckCourse | [DEBUG] | Данные успешно отправлены.";
//} else{
//    echo "SideckCourse | [DEBUG] | Error: " . mysqli_error($conn);
//}

//$sql = 'SELECT name FROM Abdurozik';
//if($result = mysqli_query($conn, $sql)){

//    $rowsCount = mysqli_num_rows($result);
//    echo "<p>Получено объектов: $rowsCount</p>";
//    echo "<table><tr><th>Имя</th>";
//    foreach($result as $row){
//        echo "<tr>";
//        echo "<td>" . $row["name"] . "</td>";
//        echo "</tr>";
//    }
//    echo "</table>";
//    mysqli_free_result($result);
//}else {
//        echo "SideckCourse | [DEBUG] | Error: " . mysqli_error($conn);
//}

$sql = "CREATE TABLE Xasbik (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(30) NOT NULL,
    course VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "SideckCourse | [DEBUG] | База успешно созданa.\n";
} else {
    echo "SideckCourse | [DEBUG] | Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>