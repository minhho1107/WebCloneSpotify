<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/Global.css">
    <link rel="stylesheet" href="Home.css">

</head>
<body> -->
<base href="<?php echo PAGEROOT ?>/Home">
<div class="container">
    <!-- Phần playlist -->
    <h1><a href="">Playlist</a></h1>
    <a class="showAll" href="Home/ShowAllPlaylist">Show all</a>

    <div class="bangxephangnoibat">
        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('');
        ?>
        <?php if (!empty($data['arrPlaylist'])) :
            foreach ($data['arrPlaylist'] as $playlist) : ?>
                <?php echo Card($playlist['PlaylistID'], $playlist['PlaylistName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($playlist['PlaylistImage']), $playlist['AmountSong'], 'Playlist'); ?>
        <?php endforeach;
        endif; ?>
    </div>
        <!-- Phần Rencently Played -->
        <?php if (isset($_SESSION["user"])): ?>
        <h1>Recently Played</h1>
    <a class="showAll" href="Home/ShowAllHistory">Show all</a>
    <div class="card-newplay">
        <?php include_once "./src/Views/components/Card.php";
        // $arrayArt2 = array('JVKE');
        ?>
        <?php if (!empty($data['dataHistory'])) :
            foreach ($data['dataHistory'] as $song) : ?>
                <?php $arrayArt2 = array($song['ArtistName']); ?>
                <?php echo Card($song['SongID'], $song['SongName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($song['SongImage']), $song['SongAudio'], 'Song'); ?>
        <?php endforeach;
        endif; ?>
    </div>
    <?php endif;     ?>
    
    <h1>Song</h1>
    <!-- Phần Song -->
    <a class="showAll" href="Home/ShowAllSong">Show all</a>
    <div class="card-newplay">
        <?php include_once "./src/Views/components/Card.php";

        ?>
        <?php if (!empty($data['arrSong'])) :
            foreach ($data['arrSong'] as $song) : ?>
                <?php $arrayArt2 = array($song['ArtistName']); ?>
                <?php echo Card($song['SongID'], $song['SongName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($song['SongImage']), $song['SongAudio'], 'Song'); ?>
        <?php endforeach;
        endif; ?>

    </div>


    <!-- Phần Artist -->
    <h1><a href="">Artist</a></h1>
    <a class="showAll" href="Home/ShowAllArtist">Show all</a>
    <div class="card-showtest">

        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('');
        ?>
        <?php if (!empty($data['arrArtist'])) :
            foreach ($data['arrArtist'] as $artist) : ?>
                <?php echo Card($artist['ArtistID'], $artist['ArtistName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($artist['ArtistImage']), $artist['ArtistDob'], 'Artist'); ?>
        <?php endforeach;
        endif; ?>
    </div>

    <!-- Phần Album -->
    <h1><a href="">Album</a></h1>
    <a class="showAll" href="Home/ShowAllAlbum">Show all</a>
    <div class="haythucachkhac">
        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('');
        ?>
        <?php if (!empty($data['arrAlbum'])) :
            foreach ($data['arrAlbum'] as $album) : ?>
                <?php echo Card($album['AlbumID'], $album['AlbumName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($album['AlbumImage']), $album['AmountSong'], 'Album'); ?>
        <?php endforeach;
        endif; ?>

    </div>

    
    <!-- Phần playlist -->
    <h1><a href="">Podcast</a></h1>
    <a class="showAll" href="Home/ShowAllPodcast">Show all</a>
    <div class="bangxephangnoibat">
        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('');
        ?>
        <?php if (!empty($data['arrPodcast'])) :
            foreach ($data['arrPodcast'] as $podcast) : ?>
                <?php echo Card($podcast['PodcastID'], $podcast['PodcastName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($podcast['PodcastImage']), $podcast['PodcastAuthor'], 'Podcast'); ?>
        <?php endforeach;
        endif; ?>


    </div>
</div>
<script>

</script>
<!-- </body>
</html> -->