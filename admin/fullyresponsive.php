<?php include_once 'header.php';

$con=mysqli_connect('localhost','root','','jenil');


if(isset($_POST['save']))
{
    $content=$_POST['content'];

    $sql_insert="insert into green(fullyresponsive) values('$content')";
    mysqli_query($con,$sql_insert);
}


?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 justify-content-between">
          <div class="col-sm-6">
            <h1>Fully Responsive</h1>
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
                    <label for="exampleInputPassword1">Content</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Content" name="content">
                  </div>
                  <div class="form-group">
                      <div class="input-group-append">
                        <input type="submit" class="input-group-text"  name="save" value="Add" >
                      </div>
                    </div>
                  </div>
                </div>
    </section>
    <!-- /.content -->
  </div>

<?php include_once 'footer.php';?>