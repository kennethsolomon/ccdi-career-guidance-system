<?php
// Connection 
include_once('./connection.php');

// Get Date and Time
date_default_timezone_set("Asia/Manila");
$currentDate = date("Y/m/d");

$filename = "studentBackup-$currentDate.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
if (isset($_POST['btnExportData'])) {
    $year = $_POST['exportYear'];
    if($year!=''){
        $sql = "SELECT lastName, firstName, middleName, address, municipality, course, lastSchoolAttended, phoneNumber, status, month, year, created_at FROM user WHERE userLevel != 1 AND userLevel != 0 AND year = '$year'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $flag = false;
            while ($row = mysqli_fetch_assoc($result)) {
                if (!$flag) {
                    // display field/column names as first row
                    echo implode("\t", array_keys($row)) . "\r\n";
                    $flag = true;
                }
                echo implode("\t", array_values($row)) . "\r\n";
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
    }
}
