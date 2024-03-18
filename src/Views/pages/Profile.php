<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
 <link rel="stylesheet" href="<?php echo URLROOT ?>/css/Profile.css">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/css/Profilemenu.css">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/css/Global.css">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/css/Home.css">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/css/Profile-details.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
  <div id="overlay">
    <!-- Thêm nội dung form của bạn ở đây -->
  </div>
  
  
  <div class="wrapper">
    <div class="card-profile-wrapper">
      <div class="card-profile">
        <div class="user-image-container" data-testid="user-image" draggable="false">
          <div class="user-image-overlay" draggable="false">
            <div class="user-image-overlay-content">
              <svg role="img" height="24" width="24" aria-hidden="true" data-testid="user" viewBox="0 0 24 24" data-encore-id="icon" class="user-icon">
                <path d="M10.165 11.101a2.5 2.5 0 0 1-.67 3.766L5.5 17.173A2.998 2.998 0 0 0 4 19.771v.232h16.001v-.232a3 3 0 0 0-1.5-2.598l-3.995-2.306a2.5 2.5 0 0 1-.67-3.766l.521-.626.002-.002c.8-.955 1.303-1.987 1.375-3.19.041-.706-.088-1.433-.187-1.727a3.717 3.717 0 0 0-.768-1.334 3.767 3.767 0 0 0-5.557 0c-.34.37-.593.82-.768 1.334-.1.294-.228 1.021-.187 1.727.072 1.203.575 2.235 1.375 3.19l.002.002.521.626zm5.727.657-.52.624a.5.5 0 0 0 .134.753l3.995 2.306a5 5 0 0 1 2.5 4.33v2.232H2V19.77a5 5 0 0 1 2.5-4.33l3.995-2.306a.5.5 0 0 0 .134-.753l-.518-.622-.002-.002c-1-1.192-1.735-2.62-1.838-4.356-.056-.947.101-1.935.29-2.49A5.713 5.713 0 0 1 7.748 2.87a5.768 5.768 0 0 1 8.505 0 5.713 5.713 0 0 1 1.187 2.043c.189.554.346 1.542.29 2.489-.103 1.736-.838 3.163-1.837 4.355m-.001.001z
                "></path>
              </svg>
            </div>
          </div>
          <div class="edit-image-button-container">
            <div class="edit-image-button">
              <button data-testid="edit-image-button" class="choose-photo-btn" aria-haspopup="true" type="button">
                <div class="icon-container">
                  <svg role="img" height="48" width="48" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" class="choose-photo-icon">
                    <path d="M17.318 1.975a3.329 3.329 0 1 1 4.707 4.707L8.451 20.256c-.49.49-1.082.867-1.735 1.103L2.34 22.94a1 1 0 0 1-1.28-1.28l1.581-4.376a4.726 4.726 0 0 1 1.103-1.735L17.318 1.975zm3.293 1.414a1.329 1.329 0 0 0-1.88 0L5.159 16.963c-.283.283-.5.624-.636 1l-.857 2.372 2.371-.857a2.726 2.726 0 0 0 1.001-.636L20.611 5.268a1.329 1.329 0 0 0 0-1.879z"></path>
                  </svg>
                  <span class="choose-photo-text" data-encore-id="type">
                    Choose photo
                  </span>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="profile-info-wrapper">
      <div class="profile-info-container">
        <span data-encore-id="type" class="profile-heading">Profile</span>
        <span dir="auto" class="profile-name-container" draggable="false" data-testid="entityTitle">
          <button class="edit-details-btn" title="Edit details">
            <span class="edit-details-icon">
            <h1 dir="auto" data-encore-id="type" class="profile-name" style="margin: 0.08em 0px 0.12em; visibility: visible; width: 100%; font-size: 6rem;">
    <?php echo $data['username']; ?>
