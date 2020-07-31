<?php
// Connection 
include_once('./connection.php');

if (isset($_POST['btnChartType'])) {
    $chartType = $_POST['chartDataType'];
    if($chartType == 'student'){
        $url = "./../chartReports.php?id=1&chart_type=bar";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    } 
    else if($chartType == 'municipality'){
        $url = "./../chartReportm.php?id=1&chart_type=bar";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    }
    else if($chartType == 'school'){
        $url = "./../chartReportsc.php?id=1&chart_type=bar";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    }
    else if($chartType == 'course'){
        $url = "./../chartReportc.php?id=1&chart_type=bar";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    }
    else if($chartType == ''){
        $url = "./../home.php?id=1";
        $url = str_replace(PHP_EOL, '', $url);
        header("Location: $url");
    }


}
