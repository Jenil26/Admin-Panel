<?php 
session_start();
include_once 'header.php';

$con=mysqli_connect('localhost','root','','jenil');

  if(isset($_POST['save'])){
    $title=$_POST['title'];
    $btn=$_POST['btn'];
    $x = $_SESSION['user_id'];

    $sql_insert="insert into abstitle(title,btn,u_id) values('$title','$btn','$x')";
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
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title" name="title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Button Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Button Name" name="bt">
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Founder's State and Country</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="State and Country" name="fo2">
                  </div> -->
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="img">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div> -->
                      <div class="input-group-append">
                        <!-- <span class="input-group-text">Upload</span> -->
                        <input type="submit" class="input-group-text"  name="save" value="Save" >
                      </div>
                    </div>
                  </div>
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div> -->
                <!-- /.card-body -->

    </section>
    <!-- /.content -->
  </div>
<?php include_once 'footer.php';?>