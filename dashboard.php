<?php
if(!isset($_COOKIE["useremail"]))
{
	header("location: index.html");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<!--Stylesheet Files -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!--Javascript Files -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap-min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<div class="container-fluid">
<header class="row" id="dheader">
<div class="col-md-5"></div>
<div class="col-md-2 " style="background-color: white; border-bottom: 1px solid #1e1d3f">
	<h2 style="margin-top: 15px; color: #1e1d3f" class="text-center">Photo Cloud</h2>
</div>
</header>
<!-- Header Ends here -->
		<div class="row" id="wrapper">
			<div class="col-md-12 text-center" id="slideshow" style="height: 500px; box-shadow: 0px 0px 1px black">Slideshow Box</div>


			<div class="col-md-12" id="uploadimages">
			<div class="row">
			<div class="col-md-12 text-center text-dark">
			Photo Cloud is an online platform where you can upload your images and access them anywhere around the world. It is highly secure and user-friendly. You can view your uploaded photos in a slideshow.
			</div>
				<div class="col-md-12">
				<div class="row">
				
				<div class="col-md-4 mx-auto">
			<h5 class="text-dark">Upload Images</h5>
				<form action="upload.php" method="post" enctype="multipart/form-data" class="form-inline">
					<div class="form-group ">
					Select image to upload:
				    <input type="file" name="fileToUpload" id="fileToUpload"></div>
				    <br><br>
				    <button type="submit" class="btn btn-dark" value="Upload Image" name="submit">Upload</button>
				</form>
					</div>

				</div>
				</div>



			</div></div>



			<div class="col-md-12" id="user_images"> <h3>Your Images</h3><br>
			<?php
						$direc = $_COOKIE["useremail"];
						$files = glob("images/$direc/*.*");
						if (count($files)==0) {
							echo '<p class="text-center text-dark">No images in Database</p>';
						}
						else
						{
							for ($i=1; $i<count($files); $i++)
							{
								$image = $files[$i];
								echo '<img class="img-thumbnail img-responsive" style="margin-right:10px;margin-top:20px;height:250px; width:250px; float:left" src="'.$image .'" />';
								
							}
					}
			?>
			</div>

			<div class="col-md-12" id="footer" style="height: 70px;margin-top: 30px; background-color: #1e1d3f">
			<p class="text-center" style="color: white; margin-top: 20px">Created By Harshit Gupta</p>
			</div>
		</div>
</div>
</body>
</html>