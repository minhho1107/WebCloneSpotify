<?php
function SongItem($num, $image, $name, $singer, $album, $date, $time, $audio, $lyric, $songId)
{ ?>
    <div id="itemSong" class="row g2 py-2 align-items-center rounded">
        <div class="col-sm-1">
            <div class="num opacity-75"><?php echo $num ?></div>
            <div class="play-icon">
                <audio id="audio" crossOrigin="anonymous"></audio>
                <img width="16px" height="16px" class="playing-icon" onclick="PlayingMusic(event, '<?php echo $audio ?>', '<?php echo $lyric ?>')" src="<?php echo URLROOT ?>/assets/icons/play_small.svg">
            </div>
        </div>
        <div class="col-sm-4 d-grid grid-content">
            <div class="item1" style="align-self: center">
                <img src="<?php echo $image ?>" width="40" height="40" alt="Image" />
            </div>
            <div class="item2"><a class="link" href="#"><?php echo $name ?></a></div>
            <div class="item3 opacity-50"><a class="link link-custom" href="#"><?php echo $singer ?></a></div>
        </div>
        <div class="col-sm-3 opacity-50"><a class="link link-custom" href="#"><?php echo $album ?></a></div>
        <div class="col-sm-2 opacity-50"><?php echo $date ?></div>

        <!-- // Ở đây nè zzzzzzzzz  -->
        <div class="col-sm-2 d-flex justify-content-center">

            <div>
                <button class="btn_addSongToPlaylist" data-song-id="<?php echo $songId ?>" style="
  background-color: #171717;
  color: white;
  border: none;
  padding: 8px 16px;
  font-size: 16px;
  border-radius: 15px;
  border: 1px solid;
  ">
                    Add
                </button>
            </div>
            <script>
                function getLastValueFromUrl() {
                    const currentUrl = window.location.href;
                    const pattern = /\/(\d+)$/;
                    const matches = currentUrl.match(pattern);
                    const lastValue = matches ? matches[1] : null;
                    console.log(lastValue);
                }
            </script>
        </div>
    </div>
<?php } ?>