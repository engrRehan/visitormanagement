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
                            <form id="contact-form" name="contact-form" action="includes/main.php" method="POST" enctype="multipart/form-data">
                                <table width="100%" class="full-width">
                                    <tr>
                                        <td width="20%"><label for="name" class="">Name</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten ">
                                                <div class="md-form">
                                                    <input type="hidden"  name="action" class="form-control" value="add-visitor">

                                                    <input type="text" id="name" name="name" class="form-control required">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Company</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="text" id="company" name="company" class="form-control required">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="email" class="">Your email</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="email" id="email" name="email" class="form-control required">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Phone</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="number" id="phone" name="phone" class="form-control required">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Full Address</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                            <textarea rows="10" cols="50" id="address" name="address" class="form-control required">
</textarea>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Check In</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="text" id="checkin" name="checkin" class="form-control required">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td width="20%"><label for="name" class="">Check Out</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                        <div class="md-form">
                                                            <input type="text" id="checkout" name="checkout" class="form-control required">

                                                        </div>
                                                    </div>
                                        </td>
                                    </tr> -->
                                    <tr>
                                        <td width="20%"><label for="name" class="">Purpose</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="text" id="purpose" name="purpose" class="form-control required">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%"><label for="name" class="">Scaned ID</label></td>
                                        <td width="70%">
                                            <div class="col-md-6 top-ten">
                                                <div class="md-form">
                                                    <input type="file" name="file" id="file" class="form-control required">
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
                        <img width="100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRE8r0ORNu1amN0FMY0k5RoFZjW3l0tKteoKY95M-w_CtFL8yjx"  >
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
                    '#phone':{
                        required:true,
                        maxLength: 10,

                    },
                    '#name':{
                        required:true,
                        lettersonly: true
                    },
                    '#company':{
                        required:true,
                    },
                    '#addess':{
                        required:true,
                    },
                    '#email':{
                        required:true,
                        email:true
                    },
                    '#phone':{
                        required:true,
                    },
                    '#checkin':{
                        required:true,
                    },
                    '#checkout':{
                        required:true,
                    },
                    '#purpose':{
                        required:true,
                    },
                    '#file':{
                        required:true,
                    }
                }
            });
        });
    </script>
<?php include('footer.php');?>