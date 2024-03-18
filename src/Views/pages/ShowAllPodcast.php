<base href="<?php echo PAGEROOT ?>/Home">
    <h1 style="margin-top: 72px;"><a href="">Podcast</a></h1>
    <div class="bangxephangnoibat">
        <?php include_once "./src/Views/components/Card.php";
        $arrayArt2 = array('');
        ?>
        <?php if (!empty($data['podcast'])) :
            foreach ($data['podcast'] as $podcast) : ?>
                <?php echo Card($podcast['PodcastID'], $podcast['PodcastName'], $arrayArt2, 'data:image/png;base64,' . base64_encode($podcast['PodcastImage']), $podcast['PodcastAuthor'], 'Podcast'); ?>
        <?php endforeach;
        endif; ?>