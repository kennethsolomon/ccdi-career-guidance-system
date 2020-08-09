<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Student');
        data.addRows([

<?php 
$curretnYear = date("Y");

//$query = "SELECT * FROM municipality";

$query = "SELECT MIN(id) as id, SUM(`count`) as COUNT, year from user WHERE userLevel=3 GROUP BY year";
$result = mysqli_query($conn, $query);

$num_row = mysqli_num_rows($result);
if ($num_row > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $count = $row['COUNT'];
        $year = $row['year'];

            echo "['".$year."',".$count."],";


    }
}

?>
        ]);
        // Set chart options
        var bar_options2 = {'title':'Yearly Data',
                       'width':800,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var barchart2 = new google.visualization.BarChart(document.getElementById('bar_div2'));
        barchart2.draw(data, bar_options2);
      }
</script>
