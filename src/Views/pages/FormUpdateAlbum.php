<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<base href="<?php echo PAGEROOT ?>/AlbumAdmin/">
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6" style="margin-left: 300px;">
			<a href="index" class="btn btn-success" style="margin-bottom:20px; margin-left:200px; position:absolute; margin-top:421px; left: -4%;" >To Back</a>
			<?php 
				while($album = mysqli_fetch_array($data["edit"])){ ?>
						<form action="update/<?php echo $album["AlbumID"];?>" method="post"  enctype="multipart/form-data">
									<div class="form-group">
										<label for="AlbumName">Album Name</label> 
										<input type="text" name="AlbumName" class="form-control" value="<?php echo $album["AlbumName"]?>">
									</div>
									<div class="form-group">
										<label for="ReleaseDate">ReleaseDate</label>
										<input type="date" name="ReleaseDate" class="form-control"value="<?php echo $album["ReleaseDate"]?>" >
									</div>
									<div class="form-group">
										<label for="AmountSong">AmountSong</label>
										<input type="text" name="AmountSong" class="form-control"value="<?php echo $album["AmountSong"]?>" >
									</div>
									<div class="form-group">
										<label for="AlbumLength">Album Length</label>
										<input type="text" name="AlbumLength" class="form-control"value="<?php echo $album["AlbumLength"]?>" >
									</div>
									<div class="form-group">
										<label for="AlbumImage">Album Image</label>
										<input type="file" name="AlbumImage" class="form-control-file" >

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
							window.location.replace("<?php echo PAGEROOT ?>/AlbumAdmin");
						</script>
					<?php
					} else {
					?>
						<script>
							alert("Edit Failed");
							window.location.replace("<?php echo PAGEROOT ?>/AlbumAdmin");
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
