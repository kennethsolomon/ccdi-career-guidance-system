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
        data.addColumn('number', 'Municipality');
        data.addRows([
<?php 
$year = date("Y");

$sSorsogon = "SELECT * FROM user where municipality='Sorsogon City' and year=$year";
$rSorsogon = mysqli_query($conn, $sSorsogon);

$sBarcelona = "SELECT * FROM user where municipality='Barcelona' and year=$year";
$rBarcelona = mysqli_query($conn, $sBarcelona);

$sBulan = "SELECT * FROM user where municipality='Bulan' and year=$year";
$rBulan = mysqli_query($conn, $sBulan);

$sBulusan = "SELECT * FROM user where municipality='Bulusan' and year=$year";
$rBulusan = mysqli_query($conn, $sBulusan);

$sCasiguran = "SELECT * FROM user where municipality='Casiguran' and year=$year";
$rCasiguran = mysqli_query($conn, $sCasiguran);

$sCastilla = "SELECT * FROM user where municipality='Castilla' and year=$year";
$rCastilla = mysqli_query($conn, $sCastilla);

$sDonsol = "SELECT * FROM user where municipality='Donsol' and year=$year";
$rDonsol = mysqli_query($conn, $sDonsol);

$sGubat = "SELECT * FROM user where municipality='Gubat' and year=$year";
$rGubat = mysqli_query($conn, $sGubat);

$sIrosin = "SELECT * FROM user where municipality='Irosin' and year=$year";
$rIrosin = mysqli_query($conn, $sIrosin);

$sJuban = "SELECT * FROM user where municipality='Juban' and year=$year";
$rJuban = mysqli_query($conn, $sJuban);

$sMagallanes = "SELECT * FROM user where municipality='Magallanes' and year=$year";
$rMagallanes = mysqli_query($conn, $sMagallanes);

$sMatnog = "SELECT * FROM user where municipality='Matnog' and year=$year";
$rMatnog = mysqli_query($conn, $sMatnog);

$sPilar = "SELECT * FROM user where municipality='Pilar' and year=$year";
$rPilar = mysqli_query($conn, $sPilar);

$sPrietoDiaz = "SELECT * FROM user where municipality='Prieto Diaz' and year=$year";
$rPrietoDiaz = mysqli_query($conn, $sPrietoDiaz);

$sStaMagdalena = "SELECT * FROM user where municipality='Sta. Magdalena' and year=$year";
$rStaMagdalena = mysqli_query($conn, $sStaMagdalena);

$sorsogon = mysqli_num_rows($rSorsogon);
$barcelona = mysqli_num_rows($rBarcelona);
$bulan = mysqli_num_rows($rBulan);
$bulusan = mysqli_num_rows($rBulusan);
$casiguran = mysqli_num_rows($rCasiguran);
$castilla = mysqli_num_rows($rCastilla);
$donsol = mysqli_num_rows($rDonsol);
$gubat = mysqli_num_rows($rGubat);
$irosin = mysqli_num_rows($rIrosin);
$juban = mysqli_num_rows($rJuban);
$magallanes = mysqli_num_rows($rMagallanes);
$matnog = mysqli_num_rows($rMatnog);
$pilar = mysqli_num_rows($rPilar);
$prietoDiaz = mysqli_num_rows($rPrietoDiaz);
$staMagdalena = mysqli_num_rows($rStaMagdalena);
?>


          ['Sorsogon', <?php echo $sorsogon ?>],
          ['Barcelona', <?php echo $barcelona ?>],
          ['Bulan', <?php echo $bulan ?>],
          ['Bulusan', <?php echo $bulusan ?>],
          ['Casiguran', <?php echo $casiguran ?>],
          ['Castilla', <?php echo $castilla ?>],
          ['Donsol', <?php echo $donsol ?>],
          ['Gubat', <?php echo $gubat ?>],
          ['Irosin', <?php echo $irosin ?>],
          ['Juban', <?php echo $juban ?>],
          ['Magallanes', <?php echo $magallanes ?>],
          ['Matnog', <?php echo $matnog ?>],
          ['Pilar', <?php echo $pilar ?>],
          ['Prieto Diaz', <?php echo $prietoDiaz ?>],
          ['Sta. Magdalena', <?php echo $staMagdalena ?>]

        ]);
        // Set chart options
        var pie_options = {'title':'Municipality Data',
                       'width':800,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var piechart = new google.visualization.PieChart(document.getElementById('pie_div'));
        piechart.draw(data, pie_options);

      }
</script>
