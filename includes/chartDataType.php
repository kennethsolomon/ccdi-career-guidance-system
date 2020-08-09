<?php
// Connection 
include_once('./connection.php');
$year = $_POST['year'];
if (isset($_POST['btnChartType'])) {
    $chartType = $_POST['chartDataType'];
    if($chartType == 'student'){
        $url = "./../chartReports.php?id=1&chart_type=bar&year=$year";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    } 
    else if($chartType == 'municipality'){
        $url = "./../chartReportm.php?id=1&chart_type=bar&municipality=&year=$year";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    }
    else if($chartType == 'school'){
        $url = "./../chartReportsc.php?id=1&chart_type=bar&school=&year=$year";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    }
    else if($chartType == 'course'){
        $url = "./../chartReportc.php?id=1&chart_type=bar&course=&year=$year";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    }
    else if($chartType == 'status'){
        $url = "./../chartReportr.php?id=1&chart_type=bar&status=&year=$year";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    }
    else if($chartType == ''){
        $url = "./../home.php?id=1";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    }


}
