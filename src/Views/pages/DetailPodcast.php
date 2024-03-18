<?php
include_once "./src/Views/components/Header.php";
if (!empty($data['listsong'])) :
    switch ($data['type']) {
        case 'Playlist':
            echo Headers($data['type'], 'data:image/png;base64,' . base64_encode($data['listsong'][0]['PlaylistImage']), $data['listsong'][0]['PlaylistName'], 'data:image/png;base64,' . base64_encode($data['listsong'][0]['ArtistImage']), $data['listsong'][0]['PlaylistName'], $data['listsong'][0]['CreateDate'], $data['listsong'][0]['AmountSong'], $data['listsong'][0]['PlaylistLength']);
            break;
        case 'Album':
            echo Headers($data['type'], 'data:image/png;base64,' . base64_encode($data['listsong'][0]['AlbumImage']), $data['listsong'][0]['AlbumName'], 'data:image/png;base64,' . base64_encode($data['listartist'][0]['ArtistImage']), $data['artist'], $data['listsong'][0]['ReleaseDate'], $data['listsong'][0]['AmountSong'], $data['listsong'][0]['AlbumLength']);
            break;
        case 'Artist':
            echo Headers($data['type'], 'data:image/png;base64,' . base64_encode($data['listsong'][0]['ArtistImage']), $data['listsong'][0]['ArtistName'], 'data:image/png;base64,' . base64_encode($data['listsong'][0]['ArtistImage']), $data['listsong'][0]['ArtistName'], '', '', '');
            break;
        case 'Song':
            echo Headers($data['type'], 'data:image/png;base64,' . base64_encode($data['listsong'][0]['SongImage']), $data['listsong'][0]['SongName'], 'data:image/png;base64,' . base64_encode($data['listsong'][0]['ArtistImage']), $data['listsong'][0]['SongName'], $data['listsong'][0]['SongDate'], $data['listsong'][0]['AmountSong'], $data['listsong'][0]['SongLength']);
            break;
        case 'Podcast':
            echo Headers($data['type'], 'data:image/png;base64,' . base64_encode($data['listsong'][0]['PodcastImage']), $data['listsong'][0]['PodcastName'], 'data:image/png;base64,' . base64_encode($data['listsong'][0]['PodcastImage']), $data['listsong'][0]['PodcastAuthor'], '', '', '');
            break;
        case 'Liked Song':
            echo Headers($data['type'], 'https://t.scdn.co/images/3099b3803ad9496896c43f22fe9be8c4.png', 'Liked Songs', 'data:image/png;base64,' . base64_encode($data['listsong'][0]['UserImage']), $data['listsong'][0]['UserFname'], '', '', '');
            break;
        default:
            echo Headers($data['type'], 'data:image/png;base64,' . base64_encode($data['listsong'][0]['PlaylistImage']), $data['listsong'][0]['PlaylistName'], 'data:image/png;base64,' . base64_encode($data['listsong'][0]['ArtistImage']), $data['listsong'][0]['PlaylistName'], $data['listsong'][0]['CreateDate'], $data['listsong'][0]['AmountSong'], $data['listsong'][0]['PlaylistLength']);
            break;
    }
endif;
?>

<?php include_once "./src/Views/Listener/Lyrics.php" ?>

