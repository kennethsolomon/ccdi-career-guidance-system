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
        data.addColumn('number', 'Students');
        data.addRows([
<?php 
$year = date("Y");

$sJanruary = "SELECT * FROM user where month='Janruary' and year=$year";
$rJanruary = mysqli_query($conn, $sJanruary);
$sFebruary = "SELECT * FROM user where month='February' and year=$year";
$rFebruary = mysqli_query($conn, $sFebruary);
$sMarch = "SELECT * FROM user where month='March' and year=$year";
$rMarch = mysqli_query($conn, $sMarch);
$sApril = "SELECT * FROM user where month='April' and year=$year";
$rApril = mysqli_query($conn, $sApril);
$sMay = "SELECT * FROM user where month='May' and year=$year";
$rMay = mysqli_query($conn, $sMay);
$sJune = "SELECT * FROM user where month='June' and year=$year";
$rJune = mysqli_query($conn, $sJune);
$sJuly = "SELECT * FROM user where month='July' and year=$year";
$rJuly = mysqli_query($conn, $sJuly);
$sAugust = "SELECT * FROM user where month='August' and year=$year";
$rAugust = mysqli_query($conn, $sAugust);
$sSeptember = "SELECT * FROM user where month='September' and year=$year";
$rSeptember = mysqli_query($conn, $sSeptember);
$sOctober = "SELECT * FROM user where month='October' and year=$year";
$rOctober = mysqli_query($conn, $sOctober);
$sNovember = "SELECT * FROM user where month='November' and year=$year";
$rNovember = mysqli_query($conn, $sNovember);
$sDecember = "SELECT * FROM user where month='December' and year=$year";
$rDecember = mysqli_query($conn, $sDecember);

$janruary = mysqli_num_rows($rJanruary);
$february = mysqli_num_rows($rFebruary);
$march = mysqli_num_rows($rMarch);
$april = mysqli_num_rows($rApril);
$may = mysqli_num_rows($rMay);
$june = mysqli_num_rows($rJune);
$july = mysqli_num_rows($rJuly);
$august = mysqli_num_rows($rAugust);
$september = mysqli_num_rows($rSeptember);
$october = mysqli_num_rows($rOctober);
$november = mysqli_num_rows($rNovember);
$december = mysqli_num_rows($rDecember);
?>
          ['Janruary', <?php echo $janruary ?>],
          ['February', <?php echo $february ?>],
          ['March', <?php echo $march ?>],
          ['April', <?php echo $april ?>],
          ['May', <?php echo $may ?>],
          ['June', <?php echo $june ?>],
          ['July', <?php echo $july ?>],
          ['August', <?php echo $august ?>],
          ['September', <?php echo $september ?>],
          ['October', <?php echo $october ?>],
          ['November', <?php echo $november ?>],
          ['December', <?php echo $december ?>]
        ]);

        // Set chart options
        var bar_options = {'title':'Monthly Data',
                       'width':800,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var barchart = new google.visualization.BarChart(document.getElementById('bar_div'));
        barchart.draw(data, bar_options);

      }
</script>

