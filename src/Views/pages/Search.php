<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="../../css/Search.css">
</head>
<body> -->
<div class="containerSearch">
    <?php if ($data['data'] && $data['data'] != NULL) { ?>
        <?php foreach ($data['data'] as $key => $val) { ?>
            <a href="<?= PAGEROOT ?>/category/index/<?= $val['CategoryID'] ?>">
                <div class="cardSearch" style="background-color: rgb(115, 88, 255);">
                    <div class="cardSearch-header">
                        <span class="cardSearch-title"><?= $val['CategoryName'] ?></span>
                    </div>
                    <div class="cardSearch-body">
                        <img src="data:image/png;base64, <?= base64_encode($val['CategoryImage']) ?>" alt="" aria-hidden="false" draggable="false" loading="lazy">
                    </div>
                </div>
            </a>
        <?php } ?>
    <?php } ?>
</div>
<div class="song">

</div>
<div class="playlist">
    <div class="containerSearch" style=""></div>
</div>
<div class="album">
    <div class="containerSearch" style=""></div>
</div>
<div class="podcast">
    <div class="containerSearch" style=""></div>
</div>
<div class="artist">
    <div class="containerSearch" style=""></div>
</div>
<script>
    function debounce(func, timeout = 500) {
        let timer;
        return (...args) => {
            clearTimeout(timer);
            timer = setTimeout(() => {
                func.apply(this, args);
            }, timeout);
        };
    }

    function saveInput(__this) {
        const values = __this.value
        $.ajax({
            url: "<?= PAGEROOT ?>/home/searchSong",
            method: "post",
            data: {
                name: values
            },
            dataType: 'json',
            success: function(response) {
                if (response.status === 200) {
                    let html = '';
                    const songs = response.data.song;
                    const artist = response.data.artist;
                    const playlist = response.data.playlist;
                    const podcast = response.data.podcast;
                    const album = response.data.album;
                    if (songs !== null) {
                        songs.map((v) => {
                            html += `<a href="<?= PAGEROOT ?>/song/show/` + v.SongID + `">
                                        <div class="card">
                                            <div class="cardContainer">
                                                <div class="cardThumbail">
                                                    <div class="cardImage">
                                                        <img src="data:image/png;base64,` + decodeURIComponent(v.SongImage) + `" alt="">
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
                                                    <a href="<?= PAGEROOT ?>/song/show/` + v.SongID + `">` + v.SongName + `</a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>`
                        });
                    }

                    document.querySelector('.containerSearch').innerHTML = html;
                    let htmls_artist = '';
                    htmls_artist += '<h3 style="color:white; display: block; width: 100%; text-transform: uppercase ">artist</h3>';
                    if (artist !== null) {
                        artist.map((v) => {
                            htmls_artist += `<a href="<?= PAGEROOT ?>/artist/show/` + v.ArtistID + `">
                                        <div class="card">
                                            <div class="cardContainer">
                                                <div class="cardThumbail">
                                                    <div class="cardImage">
                                                        <img src="data:image/png;base64,` + decodeURIComponent(v.ArtistImage) + `" alt="">
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
                                                    <a href="<?= PAGEROOT ?>/artist/show/` + v.ArtistID + `">` + v.ArtistName + `</a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>`
                        });
                        document.querySelector('.artist >.containerSearch').innerHTML = htmls_artist;
                    } else {
                        document.querySelector('.artist>.containerSearch').innerHTML = '';
                    }
                    // =====
                    let htmls_album = '';
                    htmls_album += '<h3 style="color:white; display: block; width: 100%; text-transform: uppercase ">album</h3>';
                    if (album !== null) {
                        album.map((v) => {
                            htmls_album += `<a href="<?= PAGEROOT ?>/album/show/` + v.AlbumID + `">
                                        <div class="card">
                                            <div class="cardContainer">
                                                <div class="cardThumbail">
                                                    <div class="cardImage">
                                                        <img src="data:image/png;base64,` + decodeURIComponent(v.AlbumImage) + `" alt="">
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
                                                    <a href="<?= PAGEROOT ?>/album/show/` + v.AlbumID + `">` + v.AlbumName + `</a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>`
                        });
                        document.querySelector('.album >.containerSearch').innerHTML = htmls_album;
                    } else {
                        document.querySelector('.album>.containerSearch').innerHTML = '';
                    }
                    // =====
                    let htmls_podcast = '';
                    htmls_podcast += '<h3 style="color:white; display: block; width: 100%; text-transform: uppercase ">podcast</h3>';
                    if (podcast !== null) {
                        podcast.map((v) => {
                            htmls_podcast += `<a href="<?= PAGEROOT ?>/podcast/show/` + v.PodcastID + `">
                                        <div class="card">
                                            <div class="cardContainer">
                                                <div class="cardThumbail">
                                                    <div class="cardImage">
                                                        <img src="data:image/png;base64,` + decodeURIComponent(v.PodcastImage) + `" alt="">
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
                                                    <a href="<?= PAGEROOT ?>/podcast/show/` + v.PodcastID + `">` + v.PodcastName + `</a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>`
                        });
                        document.querySelector('.podcast >.containerSearch').innerHTML = htmls_podcast;
                    } else {
                        document.querySelector('.podcast>.containerSearch').innerHTML = '';
                    }
                    // =====
                    let htmls_playlist = '';
                    htmls_playlist += '<h3 style="color:white; display: block; width: 100%; text-transform: uppercase ">playlist</h3>';
                    if (playlist !== null) {
                        playlist.map((v) => {
                            htmls_playlist += `<a href="<?= PAGEROOT ?>/playlist/show/` + v.PlaylistID + `">
                                        <div class="card">
                                            <div class="cardContainer">
                                                <div class="cardThumbail">
                                                    <div class="cardImage">
                                                        <img src="data:image/png;base64,` + decodeURIComponent(v.PlaylistImage) + `" alt="">
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
                                                    <a href="<?= PAGEROOT ?>/playlist/show/` + v.PlaylistID + `">` + v.PlaylistName + `</a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>`
                        });
                        document.querySelector('.playlist >.containerSearch').innerHTML = htmls_playlist;
                    } else {
                        document.querySelector('.playlist>.containerSearch').innerHTML = '';
                    }
                } else {
                    document.querySelector('.containerSearch').innerHTML = `<a style="color: white">data not found</a>`;
                }
            }
        })
    }
    const search = debounce((__this) => saveInput(__this));
</script>