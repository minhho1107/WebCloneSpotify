<div class="containerSearch">
    <?php if($data['results'] && $data['results'] != NULL){?>
        <?php foreach($data['results'] as $key => $val){?>
            <a href="<?=  PAGEROOT?>/song/show/<?= $val['SongID'] ?>">
                <div class="card">
                    <div class="cardContainer">
                        <div class="cardThumbail">
                            <div class="cardImage">
                            <img src="data:image/png;base64, <?= base64_encode($val['SongImage']) ?>" alt="" aria-hidden="false" draggable="false" loading="lazy">   
                                <div class="cardPlay">
                                    <button>
                                        <span class="iconButtonCard">
                                            <span class="innerButtonCard">
                                                <svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" class="Svg-sc-ytk21e-0 uPxdw">
                                                    <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="cardSongs">
                            <a href="<?=  PAGEROOT?>/song/show/<?= $val['SongID'] ?>"><?= $val['SongName']?></a>
                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
    <?php } ?>
</div>
