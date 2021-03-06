<?php
include_once 'includes/session.php';
include_once('header.php');

//include('includes/dbconnection.php');
$con=connection();
$rows=null;
if($con){
    if(isset($_REQUEST['f_date'])){
        $from_date=$_REQUEST['f_date'];
        $to_date=$_REQUEST['to_date'];

        $result=mysqli_query($con,"Select *from visitors  WHERE updated_at BETWEEN '" . $from_date . "' and  '" . $to_date . "' order by id desc");
        $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
//else{
    //$result=mysqli_query($con,'Select *from visitors order by id desc');
    //}

}

?>

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

    <section class="site-section pt-5">
        <div class="container">

            <div class="row blog-entries">
                <div class="col-md-12 col-lg-12 main-content">

                    <div class="row">
                        <div class="col-md-12">
                            <h3>Search Visitor by date</h3><br>
                            <form action="">
                                <div class="form-group">
                                    <div class="col-md-3">From Date</div>
                                    <div class="col-md-8">
                                        <input type="date" name="f_date" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <div class="col-md-3">To Date</div>
                                    <div class="col-md-8">
                                        <input type="date" name="to_date" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group">

                                    <div class="col-md-11">
                                        <input type="submit"  class="btn btn-success pull-right" value="Search">
                                    </div>
                                </div>
                            </form>
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
                            <div>
                                <?php
                                if(isset($rows) && !empty($rows)){
                                    ?>
                                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Sr. No</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Company</th>
                                            <th>Full Address</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tfoot>
                                        <tr>
                                            <th>Sr. No</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Company</th>
                                            <th>Full Address</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>

                                        <tbody>
                                        <?php

                                        foreach($rows as $key => $row){
                                            ?>
                                            <tr>
                                                <td><?php echo $key+1;?></td>
                                                <td><img src="uploads/<?php echo $row['id_image'];?>" style="width:100px"></td>
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['email'];?></td>
                                                <td><?php echo $row['phone'];?></td>
                                                <td><?php echo $row['company'];?></td>
                                                <td><?php echo $row['full_address'];?></td>
                                                <td><a href="edit-visitor.php?id=<?php echo $row['id'];?>" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fa fa-pencil"></span></button></a>
                                                    <a href="add-feedback.php?id=<?php echo $row['id'];?>" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >Feedback</button></a>
                                                    <a href="add-purpose.php?id=<?php echo $row['id'];?>" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >Purpose</button></a>
                                                    <a href="show_info.php?id=<?php echo $row['id'];?>" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >View</button></a>

                                                    <a href="print-gatepass.php?id=<?php echo $row['id'];?>" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >Print Gatepass</span></button></a>
                                                    <a href="includes/main.php?action=delete-visitor&id=<?php echo $row['id'];?> data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></a></td>
                                            </tr>
                                        <?php }
                                        ?>

                                        </tbody>
                                    </table>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END main-content -->


            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                responsive: true,
                "pageLength": 50,
                "searching": false
            });

            $("[data-toggle=tooltip]").tooltip();

        } );

    </script>
<?php include('footer.php');?>