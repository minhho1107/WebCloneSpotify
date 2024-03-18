<?php
class SeachListSong extends Controller
{
    private $playlistModel;

    function __construct()
    {
        $this->playlistModel = $this->model('Playlist');

    }
  
    function show() {
      $arrSongList = [];
      if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['searchTerm'])) {
        $searchTerm = $_POST['searchTerm'];
        $arrSongList = $this->playlistModel->searchSongs($searchTerm);
      } else {
        $arrSongList = $this->playlistModel->getSongList();
      }
      // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['songId']) && isset($_POST['lastValue'])) 
      // {
      //   $songID = $_POST['songId'];
      //   $playlistID = $_POST['lastValue'];
      //   $this->playlistModel->addSongToPlaylist($playlistID, $songID);
      // }
      if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['songId']) && isset($_POST['lastValue'])) {
        $songID = $_POST['songId'];
        $playlistID = $_POST['lastValue'];
    
        // Lấy danh sách SongID của playlist
        $playlistSongIDs = $this->playlistModel->getPlaylistSongIDs($playlistID);
    
        if (!in_array($songID, $playlistSongIDs)) {
            // Nếu songID không trùng lặp, gọi hàm addSongToPlaylist
            $this->playlistModel->addSongToPlaylist($playlistID, $songID);
        }
       
      
    }
      $this->view('Listener/index_Seach_Listsong', [
        'listfullsong' => $arrSongList,
        'Page' => 'seachListsong',
        'type' => 'Playlist'
      ]);
    }
  

}
