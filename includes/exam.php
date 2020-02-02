<?php
if ($geteNum == 0) {
    echo '
        <div class="row">
        The styling for this basic card example is created by using default Bootstrap utility classes.
        By using utility classes, the style of the card component can be easily modified with no need
        for any custom CSS!
        </div>
        <hr>
        <a href="exam.php?id=' . $id . '&eNum=' . $eNum . '" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
            <i class="fas fa-check"></i>
            </span>
            <span class="text">Start Exam</span>
        </a>
        ';
}
if ($geteNum > 0) {
    $sql = "SELECT * FROM examQuestion where id='$geteNum'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "question: " . $row["question"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
}
