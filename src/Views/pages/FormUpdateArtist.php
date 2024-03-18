<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<base href="<?php echo PAGEROOT ?>/ArtistAdmin/">
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6" style="margin-left: 300px;">
			<a href="index" class="btn btn-success" style="margin-bottom:20px; margin-left:200px; position:absolute; margin-top:336px; left: -4%;" >To Back</a>
			<?php 
				while($artist = mysqli_fetch_array($data["edit"])){ ?>
						<form action="update/<?php echo $artist["ArtistID"];?>" method="post"  enctype="multipart/form-data">
									<div class="form-group">
										<label for="ArtistName">Artist Name</label> 
										<input type="text" name="ArtistName" class="form-control" value="<?php echo $artist["ArtistName"]?>">
									</div>
									<div class="form-group">
										<label for="ArtistDescription">Artist Description</label>
										<input type="text" name="ArtistDescription" class="form-control"value="<?php echo $artist["ArtistDescription"]?>" >
									</div>
									<div class="form-group">
										<label for="ArtistDob">Artist Dob</label>
										<input type="date" name="ArtistDob" class="form-control"value="<?php echo $artist["ArtistDob"]?>" >
									</div>
									<div class="form-group">
										<label for="ArtistImage">Artist Image</label>
										<input type="file" name="ArtistImage" class="form-control-file" >

									</div>
									<div class="form-group">
										<input type="submit" name="submit" class="btn btn-primary" value="Update">
									</div>
								</form>
				<?php
				}
			
			?>
				<?php
				if (isset($data["result"])) {
					if ($data["result"] == "true") {
				?>
						<script>
							alert("Edit Successfuly");
							window.location.replace("<?php echo PAGEROOT ?>/ArtistAdmin");
						</script>
					<?php
					} else {
					?>
						<script>
							alert("Edit Failed");
							window.location.replace("<?php echo PAGEROOT ?>/ArtistAdmin");
						</script>
				<?php
					}
				}
				?>

			</div>
		</div>
	</div>

	<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
</body>

</html>
