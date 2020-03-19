<?php include_once 'includes/session.php';
include_once('header.php');?>
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
                            <form id="contact-form" name="contact-form" action="includes/main.php" method="POST">
                                <table width="100%" class="full-width">
                                    <tr>
                                        <td width="20%"><label for="new_password" class="">New Password</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten ">
                                                <div class="md-form">
                                                    <input type="hidden"  name="action" class="form-control" value="change-password">
                                                    <input type="password" id="new_password" name="new_password" class="form-control">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="con_password" class="">Confirm Password</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="password" id="con_password" name="con_password" class="form-control">

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

    <script>
        $(document).ready(function(){
            $('#contact-form').validate({
                rules:{
                    new_password:{
                        required:true
                    },
                    con_password:{
                        required:true,
                        equalTo:'#new_password'
                    }
                }
            });
        });
    </script>

<?php include('footer.php');?>