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

<body> -->
   
    

     <!-- ******************************       Phần Menu Left  *****************************************-->
        

      <!-- ******************************       Phần Body chứa nội dung của spotify  *****************************************-->


        <div class="playlist_container">

              <!-- ******************************       Phần Option của spotify  *****************************************-->
          

                    <!-- ******************************       Phần option_menu user của spotify  *****************************************-->
             <div id="context-menu">
               
                    <ul class="context-menu__list">
                        <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Account</span><svg role="img" height="16" width="16"
                            aria-hidden="true" aria-label="External link" viewBox="0 0 16 16"
                            data-encore-id="icon" class="">
                            <path
                                d="M1 2.75A.75.75 0 0 1 1.75 2H7v1.5H2.5v11h10.219V9h1.5v6.25a.75.75 0 0 1-.75.75H1.75a.75.75 0 0 1-.75-.75V2.75z">
                            </path>
                            <path
                                d="M15 1v4.993a.75.75 0 1 1-1.5 0V3.56L8.78 8.28a.75.75 0 0 1-1.06-1.06l4.72-4.72h-2.433a.75.75 0 0 1 0-1.5H15z">
                            </path>
                        </svg></button></li>
                        <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Profile</span>
                            </button></li>
                        <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Upgrade to Premium</span><svg role="img" height="16" width="16"
                            aria-hidden="true" aria-label="External link" viewBox="0 0 16 16"
                            data-encore-id="icon" class="">
                            <path
                                d="M1 2.75A.75.75 0 0 1 1.75 2H7v1.5H2.5v11h10.219V9h1.5v6.25a.75.75 0 0 1-.75.75H1.75a.75.75 0 0 1-.75-.75V2.75z">
                            </path>
                            <path
                                d="M15 1v4.993a.75.75 0 1 1-1.5 0V3.56L8.78 8.28a.75.75 0 0 1-1.06-1.06l4.72-4.72h-2.433a.75.75 0 0 1 0-1.5H15z">
                            </path>
                        </svg></button></li>
                        <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Support</span><svg role="img" height="16" width="16"
                            aria-hidden="true" aria-label="External link" viewBox="0 0 16 16"
                            data-encore-id="icon" class="">
                            <path
                                d="M1 2.75A.75.75 0 0 1 1.75 2H7v1.5H2.5v11h10.219V9h1.5v6.25a.75.75 0 0 1-.75.75H1.75a.75.75 0 0 1-.75-.75V2.75z">
                            </path>
                            <path
                                d="M15 1v4.993a.75.75 0 1 1-1.5 0V3.56L8.78 8.28a.75.75 0 0 1-1.06-1.06l4.72-4.72h-2.433a.75.75 0 0 1 0-1.5H15z">
                            </path>
                        </svg></button></li>
                        <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Download</span><svg role="img" height="16" width="16"
                            aria-hidden="true" aria-label="External link" viewBox="0 0 16 16"
                            data-encore-id="icon" class="">
                            <path
                                d="M1 2.75A.75.75 0 0 1 1.75 2H7v1.5H2.5v11h10.219V9h1.5v6.25a.75.75 0 0 1-.75.75H1.75a.75.75 0 0 1-.75-.75V2.75z">
                            </path>
                            <path
                                d="M15 1v4.993a.75.75 0 1 1-1.5 0V3.56L8.78 8.28a.75.75 0 0 1-1.06-1.06l4.72-4.72h-2.433a.75.75 0 0 1 0-1.5H15z">
                            </path>
                        </svg></button></li>
                        <li class="context-menu__item"><button class="context-menu__item_btn"><span class="context-menu__item_btn__name">Settings</span>
                            </button></li>
                
                       
                        <li class="context-menu__item btn_final"><button
                                data-testid="user-widget-dropdown-logout" class="context-menu__item_btn" role="menuitem"
                                tabindex="-1"><span dir="auto"
                                    class="context-menu__item_btn__name"
                                    data-encore-id="type">Log out</span></button></li>
                    </ul>
              
            </div> 
               <!-- ******************************       Phần content của spotify  *****************************************-->
               <div class="playlist_content">
                <svg role="img" height="24" width="24" aria-hidden="true" data-testid="playlist" viewBox="0 0 24 24"
                    data-encore-id="icon" class="playlist_content__icon">
                    <path d="m13.363 10.474-.521.625a2.499 2.499 0 0 0 .67 3.766l.285.164a5.998 5.998 0 0 1 1.288-1.565l-.573-.33a.5.5 0 0 1-.134-.754l.52-.624a7.372 7.372 0 0 0 1.837-4.355 7.221 7.221 0 0 0-.29-2.489 5.644 5.644 0 0 0-3.116-3.424A5.771 5.771 0 0 0 6.753 2.87a5.7 5.7 0 0 0-1.19 2.047 7.22 7.22 0 0 0-.29 2.49 7.373 7.373 0 0 0 1.838 4.355l.518.622a.5.5 0 0 1-.134.753L3.5 15.444a5 5 0 0 0-2.5 4.33v2.231h13.54a5.981 5.981 0 0 1-1.19-2H3v-.23a3 3 0 0 1 1.5-2.6l3.995-2.308a2.5 2.5 0 0 0 .67-3.766l-.521-.625a5.146 5.146 0 0 1-1.188-4.918 3.71 3.71 0 0 1 .769-1.334 3.769 3.769 0 0 1 5.556 0c.346.386.608.84.768 1.334.157.562.22 1.146.187 1.728a5.379 5.379 0 0 1-1.373 3.188zm7.641-1.173a1 1 0 0 0-1 1v4.666h-1a3 3 0 1 0 3 3v-7.666a.999.999 0 0 0-1.003-1h.003zm-1 8.666a1 1 0 1 1-1-1h1v1z"></path>
                </svg>
                <h1 class="playlist_content__title">Create your first artist</h1>
                <span class="playlist_content_intro_text">Follow artists you like by tapping the follow button.</span>
                <span class="playlist_content__button">Find artists</span>
            </div>
        </div>
        </div>

  


<!-- ******************************       Phần Play Music  *****************************************-->

   

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

<!-- 
</body>

</html> -->