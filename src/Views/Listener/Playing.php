<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/Global.css">
    <link rel="stylesheet" href="Playing.css">
    <title>Document</title>
</head>
<body> -->
<?php if (empty($_GET['page'])) { ?>
    <audio id="audio" >
        <source src="" type="audio/ogg" />
    </audio>
    <div class="nowPlaying">
        <footer class="nowPlayingBar">
            <div class="nowPlayingContainer">
                <div class="leftPlayingBar">
                    <div class="leftPlayingContainer">
                        <div class="leftPlayingImage">
                            <a href="/">
                                <img id="imagePlaying" src="https://haycafe.vn/wp-content/uploads/2022/03/Avatar-am-nhac.jpg" alt="">
                            </a>
                            <!-- <button>
                                <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 gQUQL">
                                    <path d="M.47 11.03a.75.75 0 0 0 1.06 0L8 4.56l6.47 6.47a.75.75 0 1 0 1.06-1.06L8 2.44.47 9.97a.75.75 0 0 0 0 1.06z">
                                    </path>
                                </svg>
                            </button> -->
                        </div>
                        <div class="nameSongAndArtist">
                            <a href="/" class="nameSong"></a>
                            <a href="/" class="nameArtist"></a>
                        </div>
                        <!-- <button class="reactOfSong">
                            <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 gQUQL">
                                <path fill="rgba(255, 255, 255, 0.698)" d="M1.69 2A4.582 4.582 0 0 1 8 2.023 4.583 4.583 0 0 1 11.88.817h.002a4.618 4.618 0 0 1 3.782 3.65v.003a4.543 4.543 0 0 1-1.011 3.84L9.35 14.629a1.765 1.765 0 0 1-2.093.464 1.762 1.762 0 0 1-.605-.463L1.348 8.309A4.582 4.582 0 0 1 1.689 2zm3.158.252A3.082 3.082 0 0 0 2.49 7.337l.005.005L7.8 13.664a.264.264 0 0 0 .311.069.262.262 0 0 0 .09-.069l5.312-6.33a3.043 3.043 0 0 0 .68-2.573 3.118 3.118 0 0 0-2.551-2.463 3.079 3.079 0 0 0-2.612.816l-.007.007a1.501 1.501 0 0 1-2.045 0l-.009-.008a3.082 3.082 0 0 0-2.121-.861z">
                                </path>
                            </svg>
                        </button>
                        <button class="reactOfSong">
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"><g fill="rgba(255, 255, 255, 0.698)" fill-rule="evenodd"><path d="M1 3v9h14V3H1zm0-1h14a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1z" fill-rule="nonzero"></path><path d="M10 8h4v3h-4z"></path></g></svg>
                        </button> -->
                    </div>
                </div>
                <div class="centerPlayingBar">
                    <div class="centerPlayingContainer">
                        <div class="topCenterPlaying">
                            <div class="playingControlLeft">
                                <button class="buttonNowPlaying" id="shuffle" class="shuffle" onclick="shuffle()">
                                    <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 gQUQL">
                                        <path fill="rgba(255, 255, 255, 0.698)" d="M13.151.922a.75.75 0 1 0-1.06 1.06L13.109 3H11.16a3.75 3.75 0 0 0-2.873 1.34l-6.173 7.356A2.25 2.25 0 0 1 .39 12.5H0V14h.391a3.75 3.75 0 0 0 2.873-1.34l6.173-7.356a2.25 2.25 0 0 1 1.724-.804h1.947l-1.017 1.018a.75.75 0 0 0 1.06 1.06L15.98 3.75 13.15.922zM.391 3.5H0V2h.391c1.109 0 2.16.49 2.873 1.34L4.89 5.277l-.979 1.167-1.796-2.14A2.25 2.25 0 0 0 .39 3.5z">
                                        </path>
                                        <path fill="rgba(255, 255, 255, 0.698)" d="m7.5 10.723.98-1.167.957 1.14a2.25 2.25 0 0 0 1.724.804h1.947l-1.017-1.018a.75.75 0 1 1 1.06-1.06l2.829 2.828-2.829 2.828a.75.75 0 1 1-1.06-1.06L13.109 13H11.16a3.75 3.75 0 0 1-2.873-1.34l-.787-.938z">
                                        </path>
                                    </svg>
                                </button>
                                <button onclick="previousSong()" class="buttonNowPlaying">
                                    <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 gQUQL">
                                        <path fill="rgba(255, 255, 255, 0.698)" d="M3.3 1a.7.7 0 0 1 .7.7v5.15l9.95-5.744a.7.7 0 0 1 1.05.606v12.575a.7.7 0 0 1-1.05.607L4 9.149V14.3a.7.7 0 0 1-.7.7H1.7a.7.7 0 0 1-.7-.7V1.7a.7.7 0 0 1 .7-.7h1.6z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <button class="buttonNowPlaying buttonRun" id="runSong">
                                <img src="<?php echo URLROOT ?>/assets/icons/play_black.svg" id="playingSong" >
                            </button>
                            <div class="playingControlRight">
                                <button onclick="nextSong()" class="buttonNowPlaying" id="nextSong">
                                    <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 gQUQL">
                                        <path fill="rgba(255, 255, 255, 0.698)" d="M12.7 1a.7.7 0 0 0-.7.7v5.15L2.05 1.107A.7.7 0 0 0 1 1.712v12.575a.7.7 0 0 0 1.05.607L12 9.149V14.3a.7.7 0 0 0 .7.7h1.6a.7.7 0 0 0 .7-.7V1.7a.7.7 0 0 0-.7-.7h-1.6z">
                                        </path>
                                    </svg>
                                </button>
                                <button data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Enable repeat" data-bs-original-title="Enable repeat" class="buttonNowPlaying" id="loopSong">
                                    <img src="<?php echo URLROOT ?>/assets/icons/loopSong.svg" />
                                </button>
                            </div>
                        </div>
                        <div class="bottomCenterPlaying">
                            <div id="startPlaying">00:00</div>
                            <div class="progressBar">
                                <input id="sliderRange" type="range" value="0" min="0" max="100" step="1">
                            </div>
                            <div id="endPlaying">00:00</div>
                        </div>
                    </div>
                </div>
                <div class="rightPlayingBar">
                    <div class="rightPlayingContainer">
                        <button onclick="Lyrics()" class="buttonNowPlaying" id="lyricButton">
                            <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 gQUQL">
                                <path fill="rgba(255, 255, 255, 0.698)" d="M13.426 2.574a2.831 2.831 0 0 0-4.797 1.55l3.247 3.247a2.831 2.831 0 0 0 1.55-4.797zM10.5 8.118l-2.619-2.62A63303.13 63303.13 0 0 0 4.74 9.075L2.065 12.12a1.287 1.287 0 0 0 1.816 1.816l3.06-2.688 3.56-3.129zM7.12 4.094a4.331 4.331 0 1 1 4.786 4.786l-3.974 3.493-3.06 2.689a2.787 2.787 0 0 1-3.933-3.933l2.676-3.045 3.505-3.99z">
                                </path>
                            </svg>
                        </button>
                        <!-- <button class="buttonNowPlaying">
                            <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 gQUQL">
                                <path fill="rgba(255, 255, 255, 0.698)" d="M15 15H1v-1.5h14V15zm0-4.5H1V9h14v1.5zm-14-7A2.5 2.5 0 0 1 3.5 1h9a2.5 2.5 0 0 1 0 5h-9A2.5 2.5 0 0 1 1 3.5zm2.5-1a1 1 0 0 0 0 2h9a1 1 0 1 0 0-2h-9z">
                                </path>
                            </svg>
                        </button>
                        <button class="buttonNowPlaying">
                            <svg role="presentation" height="16" width="16" aria-hidden="true" class="Svg-sc-ytk21e-0 gQUQL" viewBox="0 0 16 16" data-encore-id="icon"><path fill="rgba(255, 255, 255, 0.698)" d="M6 2.75C6 1.784 6.784 1 7.75 1h6.5c.966 0 1.75.784 1.75 1.75v10.5A1.75 1.75 0 0 1 14.25 15h-6.5A1.75 1.75 0 0 1 6 13.25V2.75zm1.75-.25a.25.25 0 0 0-.25.25v10.5c0 .138.112.25.25.25h6.5a.25.25 0 0 0 .25-.25V2.75a.25.25 0 0 0-.25-.25h-6.5zm-6 0a.25.25 0 0 0-.25.25v6.5c0 .138.112.25.25.25H4V11H1.75A1.75 1.75 0 0 1 0 9.25v-6.5C0 1.784.784 1 1.75 1H4v1.5H1.75zM4 15H2v-1.5h2V15z"></path><path fill="rgba(255, 255, 255, 0.698)" d="M13 10a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm-1-5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path></svg>
                        </button> -->
                        <div class="volumn">
                            <button onclick="upAndDownVolume()" class="buttonNowPlaying">
                                <div id="enableVolumn">
                                    <svg role="presentation" height="16" width="16" aria-hidden="true" aria-label="Volume high" id="volume-icon" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 gQUQL"><path fill="rgba(255, 255, 255, 0.698)" d="M9.741.85a.75.75 0 0 1 .375.65v13a.75.75 0 0 1-1.125.65l-6.925-4a3.642 3.642 0 0 1-1.33-4.967 3.639 3.639 0 0 1 1.33-1.332l6.925-4a.75.75 0 0 1 .75 0zm-6.924 5.3a2.139 2.139 0 0 0 0 3.7l5.8 3.35V2.8l-5.8 3.35zm8.683 4.29V5.56a2.75 2.75 0 0 1 0 4.88z"></path><path fill="rgba(255, 255, 255, 0.698)" d="M11.5 13.614a5.752 5.752 0 0 0 0-11.228v1.55a4.252 4.252 0 0 1 0 8.127v1.55z"></path></svg>
                                </div>
                                <div id="disableVolumn" style="display: none">
                                    <svg role="presentation" height="16" width="16" aria-hidden="true" aria-label="Volume off" id="volume-icon" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 ldgdZj"><path d="M13.86 5.47a.75.75 0 0 0-1.061 0l-1.47 1.47-1.47-1.47A.75.75 0 0 0 8.8 6.53L10.269 8l-1.47 1.47a.75.75 0 1 0 1.06 1.06l1.47-1.47 1.47 1.47a.75.75 0 0 0 1.06-1.06L12.39 8l1.47-1.47a.75.75 0 0 0 0-1.06z"></path><path d="M10.116 1.5A.75.75 0 0 0 8.991.85l-6.925 4a3.642 3.642 0 0 0-1.33 4.967 3.639 3.639 0 0 0 1.33 1.332l6.925 4a.75.75 0 0 0 1.125-.649v-1.906a4.73 4.73 0 0 1-1.5-.694v1.3L2.817 9.852a2.141 2.141 0 0 1-.781-2.92c.187-.324.456-.594.78-.782l5.8-3.35v1.3c.45-.313.956-.55 1.5-.694V1.5z"></path></svg>
                                </div>
                            </button>
                            <div class="progressBar">
                                <input id="sliderVolume" type="range" value="99" min="1" max="99" onchange="setVolume()">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <?php } ?>
<!-- </body>
</html> -->