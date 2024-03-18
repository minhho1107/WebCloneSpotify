<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/PostCard_component_style.css">
    
        <link rel="shortcut icon" href="./img/Spotify_icon.svg.png" type="image/x-icon">

    <title>Spotify</title>
</head>

<body> -->
   
    

     <!-- ******************************       Phần Menu Left  *****************************************-->
        

      <!-- ******************************       Phần Body chứa nội dung của spotify  *****************************************-->


       
            <!-- ********************************************************************************************************************* -->
            <!-- ******************************       Phần content của Postcast  *****************************************-->
            <!-- Phần header          -->
            <div class="img_background"></div>
            <!-- Phần body          -->
            <div class="poscard_component_container">

                <!-- Phần btn follow  -->
                <div class="poscard_component_head">
                    <button type="button" class="head__button" onclick="changeFollowButton()">Follow</button>
                    <button  type="button" class="button_3dot">
                        <svg role="img" height="32" width="32" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon"
                        class="head__button__3dot">
                        <path
                            d="M4.5 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm15 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm-7.5 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z">
                        </path>
                    </svg>
                    </button>
                    
                </div>
                <!-- Phần menu của btn(...)  -->
                <div id="context-menu-btn_3dot">

                    <ul id="context-menu__list_btn_3dot">
                        <li class="context-menu__item"><button class="context-menu__item_btn btn_follow_hover"><span
                                    class="context-menu__item_btn__name">Follow</span></button></li>

                        <li class="context-menu__item"><button class="context-menu__item_btn btn_share_hover"><span
                                    class="context-menu__item_btn__name">Share</span><svg role="img" height="16"
                                    width="16" aria-hidden="true" class="rotate_90"
                                    viewBox="0 0 16 16" data-encore-id="icon">
                                    <path d="M14 10 8 4l-6 6h12z"></path>
                                </svg></button></li>




                        <li class="context-menu__item btn_final"><button data-testid="user-widget-dropdown-logout"
                                class="context-menu__item_btn btn_opendesktop_hover" role="menuitem" tabindex="-1"><span dir="auto"
                                    class="context-menu__item_btn__name" data-encore-id="type">Open in Desktop
                                    app</span></button></li>
                    </ul>

                </div>
                 <!-- Phần menu của btn(...)  khi hover-->
                <div id="context-menu-btn_3dot_2">

                    <ul class="context-menu__list_btn_3dot_2">
                       
                        <li class="context-menu__item"><button class="context-menu__item_btn"><span
                                    class="context-menu__item_btn__name">Profile</span>
                            </button></li>
                       
                        <li class="context-menu__item"><button class="context-menu__item_btn"><span
                                    class="context-menu__item_btn__name">Settings</span>
                            </button></li>                
                    </ul>
    
                </div>
    
                
                <div class="poscard_component_decription">
                    <div class="decription_Upnext">
                        <!-- Phần nội dung của một Item đầu tiên trong Postcast  -->
                        <div class="decription_Upnext_content">
                            <div class="decription_Upnext_content_text" style="padding: 1.6em 1em;">
                                <span class="content_text_name"
                                    style="display: block;color: #b3b3b3;font-size: 1.2em;margin-bottom: 0.5em;">Up
                                    next</span>
                                <a class="content_text_link"
                                    style="color: white;font-size: 1.6em;font-weight: 700;">THIỀN CHỮA LÀNH ĐỨA TRẺ BÊN
                                    TRONG -
                                    Trở về ôm ấp đứa bé bên trong bạn - Dẫn thiền: Nhung Nhi</a>
                                <span class="content_text_decription"
                                    style="display: block;color: #b3b3b3;font-size: 1.2em;margin-top: 0.8em;">Kênh
                                    Podcast chính thống duy nhất của tổ chức chữa
                                    Hãy cho chúng mình biết cảm nhận của bạn sau khi kết thúc bài thiền này và sự thay
                                    đổi bạn có sau một thời gian duy trì nhé. Nếu bạn cảm nhận bài thiền này có giá trị,
                                    bạn hãy chia sẻ nó tới những người đang cần nhé!</span>
                            </div>
                            <div class="decription_Upnext_content_button" style="padding: 0.5em 1em;">
                                <div class="content_button__Play"
                                    style="display: inline-block;width: 40%;height: 100%;">
                                    <button class="button__Play"><span><svg class="icon_play" role="img" height="16"
                                                width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon">
                                                <path
                                                    d="M3 1.713a.7.7 0 0 1 1.05-.607l10.89 6.288a.7.7 0 0 1 0 1.212L4.05 14.894A.7.7 0 0 1 3 14.288V1.713z">
                                                </path>
                                            </svg></span></button><span class="decription_day">Jun 2022 </span><span
                                        >    </span><span class="decription_time"> 32 min 59 sec</span>
                                </div>
                                <div class="content_button__ListBtn" style="float: right;width: 40%;height: 100%;">
                                    <div class="container_ListBtn">

                                        <button class="btn_library"><span><svg role="img" height="24" width="24"
                                                    aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon"
                                                    class="icon_btn_library">
                                                    <path
                                                        d="M3 8a1 1 0 0 1 1-1h3.5v2H5v11h14V9h-2.5V7H20a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8z">
                                                    </path>
                                                    <path
                                                        d="M12 12.326a1 1 0 0 0 1-1V3.841l1.793 1.793a1 1 0 1 0 1.414-1.414L12 .012 7.793 4.22a1 1 0 1 0 1.414 1.414L11 3.84v7.485a1 1 0 0 0 1 1z">
                                                    </path>
                                                </svg></span></button>

                                        <button class="btn_library"><svg role="img" height="24" width="24"
                                                aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon"
                                                class="icon_btn_library">
                                                <path
                                                    d="M11.999 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18zm-11 9c0-6.075 4.925-11 11-11s11 4.925 11 11-4.925 11-11 11-11-4.925-11-11z">
                                                </path>
                                                <path
                                                    d="M17.999 12a1 1 0 0 1-1 1h-4v4a1 1 0 1 1-2 0v-4h-4a1 1 0 1 1 0-2h4V7a1 1 0 1 1 2 0v4h4a1 1 0 0 1 1 1z">
                                                </path>
                                            </svg></button>

                                        <button class="btn_library"><svg role="img" height="24" width="24"
                                                aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon"
                                                class="icon_btn_library">
                                                <path
                                                    d="M4.5 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm15 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm-7.5 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z">
                                                </path>
                                            </svg></button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <h1 class="title_decription">All Episodes</h1>

                        <!-- ################################################################################################## -->

                        <!-- Phần nội dung của một Item trong pocast  -->
                        <div class="decription_Upnext_content bg_music" style="display: flex;">

                            <div class="Img_music"><img aria-hidden="true" draggable="false" loading="lazy"
                                    src="https://i.scdn.co/image/ab6765630000f68de597c0fce68e795b8f31c4a0"
                                    data-testid="entity-image"
                                    alt="THIỀN CHỮA LÀNH ĐỨA TRẺ BÊN TRONG - Trở về ôm ấp đứa bé bên trong bạn - Dẫn thiền: Nhung Nhi"
                                    srcset="https://i.scdn.co/image/ab6765630000f68de597c0fce68e795b8f31c4a0 32w, https://i.scdn.co/image/ab6765630000f68de597c0fce68e795b8f31c4a0 64w, https://i.scdn.co/image/ab67656300005f1fe597c0fce68e795b8f31c4a0 150w, https://i.scdn.co/image/ab67656300005f1fe597c0fce68e795b8f31c4a0 300w, https://i.scdn.co/image/ab6765630000ba8ae597c0fce68e795b8f31c4a0 320w, https://i.scdn.co/image/ab6765630000ba8ae597c0fce68e795b8f31c4a0 640w">
                            </div>
                            <div class="decription_music" style="width: 100%;position: relative;">
                                <div class="decription_Upnext_content_text" style="padding: 1.6em 1em;">

                                    <a class="content_text_link"
                                        style="color: white;font-size: 1.6em;font-weight: 700;">THIỀN CHỮA LÀNH ĐỨA TRẺ
                                        BÊN
                                        TRONG -
                                        Trở về ôm ấp đứa bé bên trong bạn - Dẫn thiền: Nhung Nhi</a>
                                    <span class="content_text_decription"
                                        style="display: block;color: #b3b3b3;font-size: 1.2em;margin-top: 0.8em;">Kênh
                                        Podcast chính thống duy nhất của tổ chức chữa
                                        Hãy cho chúng mình biết cảm nhận của bạn sau khi kết thúc bài thiền này và sự
                                        thay
                                        đổi bạn có sau một thời gian duy trì nhé. Nếu bạn cảm nhận bài thiền này có giá
                                        trị,
                                        bạn hãy chia sẻ nó tới những người đang cần nhé!</span>
                                </div>
                                <div class="decription_Upnext_content_button" style="padding: 0.5em 1em;">
                                    <div class="content_button__Play"
                                        style="display: inline-block;width: 40%;height: 100%;">
                                        <button class="button__Play play_music_btn"><span><svg class="icon_play"
                                                    role="img" height="16" width="16" aria-hidden="true"
                                                    viewBox="0 0 16 16" data-encore-id="icon">
                                                    <path
                                                        d="M3 1.713a.7.7 0 0 1 1.05-.607l10.89 6.288a.7.7 0 0 1 0 1.212L4.05 14.894A.7.7 0 0 1 3 14.288V1.713z">
                                                    </path>
                                                </svg></span></button><span class="decription_day">Jun 2022 </span><span
                                            ></span><span class="decription_time"> 32 min 59 sec</span>
                                    </div>
                                    <div class="content_button__ListBtn" style="float: right;width: 40%;height: 100%;">
                                        <div class="container_ListBtn">

                                            <button class="btn_library"><span><svg role="img" height="24" width="24"
                                                        aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon"
                                                        class="icon_btn_library">
                                                        <path
                                                            d="M3 8a1 1 0 0 1 1-1h3.5v2H5v11h14V9h-2.5V7H20a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8z">
                                                        </path>
                                                        <path
                                                            d="M12 12.326a1 1 0 0 0 1-1V3.841l1.793 1.793a1 1 0 1 0 1.414-1.414L12 .012 7.793 4.22a1 1 0 1 0 1.414 1.414L11 3.84v7.485a1 1 0 0 0 1 1z">
                                                        </path>
                                                    </svg></span></button>

                                            <button class="btn_library"><svg role="img" height="24" width="24"
                                                    aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon"
                                                    class="icon_btn_library">
                                                    <path
                                                        d="M11.999 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18zm-11 9c0-6.075 4.925-11 11-11s11 4.925 11 11-4.925 11-11 11-11-4.925-11-11z">
                                                    </path>
                                                    <path
                                                        d="M17.999 12a1 1 0 0 1-1 1h-4v4a1 1 0 1 1-2 0v-4h-4a1 1 0 1 1 0-2h4V7a1 1 0 1 1 2 0v4h4a1 1 0 0 1 1 1z">
                                                    </path>
                                                </svg></button>

                                            <button class="btn_library"><svg role="img" height="24" width="24"
                                                    aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon"
                                                    class="icon_btn_library">
                                                    <path
                                                        d="M4.5 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm15 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm-7.5 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z">
                                                    </path>
                                                </svg></button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- ################################################################################################## -->




                        <div style="height: 20em;"></div>

                    </div>
                    <!-- Phần nội dung của một About trong pocast  -->
                    <div class="decription_About">
                        <h1 class="title_decription" style="margin-top: 0.5em;">About</h1>
                        <p class="about_text">Kênh Podcast chính thống duy nhất của tổ chức chữa lành vì cộng đồng EHO -
                            Eros Healing
                            Organization. Là kênh chuyên tổng hợp các bài thiền chữa lành, bài thôi miên hồi quy, các
                            buổi chia sẻ của các Healer trong cộng cồng Healer.</p>
                    </div>

                </div>

            </div>
    <!-- ******************************JS Follow-following******************************  -->
    <script>
        const followBtn = document.querySelector('.head__button');
        let counter = 0;

        function changeFollowButton() {
            if (counter == 0) {
                followBtn.innerHTML = "FOLLOWING";
                counter++;
            } else {
                followBtn.innerHTML = "Follow";
                counter--;
            }
        }
    </script>
    

    <!-- ******************************JS show menu user******************************  -->

    <script>const contextMenu = document.getElementById("context-menu");
        const userBtn1 = document.querySelector(".playlist_option__user_btn");

        userBtn1.addEventListener("click", () => {
            contextMenu.classList.toggle("clicked");

            if (contextMenu.classList.contains("clicked")) {
                contextMenu.style.display = "block";
            } else {
                contextMenu.style.display = "none";
            }
        });</script>
    <script>

        const userBtn = document.querySelector('.playlist_option__user_btn');
        const userIcon = userBtn.querySelector('.playlist_option__user_icon');

        userBtn.addEventListener('click', function () {
            userIcon.classList.toggle('rotate');
        });


    </script>

     <!-- ******************************JS show menu btn(...)******************************  -->

     <script>const contextMenu_btn_3dot = document.getElementById("context-menu__list_btn_3dot");
        const userBtn_3dot = document.querySelector(".button_3dot"); 

        userBtn_3dot.addEventListener("click", () => {
            contextMenu_btn_3dot.classList.toggle("clicked");

            if (contextMenu_btn_3dot.classList.contains("clicked")) {
                contextMenu_btn_3dot.style.display = "block";
            } else {
                contextMenu_btn_3dot.style.display = "none";
            }
        });</script>
    <script>

        const userBtn_3dot_1 = document.querySelector('.button_3dot');
        


    </script>
 <!-- *************************JS của btn(share)  khi hover***********************-->
<script>
    const btnShare = document.querySelector('.btn_share_hover');
    const btnFollow = document.querySelector('.btn_follow_hover');
    const btnOpendesktop = document.querySelector('.btn_opendesktop_hover');
    const contextMenu_3 = document.querySelector('#context-menu-btn_3dot_2');

    if (btnShare) {
        btnShare.addEventListener('mouseenter', () => {
          contextMenu_3.style.display = 'block';
        });
        btnShare.addEventListener('mouseleave', () => {
          contextMenu_3.style.display = 'block';
        });
    } 
    if(btnFollow) {
        btnFollow.addEventListener('mouseenter', () => {
          contextMenu_3.style.display = 'none';
        });
        
    }
    if(btnOpendesktop) {
        btnOpendesktop.addEventListener('mouseenter', () => {
          contextMenu_3.style.display = 'none';
        });
        
    }
</script>
<!-- 
</body>

</html> -->