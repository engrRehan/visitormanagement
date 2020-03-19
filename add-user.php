<?php
include_once 'includes/session.php';
include_once('header.php');
$con=connection();
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
                            <h3>Add User</h3><br>
                            <form id="contact-form" name="contact-form" action="includes/main.php" method="POST" enctype="multipart/form-data">
                                <table width="100%" class="full-width">
                                    <tr>
                                        <td width="20%"><label for="name" class="">Name</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten ">
                                                <div class="md-form">
                                                    <input type="hidden"  name="action" class="form-control" value="add-user">
                                                    <input type="text" id="name" name="name" class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="20%"><label for="email" class="">Email</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="email" id="email" name="email"   class="form-control">

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
                                                    <input type="text" id="phone" name="phone"  class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Date of birth</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="text" id="dob" name="dob"   class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class=""> Address 1</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <textarea rows="10" cols="50" id="address1" name="address1"   class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class=""> Address 2</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <textarea rows="10" cols="50" id="address2" name="address2"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">City</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="text" id="city" name="city"  class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class=""> State</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="text" id="state" name="state"  class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Country</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="text" id="country" name="country" class="form-control">
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