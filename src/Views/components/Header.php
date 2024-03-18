<?php
function Headers($type, $image, $name, $imgartist, $artist, $date, $amount, $length)
{ ?>
    <div class="header">
        <canvas style="display: none" id="canvas"></canvas>
        <div id="thumbailColor" class="colorThumbail"></div>
        <div class="colorShadowThumbail"></div>
        <div></div>
        <div class="thumbail">
            <!-- <img id="thumbailImg" src="<?php echo $image ?>" alt="" /> -->
            <!-- Đã thêm  -->
            <button style="border: none; padding: 0;" id="btn_changeImagePlaylist">
                <img id="thumbailImg" src="<?php echo $image ?>" alt="" />
            </button>
        </div>
        <div class="content">
            <span class="title"><?php echo $type ?></span>
            <span class="nameContent">
                <h1><?php echo $name ?></h1>
            </span>
            <div class="description">
                <div>
                    <img src="<?php echo $imgartist ?>" alt="" />
                    <span><a href="#"><?php echo $artist ?></a></span>
                </div>
                <!-- <span class="dot" -->
                ><?php echo $date ?>
                <!-- </span> -->
                <!-- <span class="dot"> -->
                <?php echo $amount ?> songs, <span class="timeofSongs">about <?php echo $length ?></span>
                <!-- </span> -->
            </div>
        </div>
    </div>
<?php } ?>