<base href="<?php echo PAGEROOT ?>/Home">
<h1 style="margin-top: 72px;"><a href="">Artist</a></h1>
<div class="card-showtest">

    <?php include_once "./src/Views/components/Card.php";
    $arrayArt2 = array('');
    ?>
    <?php if (!empty($data['artist'])) :
        foreach ($data['artist'] as $artist) : ?>

            <?php echo Card($artist['ArtistID'], $artist['ArtistName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($artist['ArtistImage']), $artist['ArtistDob'], 'Artist'); ?>
    <?php endforeach;
    endif; ?>