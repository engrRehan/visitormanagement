<?php 
include_once 'includes/session.php';
include_once('header.php');
$con=connection();
$rows=null;
if($con){
    $result=mysqli_query($con,'Select *from about where id="1"');
    //echo mysqli_error($con);
    $rows=mysqli_fetch_assoc($result);
   
}
?>
<div class="container"> 
  <h3><?php echo $rows['title'];?></h3><br>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <p class="blog-desc">
                <?php echo $rows['description'];?>
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="well">
                <p>Advertisement</p>
            </div>
            <div class="well">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRE8r0ORNu1amN0FMY0k5RoFZjW3l0tKteoKY95M-w_CtFL8yjx" class="full-width">
            </div>
        </div>
    </div>
    
  </div>
</div><br>
<?php include('footer.php');?>