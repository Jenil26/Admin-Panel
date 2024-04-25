<?php 
session_start();
include_once 'header.php';

$con=mysqli_connect('localhost','root','','jenil');

  if(isset($_POST['save'])){
    $title=$_POST['title'];
    $x = $_SESSION['user_id'];
 


    
    
    // $img=implode(',',$img);
    $sql_insert="insert into blacktitle(title,u_id) values('$title','$x')";
     mysqli_query($con,$sql_insert);

  }

?>


   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 justify-content-between">
          <div class="col-sm-6">
            <h1>General</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Titel" name="title">
                  </div>
                      <div class="input-group-append">
                        <!-- <span class="input-group-text">Upload</span> -->
                        <input type="submit" class="input-group-text"  name="save" value="Save" >
                      </div>
                    </div>
                  </div>
                 

    </section>
    <!-- /.content -->
  </div>
<?php include_once 'footer.php';?>