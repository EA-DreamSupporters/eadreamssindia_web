<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Online book center, Government exam materials rental, book rental, TNPSC, SSC, UPSC, BANKING, career guidance, Youtube videos, magazine subscription, institute courses, test packs for government exam preparations" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="EA Dream Supporters is an ED tech business that began to care about the career aspirations of Indian youngsters. Numerous youths struggled to locate the appropriate resources and opportunities for their dream. So EA creates Dream Supporting Services, a unique one-stop portal for competitive test preparation. We support youth by acting as a prodding force for their desired course."/>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Magazines Details - EA Dream Supporters</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/nouislider/nouislider.min.css">
	
	
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<div class="page-wraper">
	<div id="loading-area" class="preloader-wrapper-2">
		<div class="preloader-inner">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div> 
	</div>
<?php
include("header1.php");
?>
<?php
//Code for Adding Product in to Cart
$id=$_GET["id"];
if(isset($_POST['addtocart'])){
if(strlen($_SESSION['id']) == 0)
{   
echo "<script>alert('Pleae login to subscribe');</script>";
} else{
  $userid=$_SESSION['id']; 
  $magazine=$_POST['magazine'];
	$splan=implode(',',$_POST["splan"]); 
	$sprice=implode(',',$_POST["sprice"]); 
 date_default_timezone_set("Asia/Kolkata");
 $date=date("Y-m-d"); 
 $myDate = date("Y-m-d", strtotime( date( "Y-m-d", strtotime( date("Y-m-d") ) ) . "+$splan month" ) );
    $check=mysqli_query($con,"select * from subscriptions where magazine='$magazine' AND user_id='$userid'");
	$row2 = mysqli_fetch_array($check);
	 $subid=$row2["sub_id"];
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
	  $sql1=mysqli_query($con, "UPDATE subscriptions SET user_id='$userid',sdate='$date',magazine='$magazine',splan='$splan',sprice='$sprice',edate='$myDate' WHERE sub_id='$subid'");
       echo "<script>alert('Subscribed Successfully');</script>";
  echo "<script type='text/javascript'> document.location ='magazines.php'; </script>";
   } else {
mysqli_query($con,"insert into subscriptions(user_id,sdate,magazine,splan,sprice,edate) values('$userid','$date','$magazine','$splan','$sprice','$myDate')");
   
  echo "<script>alert('Subscribed Successfully');</script>";
  echo "<script type='text/javascript'> document.location ='magazines.php'; </script>";
}
}}

$result1 = mysqli_query($con,"SELECT * FROM magazines WHERE mid='$id'");
$row1 = mysqli_fetch_array($result1);
$mplan=$row1["mplan"];
$mprice=$row1["mprice"];

    $plan = explode(",", $mplan);
	$price = explode(",", $mprice);
	$result = count($plan);
