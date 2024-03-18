<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<base href="<?php echo PAGEROOT ?>/UserAdmin/">

<body>
	<div class="container mt-5">
		<h1 class="mb-4">User Management</h1>
		<table class="table">
			<a href="view_insert" class="btn btn-warning" style="margin-bottom:20px;">Insert </a>
			<thead>
				<tr>
					<th style="width:100px">UserID</th>
					<th>UserImage</th>
					<th>UserName</th>
					<th>UserFname</th>
					<th>UserLname</th>
					<th>Password</th>
					<th>Email</th>
					<!-- <th>Address</th>
					<th>City</th> -->

					<th></th>
				</tr>
			</thead>
			<a href="" class="icon-insertSong"></a>
			<tbody>
				<?php foreach ($data['user'] as $user) : ?>
					<tr>
						<td><?php echo $user['UserID']; ?></td>
						<td><img src="data:image/jpeg;base64,<?php echo base64_encode($user['UserImage']); ?>" alt="User Image" width="50px" height="50px"></td>
						<td><?php echo $user['Username']; ?></td>
						<td><?php echo $user['UserFname']; ?></td>
						<td><?php echo $user['UserLname']; ?></td>
						<td><?php echo $user['Password']; ?></td>
						<td><?php echo $user['Email']; ?></td>
						<!-- <td><?php echo $user['Address']; ?></td>
						<td><?php echo $user['City']; ?></td> -->
						<td><a href="edit/<?php echo $user["UserID"] ?>" class="btn btn-primary">Edit</a></td>
						<td><button onclick="confirmDelete(<?php echo $user['UserID']; ?>)" class="btn btn-danger">Delete</button></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
			<script>
		function confirmDelete(userId) {
			if (confirm("Are you sure you want to delete this User?")) {
				window.location.href = "delete/" + userId;
			}
		}
	</script>
</body>

</html>