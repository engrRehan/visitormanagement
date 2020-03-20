<?php 
include_once 'includes/session.php';
include_once('header.php');

//include('includes/dbconnection.php');
$con=connection();
$rows=null;
if($con){
	$result=mysqli_query($con,'Select *from users order by id desc');
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
                            <h3>User Report <a href="add-user.php" class="btn btn-primary pull-right">Add</a></h3><br>
                            <table  width=100% id="datatable" class="table table-striped table-bordered" cellspacing="0" >
                                <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
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
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['phone'];?></td>
                                            <td>
                                                <a href="edit-user.php?id=<?php echo $row['id'];?>" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-info btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-pencil"></span></button></a>
                                                <a href="includes/main.php?action=delete-user&id=<?php echo $row['id'];?> data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></a>

                                            </td>
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
        </div>
    </section>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            responsive: true,
            "pageLength": 50,
            "searching": false,
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false
        });
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

    </script>
<?php include('footer.php');?>