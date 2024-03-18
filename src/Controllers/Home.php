<?php

class Home extends Controller
{
    private $SongModel;
    private $ArtistsModel;
    private $AlbumModel;
    private $PlaylistModel;
    private $PodcastModel;
    private $HistorySong;
    private $userID;

    public function __construct()
    {
        // session_start();
        $this->SongModel = $this->model('Song');
        $this->ArtistsModel = $this->model('Artist');
        $this->AlbumModel = $this->model('Album');
        $this->PlaylistModel = $this->model('Playlist');
        $this->PodcastModel = $this->model('Podcast');
        $this->HistorySong = $this->model('HistorySong');
        if (isset($_SESSION['user'])) {
            $this->userID = $_SESSION['user'][0]['UserID'];
        }
    }

    // public function index()
    // {
    //     $arrSong = $this->SongModel->getSongsLimit(0, 6);
    //     $arrArtist = $this->ArtistsModel->getArtistsLimit(0, 6);
    //     $arrAlbum = $this->AlbumModel->getAlbumsLimit(0, 6);
    //     $arrPlaylist = $this->PlaylistModel->getPlaylistsLimit(0, 6);
    //     $arrPodcast = $this->PodcastModel->getPodcastsLimit(0, 6);

    //     $song = $this->SongModel->getSongs();
    //     $artist = $this->ArtistsModel->getArtists();
    //     $album = $this->AlbumModel->getAlbums();
    //     $playlist = $this->PlaylistModel->getPlaylists();
    //     $podcast = $this->PodcastModel->getPodcast();

    //     $historySong = $this->HistorySong->getSong(5); /// 1 => userId
    //     $this->view('Listener/index', [

    //         'song' => $song,
    //         'artist' => $artist,
    //         'album' => $album,
    //         'playlist' => $playlist,
    //         'podcast' => $podcast,

    //         'arrSong' => $arrSong,
    //         'arrArtist' => $arrArtist,
    //         'arrAlbum' => $arrAlbum,
    //         'arrPlaylist' => $arrPlaylist,
    //         'arrPodcast' => $arrPodcast,
    //         'dataHistory'   => $historySong,
    //         'Page' => 'ContentHome'
    //     ]);
    // }

    function index()
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            // Request AJAX
            $arrSong = $this->SongModel->getSongsLimit(0, 6);
            $arrArtist = $this->ArtistsModel->getArtistsLimit(0, 6);
            $arrAlbum = $this->AlbumModel->getAlbumsLimit(0, 6);
            $arrPlaylist = $this->PlaylistModel->getPlaylistsLimit(0, 6);
            $arrPodcast = $this->PodcastModel->getPodcastsLimit(0, 6);

            $song = $this->SongModel->getSongs();
            $artist = $this->ArtistsModel->getArtists();
            $album = $this->AlbumModel->getAlbums();
            $playlist = $this->PlaylistModel->getPlaylists();
            $podcast = $this->PodcastModel->getPodcast();

