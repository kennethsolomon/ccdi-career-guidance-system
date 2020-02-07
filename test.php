
<?php
include_once './includes/connection.php';
$sql = "SELECT * FROM examQuestion";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) <= 3 && mysqli_num_rows($result) != 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["question"] . "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);

?>