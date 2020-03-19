<?php

include('header.php');
session_start();
?>
<?php //include('includes/dbconnection.php');?>
    <section class="site-section pt-5">
        <div class="container">

            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">

                    <div class="row">
                        <div class="col-md-12">
                            <!------- Start here ---->
                            <form id="contact-form" name="contact-form" action="includes/main.php" method="POST">

                                <!--Grid row-->
                                    <table class="full-width" width="100%">
                                        <tr>
                                            <td width="20%"><label for="email" class="">Your email</label></td>
                                            <td width="70%">
                                                <div class="col-md-6">
                                                    <div class="md-form">
                                                        <input type="hidden"  name="action" class="form-control" value="login">
                                                        <input type="text" id="email" name="email" class="form-control">

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="top-ten">
                                            <td width="20%"> <label for="subject" class="">Password</label></td>
                                            <td width="70%">

                                                <div class="col-md-6 top-ten">
                                                    <div class="md-form">
                                                        <input type="password" id="password" name="password" class="form-control">

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
                                    <!--Grid column-->

                                    <!--Grid column-->

                                <!--Grid row-->

                                <!--Grid row-->

                                <!--Grid row-->

                            </form>
                            <!----------- End here ---------->
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