<?php 
session_start();
include_once "header.php"; 
  $con = mysqli_connect("localhost", "root", "", "jenil");

		$n=$_SESSION['user_id'];
		
	$sql_select_slider="select * from slider where u_id=$n";
	$query_slider=mysqli_query($con,$sql_select_slider);
?>

<div class="slider">
					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
							<ul>
								<?php while ($row= mysqli_fetch_assoc($query_slider)) { ?>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="admin/photo/<?php echo $row['img']; ?>" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?php echo $row['title']; ?></div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?php echo $row['contant']; ?></div>
									<div class="tp-caption slider-btn sfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="510" data-speed="1000" data-start="2200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><a href="#" class="btn btn-slider">Discover More</a></div>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
<?php 

  $con = mysqli_connect("localhost", "root", "", "jenil");

	$sql_select="select * from content where u_id=$n";
	$query=mysqli_query($con,$sql_select);

	$sql_select="select * from midcontent where u_id=$n";
	$query1=mysqli_query($con,$sql_select);

	$sql_select="select * from contentwithphoto where u_id=$n";
	$query2=mysqli_query($con,$sql_select);

	$sql_select="select * from addphotos where u_id=$n";
	$query3=mysqli_query($con,$sql_select);

	$sql_select="select * from blacktitle where u_id=$n";
	$query4=mysqli_query($con,$sql_select);

	$sql_select="select * from blackslider where u_id=$n";
	$query5=mysqli_query($con,$sql_select);

	$sql_select="select * from abstitle where u_id=$n";
	$query6=mysqli_query($con,$sql_select);

	$sql_select="select * from lastcp where u_id=$n";
	$query7=mysqli_query($con,$sql_select);
?>	
				<section class="services green">
					<div class="container">
						<div class="section-heading">
							<h2>What We Offer</h2>
							<div class="section-dec"></div>
						</div>
						<?php while ($row= mysqli_fetch_assoc($query)) { ?>
						<div class="service-item col-md-4">
							<span><img src="admin/photo/<?php echo $row['img']; ?>" height="50px" width="50px"></img></span>
							<div class="tittle"><h3><?php echo $row['title']; ?></h3></div>
							<p><?php echo $row['content']; ?></p>
						</div>
						<?php } ?>
		
					</div>
				</section>
				
				
				<section class="call-to-action-1">
				<?php while ($row= mysqli_fetch_assoc($query1)) { ?>
					<div class="container">
						<h4><h3><?php echo $row['title']; ?></h4>
						<p class="col-md-10 col-md-offset-1"><?php echo $row['content']; ?></p>
						<div class="buttons">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="border-btn"><a href="#"><?php echo $row['btn1']; ?></a></div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="btn-black"><a href="#"><?php echo $row['btn2']; ?></a></div>
							</div>
						</div>
					</div>	
					<?php } ?>
				</section>
				

				<section class="call-to-action-2">
				<?php while ($row= mysqli_fetch_assoc($query2)) { ?>

					<div class="container">
					<div class="left-text hidden-xs">
						<h4><?php echo $row['title']; ?></h4>
						<p><em><?php echo $row['content']; ?></em><br><br><?php echo $row['content2']; ?></p>
					</div>
						<div class="right-image hidden-xs"><img src="admin/photo/<?php echo $row['img']; ?>" height="100%" width="100%"></div>
					</div>
					<?php } ?>

				</section>

				<section class="portfolio">
					<div class="container">
						<div class="section-heading-white">
							<h2>Recent Photos</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-portfolio" class="owl-carousel owl-theme">
								<?php while ($row= mysqli_fetch_assoc($query3)) { ?>
									<div class="item">
		
								  		<figure>
										  <img src="admin/photo/<?php echo $row['img']; ?>" height="360px" width="240px">
				        					<figcaption>
				            					<h3><?php echo $row['title']; ?></h3>
				            					<p><?php echo $row['content']; ?></p>
				        					</figcaption>
				    					</figure>
																	    
				    				</div>
									<?php } ?>	
								</div>
							</div>
						</div>
						<div class="owl-navigation">
						  <a class="btn prev fa fa-angle-left"></a>
						  <a class="btn next fa fa-angle-right"></a>
						  <a href="work-3columns.html" class="go-to">Go to portfolio</a>
						</div>
					</div>
				</section>

				<section class="testimonials">
					<div class="container">
					<?php while ($row= mysqli_fetch_assoc($query4)) { ?>
						<div class="section-heading">
							<h2><?php echo $row['title']; ?></h2>
							<div class="section-dec"></div>
							<?php } ?>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-demo" class="owl-carousel owl-theme">
								<?php while ($row= mysqli_fetch_assoc($query5)) { ?>
									<div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p><?php echo $row['content']; ?></p>
								  			<h6><?php echo $row['fo1']; ?><em><?php echo $row['fo2']; ?></em></h6>
								  		</div>
								    </div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="call-to-action-3">
					<div class="container">
					<?php while ($row= mysqli_fetch_assoc($query6)) { ?>
						<div class="col-md-12">
							<h4 class="col-md-10 col-sm-8"><?php echo $row['title']; ?></h4>
							<div class="btn-black col-md-2 col-sm-4"><a href="#"><?php echo $row['btn']; ?></a></div>
						</div>
						<?php } ?>
					</div>
				</section>

				<section class="blog-posts">
					<div class="container">
						<div class="section-heading">
							<h2>Latest Posts</h2>
							<div class="section-dec"></div>
						</div>
						<?php while ($row= mysqli_fetch_assoc($query7)) { ?>
					<div class="blog-item">
						
							<div class="col-md-4">
							
								<a href="blog-single.html"><img src="admin/photo/<?php echo $row['img']; ?>" height="350px" width="288px"></a>
								<h3><a href="blog-single.html"><?php echo $row['title']; ?></a></h3>
								<span><a href="#"><?php echo $row['pname']; ?></a> / <a href="#"><?php echo $row['date']; ?></a> / <a href="#"><?php echo $row['bplace']; ?></a></span>
								<p><?php echo $row['content1']; ?></p>
								<div class="read-more">
									<a href="blog-single.html">Read more</a>
							</div>
								
							</div>
						</div>
						<?php } ?>
					</div>
				</section>
                <?php include_once "footer.php"; ?>