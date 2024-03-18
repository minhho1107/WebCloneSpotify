<?php
function SongItem($SongID, $num, $image, $name, $singer, $album, $date, $time, $audio, $lyric, $LikeForUser)
{ ?>
    <div id="itemSong" class="row g2 py-2 align-items-center rounded">
        <div class="col-sm-1">
            <div class="num opacity-75"><?php echo $num ?></div>
            <div class="play-icon">
                <audio id="audio" crossOrigin="anonymous"></audio>
                <img data-id="<?php echo $SongID ?>" width="16px" height="16px" class="playing-icon" onclick="PlayingMusic(
                        event, 
                        '<?php echo $audio ?>', 
                        '<?php echo $lyric ?>', 
                        '<?php echo $name ?>', 
                        '<?php echo $singer ?>', 
                        '<?php echo $image ?>')" src="<?php echo URLROOT ?>/assets/icons/play_small.svg">
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
        <div class="col-sm-2 d-flex justify-content-center">
            <span data-bs-toggle="tooltip" data-bs-placement="top" title="Save to Your Library" class="play-icon" id="placeLike">
                <?php $likeSong = false ?>
                <?php
                // TODO
                if($LikeForUser !=null):
                foreach ($LikeForUser as $like) :
                    if ($like['SongID'] == $SongID) : ?>
                        <?php $likeSong = true ?>
                        <div class="btn_like btn_like_<?php echo $SongID ?>" id="btn_like_<?php echo $SongID ?>" data-id="<?php echo $SongID ?>" style="display: none">
                            <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon">
                                <path fill="green" d="M1.69 2A4.582 4.582 0 0 1 8 2.023 4.583 4.583 0 0 1 11.88.817h.002a4.618 4.618 0 0 1 3.782 3.65v.003a4.543 4.543 0 0 1-1.011 3.84L9.35 14.629a1.765 1.765 0 0 1-2.093.464 1.762 1.762 0 0 1-.605-.463L1.348 8.309A4.582 4.582 0 0 1 1.689 2zm3.158.252A3.082 3.082 0 0 0 2.49 7.337l.005.005L7.8 13.664a.264.264 0 0 0 .311.069.262.262 0 0 0 .09-.069l5.312-6.33a3.043 3.043 0 0 0 .68-2.573 3.118 3.118 0 0 0-2.551-2.463 3.079 3.079 0 0 0-2.612.816l-.007.007a1.501 1.501 0 0 1-2.045 0l-.009-.008a3.082 3.082 0 0 0-2.121-.861z">
                                </path>
                            </svg>
                        </div>
                        <div class="btn_liked btn_like_<?php echo $SongID ?>" data-id="<?php echo $SongID ?>">
                            <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 ldgdZj" style="fill: #2d5">
                                <path d="M15.724 4.22A4.313 4.313 0 0 0 12.192.814a4.269 4.269 0 0 0-3.622 1.13.837.837 0 0 1-1.14 0 4.272 4.272 0 0 0-6.21 5.855l5.916 7.05a1.128 1.128 0 0 0 1.727 0l5.916-7.05a4.228 4.228 0 0 0 .945-3.577z">
                                </path>
                            </svg>
                        </div>
                <?php endif;
                endforeach;
            endif;
                ?>
                <?php if ($likeSong == false) : ?>
                    <!-- TODO -->
                    <div class="btn_like btn_like_<?php echo $SongID ?>" id="btn_like_<?php echo $SongID ?>" data-id="<?php echo $SongID ?>">
                        <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon">
                            <path fill="green" d="M1.69 2A4.582 4.582 0 0 1 8 2.023 4.583 4.583 0 0 1 11.88.817h.002a4.618 4.618 0 0 1 3.782 3.65v.003a4.543 4.543 0 0 1-1.011 3.84L9.35 14.629a1.765 1.765 0 0 1-2.093.464 1.762 1.762 0 0 1-.605-.463L1.348 8.309A4.582 4.582 0 0 1 1.689 2zm3.158.252A3.082 3.082 0 0 0 2.49 7.337l.005.005L7.8 13.664a.264.264 0 0 0 .311.069.262.262 0 0 0 .09-.069l5.312-6.33a3.043 3.043 0 0 0 .68-2.573 3.118 3.118 0 0 0-2.551-2.463 3.079 3.079 0 0 0-2.612.816l-.007.007a1.501 1.501 0 0 1-2.045 0l-.009-.008a3.082 3.082 0 0 0-2.121-.861z">
                            </path>
                        </svg>
                    </div>
                    <div class="btn_liked btn_like_<?php echo $SongID ?>" data-id="<?php echo $SongID ?>" style="display: none">
                        <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 ldgdZj" style="fill: #2d5">
                            <path d="M15.724 4.22A4.313 4.313 0 0 0 12.192.814a4.269 4.269 0 0 0-3.622 1.13.837.837 0 0 1-1.14 0 4.272 4.272 0 0 0-6.21 5.855l5.916 7.05a1.128 1.128 0 0 0 1.727 0l5.916-7.05a4.228 4.228 0 0 0 .945-3.577z">
                            </path>
                        </svg>
                    </div>
                <?php endif ?>
            </span>
            <span class="ms-5 me-4 opacity-50"><?php echo sprintf("%02d:%02d", floor($time / 60), $time % 60); ?></span>
            <!-- <div class="play-icon dropdown open">
                <button type="button" class="bg-transparent border-0" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="More options">
                        <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" fill="white">
                            <path d="M3 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm6.5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM16 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                            </path>
                        </svg>
                    </span>
                </button>
                <div class="dropdown-menu text-bg-dark" aria-labelledby="triggerId">
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Add to queue</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Go to song radio</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Go to artist</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Go to album</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Show credits</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Save to your Liked Songs</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Add to playlist</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Share</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Open in Desktop app</a>
                </div>
            </div> -->
        </div>
    </div>
<?php } ?>