            $historySong = $this->HistorySong->getSong($this->userID); /// 1 => userId
            $html = $this->view('pages/ContentHome', [

                'song' => $song,
                'artist' => $artist,
                'album' => $album,
                'playlist' => $playlist,
                'podcast' => $podcast,

                'arrSong' => $arrSong,
                'arrArtist' => $arrArtist,
                'arrAlbum' => $arrAlbum,
                'arrPlaylist' => $arrPlaylist,
                'arrPodcast' => $arrPodcast,
                'dataHistory'   => $historySong,
                'Page' => 'ContentHome'
            ], true);
            echo json_encode(['html' => $html]);
        } else {
            // Request normal
            $arrSong = $this->SongModel->getSongsLimit(0, 6);
            $arrArtist = $this->ArtistsModel->getArtistsLimit(0, 6);
            $arrAlbum = $this->AlbumModel->getAlbumsLimit(0, 6);
            $arrPlaylist = $this->PlaylistModel->getPlaylistsLimit(0, 6);
            $arrPodcast = $this->PodcastModel->getPodcastsLimit(0, 6);

            $song = $this->SongModel->getSongs();
            $artist = $this->ArtistsModel->getArtists();
            $album = $this->AlbumModel->getAlbums();
            $playlist = $this->PlaylistModel->getPlaylists();
            $podcast = $this->PodcastModel->getPodcast();

            $historySong = $this->HistorySong->getSong($this->userID); /// 1 => userId
            $this->view('Listener/index', [

                'song' => $song,
                'artist' => $artist,
                'album' => $album,
                'playlist' => $playlist,
                'podcast' => $podcast,

                'arrSong' => $arrSong,
                'arrArtist' => $arrArtist,
                'arrAlbum' => $arrAlbum,
                'arrPlaylist' => $arrPlaylist,
                'arrPodcast' => $arrPodcast,
                'dataHistory'   => $historySong,
                'Page' => 'ContentHome'
            ]);
        }
    }

    public function ShowAllSong()
    {
        $song = $this->SongModel->getSongs();

        $this->view('Listener/index', [
            'Page' => 'ShowAllSong',
            'song' => $song,
        ]);
    }

    public function ShowAllArtist()
    {
        $artist = $this->ArtistsModel->getArtists();
        $this->view('Listener/index', [
            'Page' => 'ShowAllArtist',
            'artist' => $artist,
        ]);
    }

    public function ShowAllAlbum()
    {
        $album = $this->AlbumModel->getAlbums();
        $this->view('Listener/index', [
            'Page' => 'ShowAllAlbum',
            'album' => $album,
        ]);
    }

    public function ShowAllPlaylist()
    {
        $playlist = $this->PlaylistModel->getPlaylists();
        $this->view('Listener/index', [
            'Page' => 'ShowAllPlaylist',
            'playlist' => $playlist,
        ]);
    }

    public function ShowAllPodcast()
    {
        $podcast = $this->PodcastModel->getPodcast();
        $this->view('Listener/index', [
            'Page' => 'ShowAllPodcast',
            'podcast' => $podcast,
        ]);
    }

    public function song($id)
    {
        $song = $this->SongModel->getSongById($id);

        $this->view('Listener/index', [
            'song' => $song,
            'Page' => 'SongList',
            'type' => 'Song'
        ]);
    }

    // Phần Search
    function searchSong()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $arrays = [];
            if (trim($name) != '') {
                // artist
                $artist = $this->ArtistsModel->search($name);
                $arrays['artist']  = $artist;
                // podcast
                $podcast = $this->PodcastModel->search($name);
                $arrays['podcast']  = $podcast;
                // playlist
                $playlist = $this->PlaylistModel->search($name);
                $arrays['playlist']  = $playlist;
                // album
                $album = $this->AlbumModel->search($name);
                $arrays['album']  = $album;
            } else {
                // artist
                $artist = $this->ArtistsModel->getAll();
                $arrays['artist']  = $artist;
                // podcast
                $podcast = $this->PodcastModel->getAll();
                $arrays['podcast']  = $podcast;
                // playlist
                $playlist = $this->PlaylistModel->getAll();
                $arrays['playlist']  = $playlist;
                // album
                $album = $this->AlbumModel->getAll();
                $arrays['album']  = $album;
            }
            $song = $this->SongModel->search($name);
            $arrays['song']  = $song;
            if ($arrays != null &&  count($arrays) > 0) {
                echo json_encode([
                    "status"    => 200,
                    "data"      => $arrays,
                ]);
            } else {
                echo json_encode([
                    "status"    => 203,
                ]);
            }
        } else {
            echo json_encode([
                "status"    => 401,
            ]);
        }
    }

    function album($id)
    {
        $albumartist = $this->ArtistsModel->getAlbum($id);
        $rowsId = [];
        foreach ($albumartist as $val) {
            $rowsId[] = $val['ArtistID'];
        }
        $songartist = $this->ArtistsModel->listIdSong($rowsId);
        $songId = [];
        foreach ($songartist as $val) {
            $songId[] = $val['SongID'];
        }
        $results = $this->SongModel->getList($songId);
        $this->view('Listener/index', [
            'results' => $results,
            'Page' => 'category',
        ]);
    }

    function artist($id)
    {
        $songartist = $this->ArtistsModel->listIdSong([$id]);
        $songId = [];
        foreach ($songartist as $val) {
            $songId[] = $val['SongID'];
        }
        $results = $this->SongModel->getList($songId);
        $this->view('Listener/index', [
            'results' => $results,
            'Page' => 'category',
        ]);
    }
    function playlist($id)
    {
        $songPlaylist = $this->PlaylistModel->listIdSong([$id]);
        $songId = [];
        foreach ($songPlaylist as $val) {
            $songId[] = $val['SongID'];
        }
        $results = $this->SongModel->getList($songId);
        $this->view('Listener/index', [
            'results' => $results,
            'Page' => 'category',
        ]);
    }

    // Fix KhangProPlayer
    public function showUserPlaylist($userID)
    {
        require_once './src/Models/Playlist.php';
        $playlistModel = new PlaylistModel();
        $playlistIDs = $playlistModel->getUserIDPlaylist($userID);
    
        if ($playlistIDs === null) {
            $userID = $this->userID;
            $this->PlaylistModel->CreatePlaylist();
            $playlistIDs = $this->PlaylistModel->getAllPlaylistIDs();
            $playlistID = end($playlistIDs);
            $playlistModel->createUserPlaylist($userID, $playlistID);
    
            $playlistIDs = $playlistModel->getUserIDPlaylist($userID); // Cập nhật lại danh sách playlistIDs sau khi tạo mới
        }
    
        $totalPlaylist = count($playlistIDs);
        $html = '';
    
        for ($i = 0; $i < $totalPlaylist; $i++) {
            $html .= '<div class="playlist-item">
                <a href="http://localhost/Spotify/Playlist/show/' . $playlistIDs[$i] . '">
                  <button>
                    <div class="containerNavListIcon">
                      <div>
                        <svg
                        style="background-color: black;"
                        role="img" height="24" width="24" aria-hidden="true" data-testid="playlist" class="Svg-sc-ytk21e-0 ldgdZj" viewBox="0 0 24 24" data-encore-id="icon">
                          <path d="M6 3h15v15.167a3.5 3.5 0 1 1-3.5-3.5H19V5H8v13.167a3.5 3.5 0 1 1-3.5-3.5H6V3zm0 13.667H4.5a1.5 1.5 0 1 0 1.5 1.5v-1.5zm13 0h-1.5a1.5 1.5 0 1 0 1.5 1.5v-1.5z"></path>
                        </svg>
                      </div>
                    </div>
                    <span>My playlist #' . ($i + 1) . '</span>
                  </button>
                </a>
                <button class="delButton"
                style="
                    color: #e9e9e9;
                    padding: 0 16px;
                    border-radius: 10px;
                    height: 20px;
                    border: 1px solid white;
                "
                >Del</button>
              </div>';
        }
    
        return $html;
    }
    
    public function showUserLikesong($userID)
    {
        require_once './src/Models/Playlist.php';
        $playlistModel = new PlaylistModel();
        $html = '';
        $html .= '<a href="http://localhost/Spotify/LikeSong/show/' . $userID . '"><button>
        <div class="containerNavListIcon iconLikeSongs">
            <div>
                <svg role="img" height="12" width="12" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 gQUQL"><path fill="white" d="M15.724 4.22A4.313 4.313 0 0 0 12.192.814a4.269 4.269 0 0 0-3.622 1.13.837.837 0 0 1-1.14 0 4.272 4.272 0 0 0-6.21 5.855l5.916 7.05a1.128 1.128 0 0 0 1.727 0l5.916-7.05a4.228 4.228 0 0 0 .945-3.577z"></path></svg>
            </div>
        </div>
        <span>Like Songs</span>
        </button></a>';



        return $html;
    }

    // Đang set cứng sau này đổi lại thì để biến là $userID

    public function createPlaylist()
    {
        $userID = $this->userID;
        $this->PlaylistModel->CreatePlaylist();
        $playlistIDs = $this->PlaylistModel->getAllPlaylistIDs();
        $playlistID = end($playlistIDs);
        // 
        $this->PlaylistModel->createUserPlaylist($userID, $playlistID);

        // if ($result) {
        //     echo 'Playlist created successfully!';
        // } else {
        //     echo 'Failed to create playlist!';
        // }
    }

    function ShowAllHistory()
    {
        $song = $this->HistorySong->showAll($this->userID); /// 1 => userId
        $this->view('Listener/index', [
            'Page' => 'ShowAllRecend',
            'song' => $song,
        ]);
    }
    // Clear All:
    function ClearAllHistory()
    {
        $this->HistorySong->clearAll($this->userID); /// 1 => userId
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    // Xóa User Playlist
    public function deletePlaylist()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['playlistID'])) {
            $userID = $this->userID;
            $playlistID = $_POST['playlistID'];
            $this->PlaylistModel->deleteUserPlaylist($userID, $playlistID);
        }
    }

    // Chưa xong chưa nhận được input 

     // chỉ còn hình ảnh
     
     public function updateNamePlaylist()
     {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['playlistID']) && isset($_POST['inputUpper']) && isset($_POST['inputLower'])  && isset($_FILES['fileInput'])) 
        {   
           
            // $ImagePlaylist = $_FILES['fileInput']; 
            $ImagePlaylist = file_get_contents($_FILES['fileInput']['tmp_name']);
            $playlistID = $_POST['playlistID'];
            $NamePlaylist = $_POST['inputUpper'];
            $Description = $_POST['inputLower'];
           

            $this->PlaylistModel->updateNamePlaylist($NamePlaylist, $playlistID);
            $this->PlaylistModel->updateDescriptionPlaylist($Description, $playlistID);
            $this->PlaylistModel->updateImagePlaylist($ImagePlaylist, $playlistID);
            
        }
      }


      // show ko link voi user chua like bai hat 
      public function showUserNoLikesong()
      {
          require_once './src/Models/Playlist.php';
          $playlistModel = new PlaylistModel();
          $html = '';
          $html .= '<button>
          <div class="containerNavListIcon iconLikeSongs">
              <div>
                  <svg role="img" height="12" width="12" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 gQUQL"><path fill="white" d="M15.724 4.22A4.313 4.313 0 0 0 12.192.814a4.269 4.269 0 0 0-3.622 1.13.837.837 0 0 1-1.14 0 4.272 4.272 0 0 0-6.21 5.855l5.916 7.05a1.128 1.128 0 0 0 1.727 0l5.916-7.05a4.228 4.228 0 0 0 .945-3.577z"></path></svg>
              </div>
          </div>
          <span>Like Songs</span>
          </button>';
  
  
  
          return $html;
      }
  
}
