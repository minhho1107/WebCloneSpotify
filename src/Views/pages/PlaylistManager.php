<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URLROOT ?>/css/Manager.css">
</head>
<base href="<?php echo PAGEROOT ?>/PlaylistAdmin/">

<body>
	<div class="container mt-5">
		<h1 class="mb-4">Playlist Management</h1>
		<table class="table">
			<a href="view_insert" class="btn btn-warning" style="margin-bottom:20px;">Insert </a>
			<thead>
				<tr>
					<th>PlaylistID</th>
					<th>PlaylistName</th>
					<!-- <th>PlaylistDescription</th> -->
					<th>AmountLike</th>
					<th>AmountSong</th>
					<th>PlaylistLength</th>
					<th>CreateDate</th>
					<th>PlaylistImage</th>
					<th></th>
				</tr>
			</thead>
			<a href="" class="icon-insertPlaylist"></a>
			<tbody>
				<?php foreach ($data['playlist'] as $playlist) : ?>
					<tr>
						<td><?php echo $playlist['PlaylistID']; ?></td>
						<td><img src="data:image/jpeg;base64,<?php echo base64_encode($playlist['PlaylistImage']); ?>" alt="Playlist Image" width="60px"></td>
						<!-- <td><?php echo $playlist['PlaylistDescription']; ?></td> -->
						<td><?php echo $playlist['PlaylistName']; ?></td>
						<td><?php echo $playlist['AmountLike']; ?></td>
						<td><?php echo $playlist['AmountSong']; ?></td>
						<td><?php echo $playlist['PlaylistLength']; ?></td>
						<td><?php echo $playlist['CreateDate']; ?></td>
						<th>
						<td><a href="edit/<?php echo $playlist["PlaylistID"] ?>" class="btn btn-primary">Edit</a></td>
						</th>
						<td><button onclick="confirmDelete(<?php echo $playlist['PlaylistID']; ?>)" class="btn btn-danger">Delete</button></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
	<script>
		function confirmDelete(playlistId) {
			if (confirm("Are you sure you want to delete this Playlist?")) {
				window.location.href = "delete/" + playlistId;
			}
		}
	</script>
</body>

</html>