<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<base href="<?php echo PAGEROOT ?>/SongAdmin/">

<body>
	<div class="container mt-5">
		<h1 class="mb-4">Song Management</h1>
		<table class="table">
			<a href="view_insert" class="btn btn-warning" style="margin-bottom:20px;">Insert </a>
			<thead>
				<tr>
					<th>SongID</th>
					<th>SongImage</th>
					<th>SongName</th>
					<th>AlbumID</th>
					<th>SongDate</th>
					<th>SongLength</th>

					<th></th>
				</tr>
			</thead>
			<a href="" class="icon-insertSong"></a>
			<tbody>
				<?php foreach ($data['song'] as $song) : ?>
					<tr>
						<td><?php echo $song['SongID']; ?></td>
						<td><img src="data:image/jpeg;base64,<?php echo base64_encode($song['SongImage']); ?>" alt="Song Image" width="60px"></td>
						<td><?php echo $song['SongName']; ?></td>
						<td><?php echo $song['AlbumID']; ?></td>
						<td><?php echo $song['SongDate']; ?></td>
						<td><?php echo $song['SongLength']; ?></td>
						<th>
						<td><a href="edit/<?php echo $song["SongID"] ?>" class="btn btn-primary">Edit</a></td>
						</th>
						<td><button onclick="confirmDelete(<?php echo $song['SongID']; ?>)" class="btn btn-danger">Delete</button></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
	<script>
		function confirmDelete(songId) {
			if (confirm("Are you sure you want to delete this Song?")) {
				window.location.href = "delete/" + songId;
			}
		}
	</script>
</body>

</html>