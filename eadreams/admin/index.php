<?php
include("header.php");
?>
<?php
$sql = "SELECT * from books";

if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );

 }
$sql = "SELECT * from students";

if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowcount1 = mysqli_num_rows( $result );

 } 
 
 $a=mysqli_query($con,"SELECT * FROM magazines");
 $a1=mysqli_num_rows($a);
 
 $b=mysqli_query($con,"SELECT * FROM rentals");
 $b1=mysqli_num_rows($b);
 
 $vet=mysqli_query($con,"SELECT * FROM orders");
 $tev=mysqli_num_rows($vet);
 
 $d=mysqli_query($con,"SELECT * FROM online_order");
 $d1=mysqli_num_rows($d);
 
 $ct=mysqli_query($con,"SELECT * FROM orders WHERE orderStatus='Cancelled'");
 $cp=mysqli_num_rows($ct);
 
 $dt=mysqli_query($con,"SELECT * FROM online_order WHERE ordersts='Cancelled'");
 $dp=mysqli_num_rows($dt);
 
 
 

?>

<style>
.row.dashboard-header1 {
    margin-top: 20px;
}
.zoom {

  transition: transform .2s;

  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
}
.statistics-title {
    font-size: 18px;
    line-height: 18px;
    text-align: center;
}
.rate-percentage {
    font-size: 26px;
    text-align: center;
}
.card{
    padding: 61px 61px;
}

@media only screen and (max-width: 544px)
{
.card {
    margin-bottom: 20px;
}
.row.dashboard-header1 {
    margin-top: 0px;
}
}
</style>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">

                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row dashboard-header">
					
						<div class="col-md-3 zoom">
                          <div class="card dashboard-product" id="card1">
                            <p class="statistics-title">Total Books</p>
                            <h3 class="rate-percentage"><?php echo $rowcount; ?></h3>
                          </div>
						  </div>
						<div class="col-md-3 zoom">
                          <div class="card dashboard-product" id="card2">
                            <p class="statistics-title">Total Magazines</p>
                            <h3 class="rate-percentage"><?php echo $a1; ?></h3>
                          </div>
						  </div>
					<div class="col-md-3 zoom">
                          <div class="card dashboard-product" id="card3">
                            <p class="statistics-title">Rental Books</p>
                            <h3 class="rate-percentage"><?php echo $b1; ?></h3>
                          </div >
						  </div>
						<div class="col-md-3 zoom">
                          <div class="card dashboard-product" id="card4">
                            <p class="statistics-title">Registered Users</p>
                            <h3 class="rate-percentage"><?php echo $rowcount1; ?></h3>
                          </div>
						  </div>
                  
                    </div> 
                    <div class="row dashboard-header1">
					
						<div class="col-md-3 zoom">
                          <div class="card dashboard-product" id="card1">
                            <p class="statistics-title">COD Orders</p>
                            <h3 class="rate-percentage"><?php echo $tev; ?></h3>
                          </div>
						  </div>
						<div class="col-md-3 zoom">
                          <div class="card dashboard-product" id="card2">
                            <p class="statistics-title">Online Payment Orders</p>
                            <h3 class="rate-percentage"><?php echo $d1; ?></h3>
                          </div>
						  </div>
					<div class="col-md-3 zoom">
                          <div class="card dashboard-product" id="card3">
                            <p class="statistics-title">Canceled Orders</p>
                            <h3 class="rate-percentage"><?php echo $cp; ?></h3>
                          </div >
						  </div>
						<div class="col-md-3 zoom">
                          <div class="card dashboard-product" id="card4">
                            <p class="statistics-title">Canceled Online Orders</p>
                            <h3 class="rate-percentage"><?php echo $dp; ?></h3>
                          </div>
						  </div>
                  
					  
					  
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		
        <!-- content-wrapper ends -->
<?php
include("footer.php");
?>
