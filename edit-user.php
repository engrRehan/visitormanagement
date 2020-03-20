<?php
include_once 'includes/session.php';
include_once('header.php');
$con=connection();
$rows=null;
if($con){
    $result=mysqli_query($con,'Select *from users where id='.$_GET['id']);
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
                            <h3>Edit User</h3><br>
                            <form id="contact-form" name="contact-form" action="includes/main.php" method="POST" enctype="multipart/form-data">
                                <table width="100%" class="full-width">
                                    <tr>
                                        <td width="20%"><label for="name" class="">Name</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten ">
                                                <div class="md-form">
                                                    <input type="hidden"  name="action" class="form-control" value="edit-user">
                                                    <input type="hidden"  name="id" class="form-control" value="<?php echo $_SESSION['id'];?>">
                                                    <input type="text" id="name" name="name" value="<?php echo $rows['name'];?>" class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Username</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten ">
                                                <div class="md-form">
                                                    <input type="text" id="username" name="username"  value="<?php echo $rows['username'];?>" class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="20%"><label for="email" class="">email</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="email" id="email" name="email" readonly value="<?php echo $rows['email'];?>" class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="password" class="">Password</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="password" id="password" name="password"   class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Phone</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="text" id="phone" name="phone"  value="<?php echo $rows['phone'];?>" class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Date of birth</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="text" id="dob" name="dob"  value="<?php echo $rows['dob'];?>" class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class=""> Address 1</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <textarea rows="10" cols="50" id="address1" name="address1"   class="form-control"><?php echo $rows['address1'];?></textarea>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class=""> Address 2</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <textarea rows="10" cols="50" id="address2" name="address2"  class="form-control"><?php echo $rows['address2'];?></textarea>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">City</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="text" id="city" name="city"  value="<?php echo $rows['city'];?>" class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class=""> State</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="text" id="state" name="state"  value="<?php echo $rows['state'];?>" class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Country</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="text" id="country" name="country"  value="<?php echo $rows['country'];?>" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Photo</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="file" name="file" class="form-control">
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
                        </div>
                    </div>
                </div>
                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="well">
                        <p>Profile of <?php echo $rows['name'];?></p>
                    </div>
                    <div class="well">
                        <img src="uploads/<?php echo $rows['image'];?>" class="full-width"  width="100%">
                    </div>
                </div>
                <!-- END sidebar -->
            </div>
        </div>
    </section>

<?php include('footer.php');?>