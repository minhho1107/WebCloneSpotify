<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URLROOT ?>/css/PodcastManager.css">
</head>
<base href="<?php echo PAGEROOT ?>/AlbumAdmin/">
<body>
	<div class="container mt-5">
		<h1 class="mb-4">Album Management</h1>
		<table class="table">
			<a href="view_insert" class="btn btn-warning" style="margin-bottom:20px;">Insert </a>

			<thead>
				<tr>
					<th>AblumID</th>
					<th>AlbumImage</th>
					<th>AlbumName</th>
					<th>ReleaseDate</th>
					<th>AmountSong</th>
					<th>AlbumLength</th>
				</tr>
			</thead>
			<a href="" class="icon-insertAlbum"></a>

			<tbody>
				<?php foreach ($data['album'] as $album) : ?>
					<tr>
						<td><?php echo $album['AlbumID']; ?></td>
						<td><img src="data:image/jpeg;base64,<?php echo base64_encode($album['AlbumImage']); ?>" alt="Album Image" width="60px"></td>
						<td><?php echo $album['AlbumName']; ?></td>
						<td><?php echo $album['ReleaseDate']; ?></td>
						<td><?php echo $album['AmountSong']; ?></td>
						<td><?php echo $album['AlbumLength']; ?></td>
						<th>
						<td><a href="edit/<?php echo $album["AlbumID"] ?>" class="btn btn-primary">Edit</a></td>
						</th>
						<th>
						<td><button onclick="confirmDelete(<?php echo $album['AlbumID']; ?>)" class="btn btn-danger">Delete</button></td>
						</th>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
	<script>
		function confirmDelete(albumId) {
			if (confirm("Are you sure you want to delete this Album?")) {
				window.location.href = "delete/" + albumId;
			}
		}
	</script>
</body>

</html>