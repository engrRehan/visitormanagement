<?php
include_once 'includes/session.php';
include_once('header.php');

//include('includes/dbconnection.php');
$con=connection();
$rows=null;
if($con){
    $result=mysqli_query($con,'Select *from visitors order by id desc');
    $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
}
// echo "<pre>";
// print_r($rows);
// exit;
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
                            <h3>Visitor Report</h3><br>
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
                                if(isset($rows) && !empty($rows)){
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
                                            <td><a href="edit-visitor.php?id=<?php echo $row['id'];?>" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a>
                                                <a href="add-feedback.php?id=<?php echo $row['id'];?>" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >Feedback</button></a>
                                                <a href="add-purpose.php?id=<?php echo $row['id'];?>" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >Purpose</button></a>
                                                <a href="show_info.php?id=<?php echo $row['id'];?>" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >View</button></a>

                                                <a href="print-gatepass.php?id=<?php echo $row['id'];?>" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >Print Gatepass</span></button></a>
                                                <a href="includes/main.php?action=delete-visitor&id=<?php echo $row['id'];?> data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a></td>
                                        </tr>
                                    <?php } }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END main-content -->


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