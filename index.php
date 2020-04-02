<?php 
include 'includeHeader.php';
?>
<body>
<!-- nabvar -->
<?php include 'includeNavbar.php';?>
<!-- carousel -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/chicago.jpg" alt="Singers" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/photog.jpg" alt="Photographer" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/writer1.jpg" alt="Writers" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-mg-6 col-12">
			<img src="img/about.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-mg-6 col-12">
			<h2 class="display-4">We are the Talent Gallery</h2>
			<p class="py-3">We give the platform to talented people all around India for showing their talents and earn from it.And provide you a best plateform to hire some talented people.</p>
			<a href="about.php" class="btn btn-success" style="background-color: #e7e7e7; color:black">Check More</a>
		</div>
	</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
	</div>
	<div class="container-fluid">
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/cardmusic.jpg" alt="Card image cap" >
    <div class="card-body">
      <h5 class="card-title">Music Band</h5>
      <p class="card-text">Here you find best singers and music Bands.</p>
      <a href="singer.php" class="btn btn-success" target="_blank"style="background-color: #e7e7e7; color:black">See profiles</a>
    </div>
    
  </div>
  <div class="card">
    <img class="card-img-top" src="img/cardphoto.jpg" alt="Card image cap" height="260px">
    <div class="card-body">
      <h5 class="card-title">Photographer</h5>
      <p class="card-text">Here you find best photographer.</p>
      <a href="photograper.php" target="_blank" class="btn btn-success" style="background-color: #e7e7e7; color:black">See profiles</a>
    </div>
    
  </div>
  <div class="card">
    <img class="card-img-top" src="img/cardwriter.jpg" alt="Card image cap" height="260px">
    <div class="card-body">
      <h5 class="card-title">Writer</h5>
      <p class="card-text">Here you find best writers.</p>
      <a href="writer.php" target="_blank" class="btn btn-success" style="background-color: #e7e7e7; color:black">See profiles</a>
    </div>
  </div>
</div>
</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Gallery</h2>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="img/gallery1.jpg" class="card-img-top pb-4 " style="width: 400px; height: 400px">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="img/gallery2.jpeg" class="card-img-top pb-4 " style="width: 400px; height: 400px">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="img/gallery3.jpeg" class="card-img-top pb-4 "style="width: 409px; height: 400px">
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<img src="img/gallery4.jpeg" class="card-img-top pb-4 " style="width: 400px; height: 400px">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="img/gallery5.jpeg" class="card-img-top pb-4 " style="width: 400px; height: 400px">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="img/gallery3.jpeg" class="card-img-top pb-4 "style="width: 409px; height: 400px">
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<img src="img/gallery1.jpg" class="card-img-top pb-4 " style="width: 400px; height: 400px">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="img/gallery2.jpeg" class="card-img-top pb-4 " style="width: 400px; height: 400px">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="img/gallery3.jpeg" class="card-img-top pb-4 "style="width: 409px; height: 400px">
			</div>
		</div>
	</div>
</section>


<section class="my-5" id="CONTACT">
	<div class="py-5">
		<h2 class="text-center">Contact Us</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userInfo.php" method="post">
			<div class="form-group">
				<label for="validationTooltipUsername">Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
				 <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Phone Number</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea class="form-control" name="comment"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			
		</form>
	</div>
</section> 

<?php include 'includeFooter.php'; ?>
</body>
</html>