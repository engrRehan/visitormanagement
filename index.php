<?php
include_once 'includes/session.php';
include_once('header.php');
$con=connection();
$rows=null;
if($con){
    $result=mysqli_query($con,'Select *from home_blog');
    //echo mysqli_error($con);


}
?>

    <section class="site-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel owl-theme home-slider">
                        <div>
                            <a href="#" class="a-block d-flex align-items-center height-lg" style="background-image: url('img/img_1.jpg'); ">
                                <div class="text half-to-full">
                                    <h3>Parking</h3>
                                    <p>Car Parking System</p>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="a-block d-flex align-items-center height-lg" style="background-image: url('img/img_2.jpg'); ">
                                <div class="text half-to-full">
                                    <h3>Card Entry</h3>
                                    <p>Automated Card Reading</p>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="a-block d-flex align-items-center height-lg" style="background-image: url('img/img_3.jpg'); ">
                                <div class="text half-to-full">
                                    <h3>Managbility</h3>
                                    <p>Easy managing of entry / exit points</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>
    <!-- END section -->

<section class="site-section py-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">About Gate Pass System</h2>
            </div>
        </div>
        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="row">
                    <?php
                    while($rows=mysqli_fetch_assoc($result)){
                        ?>
                        <div class="col-md-6">
                            <a href="#" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                <img src="img/<?php echo $rows['image'];?>" alt="Image placeholder">
                                <div class="blog-content-body">
                                    <h2><?php echo $rows['description'];?></h2>
                                </div>
                            </a>
                        </div>

                    <?php } ?>

                </div>








            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
                <div class="well">
                    <p>Advertisement</p>
                </div>
                <div class="well">
                    <img width="100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRE8r0ORNu1amN0FMY0k5RoFZjW3l0tKteoKY95M-w_CtFL8yjx" >
                </div>
            </div>
            <!-- END sidebar -->

        </div>
    </div>
</section>
<?php include('footer.php');?>