<base href="<?php echo PAGEROOT ?>/Home">
    <h1 style="margin-top: 72px;"><a href="">Playlist</a></h1>
    <div class="bangxephangnoibat">
        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('');
        ?>
        <?php if (!empty($data['playlist'])) :
            foreach ($data['playlist'] as $playlist) : ?>
                <?php echo Card($playlist['PlaylistID'], $playlist['PlaylistName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($playlist['PlaylistImage']), $playlist['AmountSong'], 'Playlist'); ?>
        <?php endforeach;
        endif; ?>