?>
<style>
h3.title {
    text-transform: capitalize;
}
h5.subtitle {
	text-transform: capitalize;
}
td {
	text-transform: capitalize;
}
.addcart{
	margin-right:20px;
}
</style>
	<div class="page-content bg-grey">
		<section class="content-inner-1">
			<div class="container">
			<form id="form">
				<div class="row book-grid-row style-4 m-b60">
					<div class="col">
						<div class="dz-box">
							<div class="dz-media">
								<img src="images/<?php echo $row1['image'] ?>" alt="book">
							</div>
							<div class="dz-content">
								<div class="dz-header">
									<h3 class="title"><?php echo $row1['mname']; ?></h3>
									<div class="shop-item-rating">
										<div class="d-lg-flex d-sm-inline-flex d-flex align-items-center">
												<div class="social-area">
											<ul class="dz-social-icon style-3">
												<li><a href="" class="fb-btn" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
												<li><a href=""  class="tw-btn" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
												<li><a href=""  class="wa-btn" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
												<li><a href="" class="li-btn" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
											</ul>
										</div>
										</div>
									
									</div>
									<input type="text" class="pr" hidden>
									<input type='hidden' class='splan' value="<?php echo $row1['mid']; ?>" name='magazine' required>
								</div>
								<div class="dz-body">
									
									<p class="text-1"><?php echo $row1['mdescription']; ?></p>
									<table id="myTable" class="table table-bordered">
							<tr>
								<!--<th>S.No</th>-->
								<th>Subscription Plan</th>
								<th>Price</th>
							</tr>

							<tbody id="tbody">
							<?php 
							for ($x = 0; $x < $result; $x++) { 
							?>
							
							 <tr>
								<!--<td>1</td>-->
								<td><?php echo $plan[$x]; ?> Months</td>
								<td>₹ <?php echo $price[$x]; ?></td>

							
							</tr>
							<?php 
							}
							?>
							</tbody>
						</table>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
						<?php 
											for ($x = 0; $x < $result; $x++) { 
											?>
<script>
$(document).ready(function () {
  $('.variant').change(function() {
    var size = $(".variant").val();
    var dataOptions = $('#data option');
    
    // Loop through each option and find the one with text matching the selected value
    dataOptions.each(function() {
		var vv = $(this).text().split(" ");
      if (vv[0] === size) {
        $(this).prop('selected', true); // Set the selected property to true for matching option
      } else {
        $(this).prop('selected', false); // Set the selected property to false for non-matching options
      }
    });
    
    $(".pr").val($('#data').val());
  });
});



</script>
<?php 
											}
											?>
									<div class="book-footer">
									
										<div class="product-num">
											<select name="splan[]" class="form-control variant" required>
										<option value="">Select Subscription Plan</option>
											<?php 
											for ($x = 0; $x < $result; $x++) { 
											?>
							  				<option value="<?php echo $plan[$x]; ?>"><?php echo $plan[$x]; ?> Months</option>
											<?php 
											}
											?>											
											</select>
										</div>
										
										
									</div>
									
											<div class="book-footer">
										
										<div class="product-num">
											<select name="sprice[]" class="form-control" id="data" hidden>
										<option value="">Select Subscription Plan</option>
											<?php 
											for ($x = 0; $x < $result; $x++) { 
											?>
							  				<option value="<?php echo $price[$x]; ?>"><?php echo $plan[$x]; ?> Months</option>
											<?php 
											}
											?>											
											</select>
										</div>
										
										
									</div>
									<div class="book-footer">
										
										<div class="product-num">
										<?php 
                                                
												if(strlen($_SESSION['id']) == 0)
												  {   
													  ?>

											  <div><a class="btn btn-secondary btnhover2" href="" data-bs-toggle="modal"
													  data-bs-target="#myModal">
													  <i aria-hidden="true"
														  style="padding-right: 5px;"></i>

														  SUBSCRIBE
												  </a></div>

											  <?php
												 

												  } else{

													  ?>

											  <button class="btn btn-secondary btnhover2 pay"> <i
													  class="bi-cart-fill me-1"></i>
													  SUBSCRIBE
											  </button>


											  <?php
													  
													  
													  } 
												  
										  ?>

											

										</div>
									
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				</form>
				</div>
		</section>
		
		<?php include'count.php' ; ?>
		
	<!-- Footer -->
	<?php include'footer-white.php'; ?>
	<!-- Footer End -->
	
	<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
</div>

<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="vendor/countdown/counter.js"></script><!-- COUNTER JS -->
<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="vendor/wnumb/wNumb.js"></script><!-- WNUMB -->
<script src="vendor/nouislider/nouislider.min.js"></script><!-- NOUSLIDER MIN JS-->
<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->
<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
		 $('body').on('click', '.alert', function(e) {
			
			alert('Please Login to Buy This Book...');
			
		 });
    $('body').on('click', '.pay', function(e) {

        var form = $("#form")[0]; // Get the form element
        var frm = new FormData(form); // Create FormData object



        var form = $("#form")[0];
        var frm = new FormData(form);
        var total = $(".pr").val();
        frm.append('total', total);
        var options = {
			"key": "rzp_live_JIQ5usrR7RioCy", //test  
                
                //  "key": "rzp_live_JIQ5usrR7RioCy", //  live
            "amount": (total * 100), // 2000 paise = INR 20
            "name": "EA Dreams Supporters",
            "description": "Payment",
            "image": "images/logo.png",
            "handler": function(response) {
                frm.append('razorpay_payment_id', response.razorpay_payment_id); // Append Razorpay payment ID to the FormData object
                $.ajax({
                    url: 'payment-process2.php',
                    type: 'post',
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    data: frm,
                    success: function(response) {
                        window.location.href = 'success.php';
                    },
                    error: function(xhr, status, error) {
                        window.location.href = 'failed.php';
                    }
                });
            },
            "theme": {
                "color": "#528FF0"
            }
        };

        var rzp1 = new Razorpay(options);
        rzp1.open();
        e.preventDefault();





    });
    </script>
</body>
</html>