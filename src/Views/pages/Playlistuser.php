
<?php include_once "./src/Views/Listener/Lyrics.php" ?> 

<div id="containerSong" class="container-fluid p-0 lead playlist-custom">
    <div class="sticky-top bg-custom">
        <div class="p-4">
            <button type="button" class="btn rounded-pill me-4 p-3 shadow" style="background-color: rgb(31, 183, 67)">
                <img width="28px" height="28px" onclick="PlayingMusic()" id="playingLargeIcon" src="<?php echo URLROOT ?>/assets/icons/play_small.svg" >
            </button>
               
            <!-- // Like Song  -->

            <button type="button" class="bg-transparent border-0 me-4">
                <span data-bs-toggle="tooltip" data-bs-placement="top" title="Save to Your Library">
                    <svg  role="img" height="32" width="32" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" fill="white">
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

        <div class="px-5 py-2">
            <div class="row g2 pb-2 border-bottom">
                <div class="col-sm-1">#</div>
                <div class="col-sm-4">Title</div>
                <div class="col-sm-3">Album</div>
                <div class="col-sm-2">Date added</div>
                <div class="col-sm-2 d-flex justify-content-center">
                    <svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" fill="white">
                        <path d="M8 1.5a6.5 6.5 0 1 0 0 13 6.5 6.5 0 0 0 0-13zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z">
                        </path>
                        <path d="M8 3.25a.75.75 0 0 1 .75.75v3.25H11a.75.75 0 0 1 0 1.5H7.25V4A.75.75 0 0 1 8 3.25z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    
    <div class="px-5 py-2 list">

    </div>

   
<!-- // Chưa xong  -->
</div>
<div></div>
<div></div>
<div></div>

<div class="container_seachplaylist">
<h1 style="
    margin-top: 20px;
    margin-right: 30px;
    ">Recommended</h1>
<form id="searchForm">
<input type="text" id="searchTermValue" name="searchTerm"  style="
    margin-top: 10px;
    margin-right: 10px;
    margin-left: 30px;
    padding: 4px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 300px;
">
  <button type="button" id="btn_seach"
  style="
    padding: 4px 8px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  "
  
  
  >Search</button>
    </form>   
    </div>

    <div id="song-list" style="height:200px;width: 100%;height: 100px;"></div>
</div>

