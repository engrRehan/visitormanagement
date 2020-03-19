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
<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
<div class="container"> 
  <h3>User Report <a href="add-user.php" class="btn btn-primary pull-right">Add</a></h3><br>
    <div class="row">
        <div class="col-md-12">
        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
							<a href="edit-user.php?id=<?php echo $row['id'];?>" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-info btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-pencil"></span></button></a>
							<a href="includes/main.php?action=delete-user&id=<?php echo $row['id'];?> data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a>

</td>
						</tr>
							<?php } }
							?>
                            
					</tbody>
				</table>

        </div>
        
    </div>
    
  </div>
</div><br>
<script>
    $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

    </script>
<?php include('footer.php');?>