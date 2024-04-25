<?php 
session_start();
include_once 'header.php';

$con=mysqli_connect('localhost','root','','jenil');

if (isset($_GET['d_id'])) {
  $id=$_GET['d_id'];

         $delete_data="delete from addphotos where id='$id'";
          mysqli_query($con,$delete_data);
         
        //   header("location:update.php");
}

// if (isset($_GET['u_id'])) {
//   $id=$_GET['u_id'];

//         $update_data="update slider set title='$title' content='$content' img='$img";
//         mysqli_query($con,$update_data);
//         header("location:addslider.php");
// }
$limit=2;
$sql_select = "select * from addphotos";
$data_count=mysqli_query($con,$sql_select);
$total_data=mysqli_num_rows($data_count);  

$page=ceil($total_data/$limit);

if(!isset($_GET['page_no'])){
  $page_no=1;
}
else{
  $page_no=$_GET['page_no'];
}

$a=$_SESSION['user_id'];
$sql="select * from addphotos where u_id='$a'";
$res=mysqli_query($con,$sql);
$arr=array();
while($row=mysqli_fetch_assoc($res)){
  $arr[]=$row;

}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 justify-content-between">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                  </tr>
                  </thead>
                  <?php foreach($arr as $row){?>
                        <tr>
                    <td><?php echo @$row['id'];?></td>
                     <td><?php echo @$row['title'];?></td>
                    <td><?php echo @$row['content'];?></td>
                    <td><img src="photo/<?php echo $row['img'] ?>" height="100px" width="100px"></td>
                    <td><a href="viewphotos.php?d_id=<?php echo @$row['id']; ?>">Delete</a></td>
                    <!-- <td><a href="update.php?u_id=<?php echo @$row['id']; ?>">Update</a></td> -->
                    </tr>
                    <?php } ?>
                
               
                  <tbody>
 
                  </tfoot>
                </table>
                <?php for($i=1; $i<=$page; $i++)  { ?>
                  <a href="viewphotos.php?page_no=<?php echo $i; ?>"><?php echo $i; ?></a>
                  <?php } ?>

 <?php	
	if($page_no>1)
	{
		echo "<a margin:50px; href='viewphotos.php?page_no=".($page_no-1)."'>Pre</a>";
	}
	if($i>$page_no)
	{
		echo "<a margin:50px href='viewphotos.php?page_no=".($page_no+1)."'>NXT</a>";
	}
?> 

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php include_once 'footer.php';?>