<!DOCTYPE html>
<html>

<head>
	<title>Admin Interface</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URLROOT ?>/css/PodcastManager.css">
</head>
<base href="<?php echo PAGEROOT ?>/PodcastAdmin/">

<body>
	<div class="container mt-5">
		<h1 class="mb-4">Podcast Management</h1>
		<table class="table">
			<a href="view_insert" class="btn btn-warning" style="margin-bottom:20px;">Insert </a>
			<thead>
				<tr>
					<th>PodcastID</th>
					<th>PodcastImage</th>
					<th>PodcastName</th>
					<th>PodcastAuthor</th>
					<!-- <th>PodcastDescription</th> -->
					<th></th>
				</tr>
			</thead>
			<a href="" class="icon-insertPodcast"></a>
			<tbody>
				<?php foreach ($data['podcast'] as $podcast) : ?>
					<tr>
						<td><?php echo $podcast['PodcastID']; ?></td>
						<td><img src="data:image/jpeg;base64,<?php echo base64_encode($podcast['PodcastImage']); ?>" alt="Podcast Image" width="60px"></td>
						<td><?php echo $podcast['PodcastName']; ?></td>
						<td><?php echo $podcast['PodcastAuthor']; ?></td>
						<!-- <td><?php echo $podcast['PodcastDescription']; ?></td> -->
						<th>
						<td><a href="edit/<?php echo $podcast["PodcastID"] ?>" class="btn btn-primary">Edit</a></td>
						</th>
						<td><button onclick="confirmDelete(<?php echo $podcast['PodcastID']; ?>)" class="btn btn-danger">Delete</button></td>

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
	<script>
		function confirmDelete(podcastId) {
			if (confirm("Are you sure you want to delete this Podcast?")) {
				window.location.href = "delete/" + podcastId;
			}
		}
	</script>
</body>

</html>