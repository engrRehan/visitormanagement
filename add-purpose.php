<?php include_once 'includes/session.php';
include_once('header.php');
$con=connection();
$rows=null;
if($con){
    $result=mysqli_query($con,'Select *from visitors where id='.$_GET['id']);
    $rows=mysqli_fetch_assoc($result);
    //print_r($rows);
}
?>
    <section class="site-section pt-5">
        <div class="container">

            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">

                    <div class="row">
                        <div class="col-md-12">
                            <!-------- Start here -------->
                            <?php if(isset($_SESSION['success'])){ ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $_SESSION['success']; ?>
                                </div>
                                <?php
                            }
                            if(isset($_SESSION['error'])){ ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION['error']; ?>
                                </div>
                                <?php
                            }
                            ?>
                            <h3>Add Purpose  of <b><?php echo $rows['name'];?></b></h3><br>
                            <form id="contact-form" name="contact-form" action="includes/main.php" method="POST" enctype="multipart/form-data">
                            <table width="100%" class="full-width">
                                <tr>
                                    <td width="20%"><label for="name" class="">Checkin Time</label></td>
                                    <td width="70%">
                                        <div class="col-md-6 top-ten ">
                                            <div class="md-form">
                                                <input type="hidden"  name="action" class="form-control" value="add-purpose">
                                                <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                                <input type="text" id="checkout" name="checkout" value="<?php echo $rows['checkin'];?>" class="form-control required">

                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="20%"><label for="name" class="">Purpose</label></td>
                                    <td width="70%">
                                        <div class="col-md-6 top-ten">
                                            <div class="md-form">
                                                <textarea rows="10" cols="50" id="feedback" name="feedback" class="form-control required"><?php echo $rows['purpose'];?></textarea>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="top-ten">
                                    <td width="20%"></td>
                                    <td width="70%">

                                        <div class="col-md-6 top-ten">
                                            <div class="md-form">
                                                <input type="submit" id="submit" name="submit" class="btn btn-success" value="Submit">

                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            </table>
                            </form>
                            <!------ End Here ------------->
                        </div>
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


    <script>
        $(document).ready(function(){
            $('#contact-form').validate({
                rules:{
                    '#checkout':{
                        required:true,

                    },
                    '#feedback':{
                        required:true,
                    },
                }
            });
        });
    </script>
<?php include('footer.php');?>