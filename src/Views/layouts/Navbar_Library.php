<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style2.css">
    <link rel="shortcut icon" href="./img/Spotify_icon.svg.png" type="image/x-icon">
    <title>Spotify</title>
</head>
<body>
   

    -->

<?php if (empty($_GET['page'])) { ?>
    <div class="playlist_option">
        <!-- ******************************       Phần Btn Back_Next của spotify  *****************************************-->
        <div class="btn_back_next">
            <button class="playlist_option__btn_back"><svg role="img" height="16" width="16" aria-hidden="true" class="" viewBox="0 0 16 16" data-encore-id="icon">
                    <path d="M11.03.47a.75.75 0 0 1 0 1.06L4.56 8l6.47 6.47a.75.75 0 1 1-1.06 1.06L2.44 8 9.97.47a.75.75 0 0 1 1.06 0z">
                    </path>
                </svg></button>
            <a href="./podscast.html"> <button class="playlist_option__btn_back"><svg role="img" height="16" width="16" aria-hidden="true" class="" viewBox="0 0 16 16" data-encore-id="icon">
                        <path d="M4.97.47a.75.75 0 0 0 0 1.06L11.44 8l-6.47 6.47a.75.75 0 1 0 1.06 1.06L13.56 8 6.03.47a.75.75 0 0 0-1.06 0z">
                        </path>
                    </svg></button></a>
        </div>
        <!-- ******************************       Phần Option menu của spotify  *****************************************-->
        <div class="playlist_option_menu">
            <ul class="playlist_option__List_Menu">
                <li class="playlist_option__Item_Menu"><a class="playlist_option__Item_Menu__Link " href="http://localhost/Spotify/Library">Playlists</a></li>
                <li class="playlist_option__Item_Menu"><a class="playlist_option__Item_Menu__Link" href="http://localhost/Spotify/Library/podcast">Podcasts</a></li>
                <li class="playlist_option__Item_Menu"><a class="playlist_option__Item_Menu__Link" href="http://localhost/Spotify/Library/artist">Artists</a></li>
                <li class="playlist_option__Item_Menu "><a class="playlist_option__Item_Menu__Link" href="http://localhost/Spotify/Library/album">Albums</a></li>
            </ul>
        </div>
        <!-- ******************************       Phần user của spotify  *****************************************-->
        <!-- <div class="playlist_option__user">
            <button class="playlist_option__user_btn">
                <img class="playlist_option__user_img" src="https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=935788870129556&amp;height=300&amp;width=300&amp;ext=1682139408&amp;hash=AeRjPs31imnE_490HGk" alt="Hoàng Khang">
                <span class="playlist_option__user_name">Hoàng Khang</span>
                <svg class="playlist_option__user_icon" role="img" height="16" width="16" aria-hidden="true" class="Svg-sc-ytk21e-0 gQUQL eAXFT6yvz37fvS1lmt6k" viewBox="0 0 16 16" data-encore-id="icon">
                    <path d="m14 6-6 6-6-6h12z"></path>
                </svg>
            </button>
        </div> -->

    </div>
    <!-- ******************************       Phần option_menu user của spotify  *****************************************-->
    <div id="context-menu">

        <ul class="context-menu__list">
            <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Account</span><svg role="img" height="16" width="16" aria-hidden="true" aria-label="External link" viewBox="0 0 16 16" data-encore-id="icon" class="">
                        <path d="M1 2.75A.75.75 0 0 1 1.75 2H7v1.5H2.5v11h10.219V9h1.5v6.25a.75.75 0 0 1-.75.75H1.75a.75.75 0 0 1-.75-.75V2.75z">
                        </path>
                        <path d="M15 1v4.993a.75.75 0 1 1-1.5 0V3.56L8.78 8.28a.75.75 0 0 1-1.06-1.06l4.72-4.72h-2.433a.75.75 0 0 1 0-1.5H15z">
                        </path>
                    </svg></button></li>
            <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Profile</span>
                </button></li>
            <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Upgrade to Premium</span><svg role="img" height="16" width="16" aria-hidden="true" aria-label="External link" viewBox="0 0 16 16" data-encore-id="icon" class="">
                        <path d="M1 2.75A.75.75 0 0 1 1.75 2H7v1.5H2.5v11h10.219V9h1.5v6.25a.75.75 0 0 1-.75.75H1.75a.75.75 0 0 1-.75-.75V2.75z">
                        </path>
                        <path d="M15 1v4.993a.75.75 0 1 1-1.5 0V3.56L8.78 8.28a.75.75 0 0 1-1.06-1.06l4.72-4.72h-2.433a.75.75 0 0 1 0-1.5H15z">
                        </path>
                    </svg></button></li>
            <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Support</span><svg role="img" height="16" width="16" aria-hidden="true" aria-label="External link" viewBox="0 0 16 16" data-encore-id="icon" class="">
                        <path d="M1 2.75A.75.75 0 0 1 1.75 2H7v1.5H2.5v11h10.219V9h1.5v6.25a.75.75 0 0 1-.75.75H1.75a.75.75 0 0 1-.75-.75V2.75z">
                        </path>
                        <path d="M15 1v4.993a.75.75 0 1 1-1.5 0V3.56L8.78 8.28a.75.75 0 0 1-1.06-1.06l4.72-4.72h-2.433a.75.75 0 0 1 0-1.5H15z">
                        </path>
                    </svg></button></li>
            <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Download</span><svg role="img" height="16" width="16" aria-hidden="true" aria-label="External link" viewBox="0 0 16 16" data-encore-id="icon" class="">
                        <path d="M1 2.75A.75.75 0 0 1 1.75 2H7v1.5H2.5v11h10.219V9h1.5v6.25a.75.75 0 0 1-.75.75H1.75a.75.75 0 0 1-.75-.75V2.75z">
                        </path>
                        <path d="M15 1v4.993a.75.75 0 1 1-1.5 0V3.56L8.78 8.28a.75.75 0 0 1-1.06-1.06l4.72-4.72h-2.433a.75.75 0 0 1 0-1.5H15z">
                        </path>
                    </svg></button></li>
            <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Settings</span>
                </button></li>


            <li class="context-menu__item btn_final"><button data-testid="user-widget-dropdown-logout" class="context-menu__item_btn" role="menuitem" tabindex="-1"><span dir="auto" class="context-menu__item_btn__name" data-encore-id="type">Log out</span></button></li>
        </ul>

    </div>
    <!-- ******************************       Phần content của spotify  *****************************************-->
    <!-- ******************************JS show menu user******************************  -->
    <script>
        const contextMenu = document.getElementById("context-menu");
        const userBtn1 = document.querySelector(".playlist_option__user_btn");

        userBtn1.addEventListener("click", () => {
            contextMenu.classList.toggle("clicked");

            if (contextMenu.classList.contains("clicked")) {
                contextMenu.style.display = "block";
            } else {
                contextMenu.style.display = "none";
            }
        });
    </script>
    <script>
        const userBtn = document.querySelector('.playlist_option__user_btn');
        const userIcon = userBtn.querySelector('.playlist_option__user_icon');
        userBtn.addEventListener('click', function() {
            userIcon.classList.toggle('rotate');
        });
    </script>

<?php } ?>
<!-- </body>
</html> -->