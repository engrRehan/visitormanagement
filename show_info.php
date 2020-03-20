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
                            <h3>Visit details</h3><br>
                            <form id="contact-form" name="contact-form" action="includes/main.php" method="POST" enctype="multipart/form-data">
                                <table width="100%" class="table full-width">
                                    <tr>
                                        <td width="20%"><label for="name" class="">Name</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten ">
                                                <div class="md-form">
                                                    <?php echo $rows['name'];?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="20%"><label for="email" class="">User email</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <?php echo $rows['email'];?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Phone</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <?php echo $rows['phone'];?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="20%"><label for="name" class="">Full Address</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <?php echo $rows['full_address'];?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="20%"><label for="name" class="">Company</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <?php echo $rows['company'];?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Check in</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <?php echo $rows['checkin'];?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Purpose</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <?php echo $rows['purpose'];?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Check Out</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <?php echo $rows['checkout'];?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Feedback</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <?php echo $rows['feedback'];?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="well">
                        <p>Profile of <?php echo $rows['name'];?></p>
                    </div>
                    <div class="well">
                        <img  width="100%" src="uploads/<?php echo $rows['id_image'];?>" class="full-width">
                    </div>
                </div>
                <!-- END sidebar -->
            </div>
        </div>
    </section>

<?php include('footer.php');?>