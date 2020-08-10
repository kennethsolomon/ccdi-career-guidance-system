<script type="text/javascript">
google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Student', 'Enrolled', 'Prospect'],
<?php 
//$year = date("Y");
//$query = "SELECT * FROM municipality";

$query = "SELECT MIN(id) as id, SUM(`count`) as COUNT, year from user WHERE userLevel=3 GROUP BY year";
$result = mysqli_query($conn, $query);
$num_row = mysqli_num_rows($result);



if ($num_row > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $count = $row['COUNT'];
            $year = $row['year'];
$query2 = "SELECT * from user WHERE userLevel=3 AND status='Enrolled' and year='$year'";
$result2 = mysqli_query($conn, $query2);
$enrolled = mysqli_num_rows($result2);
            echo "['".$year."',".$enrolled.",".$count."],";
    }
}




?>
        ]);

        var options = {
          width: 800,
		  height: 500,
          bars: 'horizontal', // Required for Material Bar Charts.
        };

      var chart = new google.charts.Bar(document.getElementById('bar_div2'));
      chart.draw(data, options);
    };
</script>
