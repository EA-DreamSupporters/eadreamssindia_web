<?php  
include("header.php");  
?>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
<script>
function show_confirm() {
    return confirm("Are You Sure");
}
</script> 
<style>
.table td img {
    width: initial;
    height: initial;
} 
h4.card-title {
    margin-bottom: 0!important;
}
ul.nav.nav-tabs {
    margin-top: 30px;
}
.media {
    display: initial;
}
.media .adddealer {
    margin-top: 0!important;
}
</style>  
<?php 

?>
      <div class="main-panel">
        <div class="content-wrapper">
		<div class="col-md-12 col-xl-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Magazine Subscription</h4>
                 
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="false">New Subscription</a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                      <div class="media">
					  <div class="row">
                      <div class="col-md-12">
                        <div class="mt-3 adddealer">
						
						</div>
					</div>
				</div>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
									<<th>S.No</th>
                                    <th>Magazine</th>
									<th>Subscribed By</th> 									
									<th>Subscribtion Plan</th>  	
									<th>Subscribtion Date</th> 
									<th>End Date</th>
									<th>Subscribtion Status</th>
									<th>Action</th> 									
                               </tr>  
                          </thead>  
  <?php 
 date_default_timezone_set("Asia/Kolkata");
 $date=date("Y-m-d");
						  $x=1;
						  $ret=mysqli_query($con,"SELECT a.*,b.* FROM test_subscription AS a,test AS b WHERE a.mid = b.title");
						  $result = mysqli_query($con, $ret); 						  
                          while($row = mysqli_fetch_array($result))  
                          {  
						  ?>							   
                               <tr>  
									
									<td><?php echo $x; ?></td>
									<td><?php echo $row["title"]; ?></td>
									<td><?php echo $row["sprice"]; ?></td>
									<td><?php echo $row["mrp"]; ?> Months</td>
									<td><?php echo $row["desc"]; ?></td>
									<td><?php echo $row["fea"]; ?></td>
									<td><a href="subscription_details.php?id=<?php echo $row['sub_id']; ?>" class=""><img src='images/edit.png' class='edit'></a> </td>
									
                               </tr> 
						  <?php							        
                          $x++;
                          }   
                          ?> 
                     </table>   
                </div>
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
<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
  $(document).ready(function(){  
      $('#employee_data1').DataTable();  
 });
   $(document).ready(function(){  
      $('#employee_data2').DataTable();  
 });
   $(document).ready(function(){  
      $('#employee_data3').DataTable();  
 });
   $(document).ready(function(){  
      $('#employee_data4').DataTable();  
 });
 </script> 
<?php
include("footer.php");
?>
