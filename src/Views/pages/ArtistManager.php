<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URLROOT ?>/css/PodcastManager.css">
</head>
<base href="<?php echo PAGEROOT ?>/ArtistAdmin/">
<body>
	<div class="container mt-5">
		<h1 class="mb-4">Artist Management</h1>
		<table class="table">
			<a href="view_insert" class="btn btn-warning" style="margin-bottom:20px;">Insert </a>

			<thead>
				<tr>
					<th>ArtistID</th>
					<th>ArtistImage</th>
					<th>ArtistName</th>
					<th>ArtistDescription</th>
					<th>ArtistDob</th>
				</tr>
			</thead>
			<a href="" class="icon-insertAlbum"></a>
			<tbody>
				<?php foreach ($data['artist'] as $artist) : ?>
					<tr>
						<td><?php echo $artist['ArtistID']; ?></td>
						<td><img src="data:image/jpeg;base64,<?php echo base64_encode($artist['ArtistImage']); ?>" alt="Artist Image" width="60px"></td>
						<td><?php echo $artist['ArtistName']; ?></td>
						<td><?php echo $artist['ArtistDescription']; ?></td>
						<td><?php echo $artist['ArtistDob']; ?></td>
						<th>
						<td><a href="edit/<?php echo $artist["ArtistID"] ?>" class="btn btn-primary">Edit</a></td>
						</th>
						<td><button onclick="confirmDelete(<?php echo $artist['ArtistID']; ?>)" class="btn btn-danger">Delete</button></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
		<script>
		function confirmDelete(artistId) {
			if (confirm("Are you sure you want to delete this artist ?")) {
				window.location.href = "delete/" + artistId;
			}
		}
	</script>
</body>

</html>