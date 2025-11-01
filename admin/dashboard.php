<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>CUTTING CLUB SALON</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Font Awesome Icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- Google Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- Animate CSS -->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script> new WOW().init(); </script>
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.js"></script>
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
</head> 
<body class="cbp-spmenu-push">
<div class="main-content">
    <?php include_once('includes/sidebar.php');?>
    <?php include_once('includes/header.php');?>
    <div id="page-wrapper" class="row calender widget-shadow">
        <div class="main-page">
            <h3 class="title1">Dashboard</h3>
            <div class="charts">
                <canvas id="salesChart"></canvas>
            </div>
            <div class="table-responsive">
                <table id="dashboardTable" class="display">
                    <thead>
                        <tr>
                            <th>Metric</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query1 = mysqli_query($con, "SELECT * FROM tblcustomers");
                        echo "<tr><td>Total Customers</td><td>" . mysqli_num_rows($query1) . "</td></tr>";
                        
                        $query2 = mysqli_query($con, "SELECT * FROM tblappointment");
                        echo "<tr><td>Total Appointments</td><td>" . mysqli_num_rows($query2) . "</td></tr>";
                        
                        $query3 = mysqli_query($con, "SELECT * FROM tblappointment WHERE Status='1'");
                        echo "<tr><td>Accepted Appointments</td><td>" . mysqli_num_rows($query3) . "</td></tr>";
                        
                        $query4 = mysqli_query($con, "SELECT * FROM tblappointment WHERE Status='0'");
                        echo "<tr><td>Rejected Appointments</td><td>" . mysqli_num_rows($query4) . "</td></tr>";
                        
                        $query5 = mysqli_query($con, "SELECT * FROM tblservices");
                        echo "<tr><td>Total Services</td><td>" . mysqli_num_rows($query5) . "</td></tr>";
                        
                        $query6 = mysqli_query($con, "SELECT SUM(tblservices.Cost) AS Total FROM tblinvoice JOIN tblservices ON tblservices.ID=tblinvoice.ServiceId WHERE date(PostingDate)=CURDATE()");
                        $row6 = mysqli_fetch_array($query6);
                        echo "<tr><td>Today's Sales (Rs)</td><td>" . ($row6['Total'] ?? 0) . "</td></tr>";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include_once('includes/footer.php');?>
</div>
<!-- Chart.js Script -->
<script>
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Today', 'Yesterday', 'Last 7 Days', 'Total'],
            datasets: [{
                label: 'Sales (Rs)',
                data: [<?php
                    $query_today = mysqli_query($con, "SELECT SUM(tblservices.Cost) AS Total FROM tblinvoice JOIN tblservices ON tblservices.ID=tblinvoice.ServiceId WHERE date(PostingDate)=CURDATE()");
                    $today = mysqli_fetch_array($query_today)['Total'] ?? 0;
                    
                    $query_yesterday = mysqli_query($con, "SELECT SUM(tblservices.Cost) AS Total FROM tblinvoice JOIN tblservices ON tblservices.ID=tblinvoice.ServiceId WHERE date(PostingDate) = CURDATE() - INTERVAL 1 DAY");
                    $yesterday = mysqli_fetch_array($query_yesterday)['Total'] ?? 0;
                    
                    $query_week = mysqli_query($con, "SELECT SUM(tblservices.Cost) AS Total FROM tblinvoice JOIN tblservices ON tblservices.ID=tblinvoice.ServiceId WHERE date(PostingDate) >= (DATE(NOW()) - INTERVAL 7 DAY)");
                    $week = mysqli_fetch_array($query_week)['Total'] ?? 0;
                    
                    $query_total = mysqli_query($con, "SELECT SUM(tblservices.Cost) AS Total FROM tblinvoice JOIN tblservices ON tblservices.ID=tblinvoice.ServiceId");
                    $total = mysqli_fetch_array($query_total)['Total'] ?? 0;
                    
                    echo "$today, $yesterday, $week, $total";
                ?>],
                backgroundColor: ['#4CAF50', '#FFC107', '#2196F3', '#F44336']
            }]
        }
    });
</script>
<!-- DataTables Script -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dashboardTable').DataTable();
    });
</script>
</body>
</html>
