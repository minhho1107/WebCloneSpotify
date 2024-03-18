<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<base href="<?php echo PAGEROOT ?>/UserAdmin/">
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6" style="margin-left: 300px;">
			<a href="index" class="btn btn-success" style="margin-bottom:20px; margin-left:200px; position:absolute; margin-top:935px; left: -4%;" >To Back</a>
			<?php 
				while($user = mysqli_fetch_array($data["edit"])){ ?>
						<form action="update/<?php echo $user["UserID"];?>" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="Username">User Name</label> 
										<input type="text" name="Username" class="form-control" value="<?php echo $user["Username"]?>">
									</div>
									<div class="form-group">
										<label for="UserFname">User First Name</label>
										<input type="text" name="UserFname" class="form-control"value="<?php echo $user["UserFname"]?>" >
									</div>
									<div class="form-group">
										<label for="UserLname">User Last Name</label>
										<input type="text" name="UserLname" class="form-control"value="<?php echo $user["UserLname"]?>" >
									</div>
									<div class="form-group">
										<label for="Password">Password</label>
										<input type="text" name="Password" class="form-control"value="<?php echo $user["Password"]?>" >
									</div>
                                    <div class="form-group">
										<label for="Email">Email</label>
										<input type="text" name="Email" class="form-control"value="<?php echo $user["Email"]?>" >
									</div>
                                    <div class="form-group">
										<label for="Birthday">Address</label>
										<input type="Date" name="Birthday" class="form-control"value="<?php echo $user["Birthday"]?>" >
									</div>
			
                                    <div class="form-group">
										<label for="Address">Address</label>
										<input type="text" name="Address" class="form-control"value="<?php echo $user["Address"]?>" >
									</div>
                                    <div class="form-group">
										<label for="City">City</label>
										<input type="text" name="City" class="form-control"value="<?php echo $user["City"]?>" >
									</div>
                                    <div class="form-group">
										<label for="State">State</label>
										<input type="text" name="State" class="form-control"value="<?php echo $user["State"]?>" >
									</div>
                                    <div class="form-group">
										<label for="ZipCode">ZipCode</label>
										<input type="text" name="ZipCode" class="form-control"value="<?php echo $user["ZipCode"]?>" >
									</div>

                                    <div class="form-group">
										<label for="UserImage">UserImage</label>
										<input type="file" name="UserImage" class="form-control-file" >

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
							window.location.replace("<?php echo PAGEROOT ?>/UserAdmin");
						</script>
					<?php
					} else {
					?>
						<script>
							alert("Edit Failed");
							window.location.replace("<?php echo PAGEROOT ?>/UserAdmin");
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
