<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<base href="<?php echo PAGEROOT ?>/PlaylistAdmin/">
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6" style="margin-left: 300px;">
			<a href="index" class="btn btn-success" style="margin-bottom:20px; margin-left:200px; position:absolute; margin-top:593px; left: -4%;" >To Back</a>
			<?php 
				while($playlist = mysqli_fetch_array($data["edit"])){ ?>
						<form action="update/<?php echo $playlist["PlaylistID"];?>" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="PlaylistName">Playlist Name</label> 
										<input type="text" name="PlaylistName" class="form-control" value="<?php echo $playlist["PlaylistName"]?>">
									</div>
									<div class="form-group">
										<label for="PlaylistDescription">Playlist Description</label>
										<input type="text" name="PlaylistDescription" class="form-control"value="<?php echo $playlist["PlaylistDescription"]?>" >
									</div>
									<div class="form-group">
										<label for="AmountLike">Amount Like</label>
										<input type="Date" name="AmountLike" class="form-control"value="<?php echo $playlist["AmountLike"]?>" >
									</div>
									<div class="form-group">
										<label for="AmountSong">Amount Song</label>
										<input type="text" name="AmountSong" class="form-control"value="<?php echo $playlist["AmountSong"]?>" >
									</div>
                                    <div class="form-group">
										<label for="PlaylistLength">Playlist Length</label>
										<input type="text" name="PlaylistLength" class="form-control"value="<?php echo $playlist["PlaylistLength"]?>" >
									</div>
                                    <div class="form-group">
										<label for="CreateDate">Create Date</label>
										<input type="text" name="CreateDate" class="form-control"value="<?php echo $playlist["CreateDate"]?>" >
									</div>
                                    <div class="form-group">
										<label for="PlaylistImage">Playlist Image</label>
										<input type="file" name="PlaylistImage" class="form-control-file" >

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
							window.location.replace("<?php echo PAGEROOT ?>/PlaylistAdmin");
						</script>
					<?php
					} else {
					?>
						<script>
							alert("Edit Failed");
							window.location.replace("<?php echo PAGEROOT ?>/PlaylistAdmin");
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
