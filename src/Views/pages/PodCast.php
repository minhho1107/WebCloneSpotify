<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <link rel="stylesheet" href="../../css/style_podscast.css">
   
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
        <path d="M12 3a9 9 0 0 0-7.046 14.6L3.42 18.886A10.954 10.954 0 0 1 1 12C1 5.925 5.925 1 12 1s11 4.925 11 11a10.96 10.96 0 0 1-2.421 6.886L19.046 17.6A9 9 0 0 0 12 3z"></path>
        <path d="M12 7a4 4 0 0 0-4 4v3a4.002 4.002 0 0 0 3 3.874v1.965l-2.715 2.278a.5.5 0 0 0 .322.883h6.786a.5.5 0 0 0 .322-.883L13 19.839v-1.965c1.725-.444 3-2.01 3-3.874v-3a4 4 0 0 0-4-4zm2 7a2 2 0 0 1-4 0v-3a2 2 0 1 1 4 0v3z"></path>
    </svg>
    <h1 class="playlist_content__title">Create your first podcast</h1>
    <span class="playlist_content_intro_text">Follow podcasts you like by tapping the follow button.</span>
    <span class="playlist_content__button">Find podcasts</span>


     <div class="propose_ambum">
        <div class="Title_amblu">
            <a class="Title_amblu__TopAmbum" href="http://localhost/Spotify/topAlbum">Top podcasts</a>
            <a class="Title_amblu__ShowAll" href="http://localhost/Spotify/topAlbum">Show all</a>
        </div>

          <!-- ******************************       1 Hàng item của spotify  *****************************************-->
        <div class="Trending_abum">

       
          <!-- ******************************       1 Item của spotify  *****************************************-->
      <a href="http://localhost/Spotify/Podcastcomponent" class="link_btn_img"><div class="CardLibrary_container">
            <div class="CardLibrary_img">
                <img src="https://i.scdn.co/image/ab67656300005f1fce11c81cfc4b6e1c258f9987" alt="">
            </div>
                
             <div class="CardLibrary_content">
                <h1 class="CardLibrary_title" style="margin-left: 0;margin-top: 0;">MEDI WITH EHO</h1>
                <span class="CardLibrary_description">Eros Healing Organization</span>
             </div>
        </div></a> 

        <a href="./PostCard_component.html" class="link_btn_img"><div class="CardLibrary_container">
            <div class="CardLibrary_img">
                <img src="https://i.scdn.co/image/ab67656300005f1fce11c81cfc4b6e1c258f9987" alt="">
            </div>
                
             <div class="CardLibrary_content">
                <h1 class="CardLibrary_title">MEDI WITH EHO</h1>
                <span class="CardLibrary_description">Eros Healing Organization</span>
             </div>
        </div></a> 

        <a href="./PostCard_component.html" class="link_btn_img"><div class="CardLibrary_container">
            <div class="CardLibrary_img">
                <img src="https://i.scdn.co/image/ab67656300005f1fce11c81cfc4b6e1c258f9987" alt="">
            </div>
                
             <div class="CardLibrary_content">
                <h1 class="CardLibrary_title">MEDI WITH EHO</h1>
                <span class="CardLibrary_description">Eros Healing Organization</span>
             </div>
        </div></a> 
        <a href="./PostCard_component.html" class="link_btn_img"><div class="CardLibrary_container">
            <div class="CardLibrary_img">
                <img src="https://i.scdn.co/image/ab67656300005f1fce11c81cfc4b6e1c258f9987" alt="">
            </div>
                
             <div class="CardLibrary_content">
                <h1 class="CardLibrary_title">MEDI WITH EHO</h1>
                <span class="CardLibrary_description">Eros Healing Organization</span>
             </div>
        </div></a> 
        <a href="./PostCard_component.html" class="link_btn_img"><div class="CardLibrary_container">
            <div class="CardLibrary_img">
                <img src="https://i.scdn.co/image/ab67656300005f1fce11c81cfc4b6e1c258f9987" alt="">
            </div>
                
             <div class="CardLibrary_content">
                <h1 class="CardLibrary_title">MEDI WITH EHO</h1>
                <span class="CardLibrary_description">Eros Healing Organization</span>
             </div>
        </div></a> 
        <a href="./PostCard_component.html" class="link_btn_img"><div class="CardLibrary_container">
            <div class="CardLibrary_img">
                <img src="https://i.scdn.co/image/ab67656300005f1fce11c81cfc4b6e1c258f9987" alt="">
            </div>
                
             <div class="CardLibrary_content">
                <h1 class="CardLibrary_title">MEDI WITH EHO</h1>
                <span class="CardLibrary_description">Eros Healing Organization</span>
             </div>
        </div></a> 

      
        </div>
       
       
     </div>



      
        </div>
       
             
     </div>



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