<div id="containerSong" class="container-fluid p-0 lead playlist-custom">
    <div class="sticky-top bg-custom">
        <div class="p-4">
            <button type="button" class="btn rounded-pill me-4 p-3 shadow" style="background-color: rgb(31, 183, 67)">
                <img width="28px" height="28px" onclick="PlayingMusic()" id="playingLargeIcon" src="<?php echo URLROOT ?>/assets/icons/play_small.svg">
            </button>
            <button type="button" class="bg-transparent border-0 me-4">
                <span data-bs-toggle="tooltip" data-bs-placement="top" title="Save to Your Library">
                    <svg role="img" height="32" width="32" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" fill="white">
                        <path d="M5.21 1.57a6.757 6.757 0 0 1 6.708 1.545.124.124 0 0 0 .165 0 6.741 6.741 0 0 1 5.715-1.78l.004.001a6.802 6.802 0 0 1 5.571 5.376v.003a6.689 6.689 0 0 1-1.49 5.655l-7.954 9.48a2.518 2.518 0 0 1-3.857 0L2.12 12.37A6.683 6.683 0 0 1 .627 6.714 6.757 6.757 0 0 1 5.21 1.57zm3.12 1.803a4.757 4.757 0 0 0-5.74 3.725l-.001.002a4.684 4.684 0 0 0 1.049 3.969l.009.01 7.958 9.485a.518.518 0 0 0 .79 0l7.968-9.495a4.688 4.688 0 0 0 1.049-3.965 4.803 4.803 0 0 0-3.931-3.794 4.74 4.74 0 0 0-4.023 1.256l-.008.008a2.123 2.123 0 0 1-2.9 0l-.007-.007a4.757 4.757 0 0 0-2.214-1.194z">
                        </path>
                    </svg>
                </span>
            </button>
            <div class="dropdown open d-inline-block">
                <button type="button" class="bg-transparent border-0 me-4" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="More options">
                        <svg role="img" height="32" width="32" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" fill="white">
                            <path d="M4.5 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm15 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm-7.5 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z">
                            </path>
                        </svg>
                    </span>
                </button>
                <div class="dropdown-menu text-bg-dark" aria-labelledby="triggerId">
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Add to queue</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Go to playlist radio</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Report</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Add to Your Library</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Exclude from your taste profile</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Share</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">About recommendations</a>
                    <a class="dropdown-item text-white dropdown-hover p-2 ps-3" href="#">Open in Desktop app</a>
                </div>
            </div>
        </div>
    </div>

    <div class="poscard_component_decription">
        <div class="decription_Upnext">
            <!-- Phần nội dung của một Item đầu tiên trong Postcast  -->
            <div class="decription_Upnext_content">
                <div class="decription_Upnext_content_text" style="padding: 1.6em 1em;">
                    <span class="content_text_name" style="display: block;color: #b3b3b3;font-size: 1.2em;margin-bottom: 0.5em;">Up
                        next</span>
                    <a class="content_text_link" style="color: white;font-size: 1.6em;font-weight: 700;"><?php echo $data['listsong'][0]['PodcastName']; ?></a>
                    <span class="content_text_decription" style="display: block;color: #b3b3b3;font-size: 1.2em;margin-top: 0.8em;"><?php echo $data['listsong'][0]['PodcastDescription']; ?></span>
                </div>
                <div class="decription_Upnext_content_button" style="padding: 0.5em 1em;">
                    <div class="content_button__Play" style="display: inline-block;width: 40%;height: 100%; margin-top:24px">
                        <button class="button__Play"><span><svg class="icon_play" role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon">
                                    <path d="M3 1.713a.7.7 0 0 1 1.05-.607l10.89 6.288a.7.7 0 0 1 0 1.212L4.05 14.894A.7.7 0 0 1 3 14.288V1.713z">
                                    </path>
                                </svg></span></button><span class="decription_day">Jun 2022 </span><span> </span><span class="decription_time"> 32 min 59 sec</span>
                    </div>
                    <div class="content_button__ListBtn" style="float: right;width: 40%;height: 100%;">
                        <div class="container_ListBtn">

                            <button class="btn_library"><span><svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" class="icon_btn_library">
                                        <path d="M3 8a1 1 0 0 1 1-1h3.5v2H5v11h14V9h-2.5V7H20a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8z">
                                        </path>
                                        <path d="M12 12.326a1 1 0 0 0 1-1V3.841l1.793 1.793a1 1 0 1 0 1.414-1.414L12 .012 7.793 4.22a1 1 0 1 0 1.414 1.414L11 3.84v7.485a1 1 0 0 0 1 1z">
                                        </path>
                                    </svg></span></button>

                            <button class="btn_library"><svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" class="icon_btn_library">
                                    <path d="M11.999 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18zm-11 9c0-6.075 4.925-11 11-11s11 4.925 11 11-4.925 11-11 11-11-4.925-11-11z">
                                    </path>
                                    <path d="M17.999 12a1 1 0 0 1-1 1h-4v4a1 1 0 1 1-2 0v-4h-4a1 1 0 1 1 0-2h4V7a1 1 0 1 1 2 0v4h4a1 1 0 0 1 1 1z">
                                    </path>
                                </svg></button>

                            <button class="btn_library"><svg role="img" height="24" width="24" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" class="icon_btn_library">
                                    <path d="M4.5 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm15 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm-7.5 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z">
                                    </path>
                                </svg></button>
                        </div>
                    </div>
                </div>

            </div>

            <h1 class="title_decription">All Episodes</h1>

            <!-- ################################################################################################## -->

            <!-- Phần nội dung của một Item trong pocast  -->

            <div class="decription_Upnext_content bg_music">
                <?php foreach ($data['listsongepisode'] as $episode) : ?>
                    <div class="episode">
                        <div class="Img_music" style="padding:51px;">
                            <img aria-hidden="true" draggable="false" loading="lazy" src="<?php echo 'data:image/png;base64,' . base64_encode($episode['EpisodeImage']); ?>">
                        </div>
                        <div class="decription_music">
                            <div class="decription_Upnext_content_text">
                                <a class="content_text_link" style="margin-left:220px; position:absolute; margin-top:-250px; font-weight:bold; font-size:20px"><?php echo $episode['EpisodeTitle']; ?></a>
                                <span class="content_text_decription" style="position: absolute; margin-left:220px; margin-top:-180px;"><?php echo $episode['EpisodeDescription']; ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- ################################################################################################## -->




            <div style="height: 20em;"></div>

        </div>
        <!-- Phần nội dung của một About trong pocast  -->

        <div class="decription_About">
                        <h1 class="title_decription" style="margin-top: 0.5em;"><?php echo $data['listsong'][0]['PodcastName']; ?></h1>
                        <p class="about_text"><?php echo $data['listsong'][0]['PodcastDescription']; ?></p>
                    </div>
    </div>
</div>