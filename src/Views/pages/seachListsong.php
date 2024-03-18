

<?php include_once "./src/Views/Listener/Lyrics.php" ?> 

<div id="containerSong" class="container-fluid p-0 lead playlist-custom">
    <div class="sticky-top bg-custom">
        <div class="p-4">   
        </div>

        <div class="px-5 py-2">
            <div class="row g2 pb-2 border-bottom">
                <div class="col-sm-1">#</div>
                <div class="col-sm-4">Title</div>
                <div class="col-sm-3">Album</div>
                <div class="col-sm-2">Date added</div>
                <div class="col-sm-2 d-flex justify-content-center">
                    <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" fill="white">
                        <path d="M8 1.5a6.5 6.5 0 1 0 0 13 6.5 6.5 0 0 0 0-13zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z">
                        </path>
                        <path d="M8 3.25a.75.75 0 0 1 .75.75v3.25H11a.75.75 0 0 1 0 1.5H7.25V4A.75.75 0 0 1 8 3.25z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="px-5 py-2 list">

    <div id="song-list-container">
  <?php
    include_once "./src/Views/components/SongItemAddPlaylist.php";
    if (!empty($data['listfullsong'])) :
      $num = 1;
      foreach ($data['listfullsong'] as $song) :   
        echo SongItem($num++, 'data:image/png;base64,' . base64_encode($song['SongImage']), $song['SongName'], $song['ArtistName'], $song['AlbumName'], $song['SongDate'], $song['SongLength'], $song['SongAudio'], $song['SongLyric'],$song['SongID']);
      endforeach;
    endif;
  ?> 
 
</div>