</h1>

            </span>
          </button>
        </span>
      <!-- hiển thị form -->
      <div id="myForm" style="display:none">
        <form action="" method="post">
          <div class="container">
            <div class="Profile-Title">
              <h2>Profile details</h2>
            </div>
              <div class="card-profile">
                <div class="user-image-container" data-testid="user-image" draggable="false">
                  <div class="user-image-overlay" draggable="false">
                    <div class="user-image-overlay-content">
                      <svg role="img" height="24" width="24" aria-hidden="true" data-testid="user" viewBox="0 0 24 24" data-encore-id="icon" class="user-icon">
                        <path d="M10.165 11.101a2.5 2.5 0 0 1-.67 3.766L5.5 17.173A2.998 2.998 0 0 0 4 19.771v.232h16.001v-.232a3 3 0 0 0-1.5-2.598l-3.995-2.306a2.5 2.5 0 0 1-.67-3.766l.521-.626.002-.002c.8-.955 1.303-1.987 1.375-3.19.041-.706-.088-1.433-.187-1.727a3.717 3.717 0 0 0-.768-1.334 3.767 3.767 0 0 0-5.557 0c-.34.37-.593.82-.768 1.334-.1.294-.228 1.021-.187 1.727.072 1.203.575 2.235 1.375 3.19l.002.002.521.626zm5.727.657-.52.624a.5.5 0 0 0 .134.753l3.995 2.306a5 5 0 0 1 2.5 4.33v2.232H2V19.77a5 5 0 0 1 2.5-4.33l3.995-2.306a.5.5 0 0 0 .134-.753l-.518-.622-.002-.002c-1-1.192-1.735-2.62-1.838-4.356-.056-.947.101-1.935.29-2.49A5.713 5.713 0 0 1 7.748 2.87a5.768 5.768 0 0 1 8.505 0 5.713 5.713 0 0 1 1.187 2.043c.189.554.346 1.542.29 2.489-.103 1.736-.838 3.163-1.837 4.355m-.001.001z
                        "></path>
                      </svg>
                    </div>
                  </div>
                  <div class="edit-image-button-container">
                  
                  
                  <div class="edit-image-button" >   
                      <!-- remove photo -->
                  <div class="remove-image-button">
                    <button >Remove photo</button>
                  </div>                
                    <button data-testid="edit-image-button" class="choose-photo-btn" aria-haspopup="true" type="button">
                      <div class="icon-container">
                        <svg role="img" height="48" width="48" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" class="choose-photo-icon">
                          <path d="M17.318 1.975a3.329 3.329 0 1 1 4.707 4.707L8.451 20.256c-.49.49-1.082.867-1.735 1.103L2.34 22.94a1 1 0 0 1-1.28-1.28l1.581-4.376a4.726 4.726 0 0 1 1.103-1.735L17.318 1.975zm3.293 1.414a1.329 1.329 0 0 0-1.88 0L5.159 16.963c-.283.283-.5.624-.636 1l-.857 2.372 2.371-.857a2.726 2.726 0 0 0 1.001-.636L20.611 5.268a1.329 1.329 0 0 0 0-1.879z"></path>
                        </svg>
                        <span class="choose-photo-text" data-encore-id="type">
                          Choose photo
                        </span>
                      </div>
                    </button>
                  </div>
                </div>
                </div>
              </div>
           
            <div class="name-details">
                <input type="text" name = "newusername1" value="<?php echo $data['username']; ?>">
                <button type="submit" class="Save-profile" onclick="reloadPage()">Save</button>
            </div>

            <div class="footer">
              <p>By proceeding, you agree to give Spotify access to the image you choose to upload. Please make sure you have the right to upload the image.</p>
            </div>
          </div>
          <button onclick="closeForm()" class="closeF">X</button>
        </form>
      </div>
      
        <!-- hiển thị form     -->
    
        <div class="public-playlists-container">
          <span class="public-playlists-text" data-encore-id="type">4 Public Playlists</span>
        </div>
      </div>
    </div>
 
    
    <!-- phần dialog -->
    <div class="dialog-wrapper">
      <div class="scrollbar-wrapper">
        <div class="dialog-content" style="padding: 0px; height: auto; width: 100%;">
          <div class="dialog-header content-spacing">
            <div class="action-bar" data-testid="action-bar-row">
              <button type="button" aria-haspopup="menu" aria-label="More options for tran dat" class="action-button" data-testid="more-button">
                  <svg role="img" height="32" width="32" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" class="svg-icon">
                      <path style="fill:#A5A5A5;" d="M4.5 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm15 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm-7.5 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                    </svg>
              </button>
              <div class="menu-wrapper">
                <ul class="menu">
                  <li><a href="#" onclick="showForm()">Edit profile</a></li>
                  <li><a href="#">Copy spotify URL</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
     <!-- phần h2 tiêu đề -->
     <div class="top-artists-section">
      <div class="top-artists-wrapper">
        <h2 data-encore-id="type" class="top-artists-title type-element">Top artists this month</h2>
        <p data-encore-id="type" class="top-artists-subtitle type-element">Only visible to you</p>
      </div>    
    </div>    
      
    <!-- phần card -->
        <div class="card-artists">
            
        <?php 
            $arrayArt1 = array('Relax and indulge with beautiful piano pieces');
            include_once __DIR__ . "/../components/Card.php";
            echo Card('', 'Peaceful Piano', $arrayArt1, 'https://www.pianoramix.com/assets/media/298-peaceful-piano-spotify-300x300r.jpeg',1);
    
        ?>
        </div>
           <!-- phần h2 Top tracks-->
      <div class="top-tracks-section">
        <div class="top-tracks-wrapper">
          <a href="">
            <h2 data-encore-id="type" class="top-tracks-title type-element">Top artists this month</h2>
          </a>
          <p data-encore-id="type" class="top-tracks-subtitle type-element">Only visible to you</p>
        </div>    
      </div> 
      <!-- Public Playlists -->
      <div data-testid="grid-container" class="grid-container" style="--column-width:185px; --column-count:6; --grid-gap:24px; --min-container-width:394px;">
        <div class="grid-item">
          <div draggable="true" class="draggable-item">
            <?php 
            $arrayArt2 = array('Relax and indulge with beautiful piano pieces');
            include_once __DIR__ . "/../components/Card.php";
            echo Card('', 'Peaceful Piano', $arrayArt2, 'https://mosaic.scdn.co/300/ab67616d00001e024f4ec2c2a865569bd4a067a4ab67616d00001e025cde862db0ec9bb1e1566dd7ab67616d00001e028b302a279cfab9f1a28d2d35ab67656300005f1f69e2e8afc7d70c589ac5ef2b',2);
            $arrayArt3 = array('Relax and indulge with beautiful piano pieces');
            include_once __DIR__ . "/../components/Card.php";
            echo Card('', 'Peaceful Piano', $arrayArt3, 'https://tse2.mm.bing.net/th?id=OIP.4Sutm40ZX409SuhKlsxKMQHaHa&pid=Api&P=0',3);
            $arrayArt4 = array('Relax and indulge with beautiful piano pieces');
            include_once __DIR__ . "/../components/Card.php";
            echo Card('', 'Peaceful Piano', $arrayArt4, 'https://tse2.mm.bing.net/th?id=OIP.4Sutm40ZX409SuhKlsxKMQHaHa&pid=Api&P=0',4);  
            ?>
          </div>
        </div>
      </div>   
    </div>
  </div>
  <script src="<?php echo URLROOT ?>/js/Profile.js"></script>
  <!-- <script src="../../js/Profile-details.js"></script> -->
</body>
</html>
