<html>
<head>
	<?php include 'includeHeader.php'; ?>

		<style>

.container1 {
  position: relative;
  max-width: 100%;
  margin: 0 auto;
}

.container1 img {vertical-align: absolute;}

.container1 .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 10px;
}
</style>
	</head>
<body>
	<?php include 'includeNavbar.php';?>

<div class="container1">
  <img src="img/photographer.jpg" alt="Notebook" style="width:100%; padding-top: 4px; height: 80%" >
  <div class="content">
    <h1>Photographer</h1>
    <p><i>There is one thing the photograph must contain, the humanity of the moment.</i></p>
  </div>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Gallery</h2>
	</div>
	<div class="container-fluid">
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/gallery1.jpg" alt="Card image cap" width="300px" height="300px">
    <div class="card-body">
      <h5 class="card-title">Udai Chauhan</h5>
      <a href="https://www.facebook.com" target="_blank"><img src="img/fb.png" width="30px" height="28px" style="margin-right:20px"></a>
      <a href="https://www.instagram.com"  target="_blank"><img src="img/insta.png" width="30px" height="28px"></a>
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/gallery2.jpeg" alt="Card image cap" width="300px" height="300px">
    <div class="card-body">
      <h5 class="card-title">Kamal Lochan Padhan</h5>
      <a href="https://www.facebook.com"  target="_blank"><img src="img/fb.png" width="30px" height="28px" style="margin-right:20px"></a>
      <a href="https://www.instagram.com"  target="_blank"><img src="img/insta.png" width="30px" height="28px"></a>
           

    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/gallery3.jpeg" alt="Card image cap" width="300px" height="300px">
    <div class="card-body">
      <h5 class="card-title">Satyam</h5>
      <a href="https://www.facebook.com"  target="_blank"><img src="img/fb.png" width="30px" height="28px" style="margin-right:20px"></a>
      <a href="https://www.instagram.com"  target="_blank"><img src="img/insta.png" width="30px" height="28px"></a>
           
    </div>
  </div>
</div>
</div>

	<div class="container-fluid">
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/gallery6.jpg" alt="Card image cap" width="300px" height="300px">
    <div class="card-body">
      <h5 class="card-title">Udai Chauhan</h5>
      <a href="https://www.facebook.com"  target="_blank"><img src="img/fb.png" width="30px" height="28px" style="margin-right:20px"></a>
      <a href="https://www.instagram.com"  target="_blank"><img src="img/insta.png" width="30px" height="28px"></a>
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/gallery4.jpeg" alt="Card image cap" width="300px" height="300px">
    <div class="card-body">
      <h5 class="card-title">Kamal Lochan Padhan</h5>
      <a href="https://www.facebook.com"  target="_blank"><img src="img/fb.png" width="30px" height="28px" style="margin-right:20px"></a>
      <a href="https://www.instagram.com"  target="_blank"><img src="img/insta.png" width="30px" height="28px"></a>
           

    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/gallery5.jpeg" alt="Card image cap" width="300px" height="300px">
    <div class="card-body">
      <h5 class="card-title">Mark</h5>
      <a href="https://www.facebook.com"  target="_blank"><img src="img/fb.png" width="30px" height="28px" style="margin-right:20px"></a>
      <a href="https://www.instagram.com"  target="_blank"><img src="img/insta.png" width="30px" height="28px"></a>
           
    </div>
  </div>
</div>
</div>

</section>

<?php include 'includeFooter.php'; ?>
</body>
</html>