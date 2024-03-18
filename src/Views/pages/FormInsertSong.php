<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6" style="margin-left: 300px;">
				<a href="index" class="btn btn-warning" style="margin-bottom:20px; margin-left:200px; position:absolute; margin-top:593px; left: -4%;">To Back </a>

				<form action="create" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="SongName">Song Name</label>
						<input type="text" name="SongName" class="form-control">
					</div>
					<div class="form-group">
						<label for="AlbumID">Album ID</label>
						<input type="text" name="AlbumID" class="form-control">
					</div>
					<div class="form-group">
						<label for="SongDate">Song Date</label>
						<input type="Date" name="SongDate" class="form-control">
					</div>
					<div class="form-group">
						<label for="SongLength">Song Length</label>
						<input type="text" name="SongLength" class="form-control">
					</div>
					<div class="form-group">
						<label for="SongLyric">SongLyric</label>
						<input type="text" name="SongLyric" class="form-control">
					</div>
					<div class="form-group">
						<label for="SongImage">Song Image</label>
						<input type="file" name="SongImage" class="form-control-file">
					</div>
					<div class="form-group">
						<label for="SongAudio">Song Audio</label>
						<input type="text" name="SongAudio" class="form-control">
					</div>

					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Insert">
					</div>
				</form>
				<?php
				if (isset($data["result"])) {
					if ($data["result"] == "true") {
				?>
						<script>
							alert("Insert Successfuly");
							window.location.replace("<?php echo PAGEROOT ?>/SongAdmin");
						</script>
					<?php
					} else {
					?>
						<script>
							alert("Insert Failed");
							window.location.replace("<?php echo PAGEROOT ?>/SongAdmin");
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