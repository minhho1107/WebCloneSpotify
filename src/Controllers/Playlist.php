<?php
class Playlist extends Controller
{
    private $playlistModel;
    private $userId;

    function __construct()
    {
        $this->playlistModel = $this->model('Playlist');

        if (isset($_SESSION['user'])) {
            $this->userId = $_SESSION['user'][0]['UserID'];
        } else {
            $this->userId = 1;
        }

    }

    // function show($id)
    // {
    //     $arrPlaylist = $this->playlistModel->getPlaylist($id);
    //     $likeForUser = $this->playlistModel;

    //     $this->view('Listener/index', [
    //         'listsong' => $arrPlaylist,
    //         'like' => $likeForUser,
    //         'Page' => 'SongList',
    //         'type' => 'Playlist'
    //     ]);
    // }

    function show($id)
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            // Request AJAX
            $arrPlaylist = $this->playlistModel->getPlaylist($id);
            $likeForUser = $this->playlistModel;

            $html = $this->view('pages/SongList', [
                'listsong' => $arrPlaylist,
                'like' => $likeForUser,
                'Page' => 'SongList',
                'type' => 'Playlist'
            ], true);
            echo json_encode(['html' => $html]);
        } else {
            // Request normal
            $arrPlaylist = $this->playlistModel->getPlaylist($id);
            $likeForUser = $this->playlistModel;

            $this->view('Listener/index', [
                'listsong' => $arrPlaylist,
                'like' => $likeForUser,
                'Page' => 'SongList',
                'type' => 'Playlist'
            ]);
        }
    }

    // function getLikeSong() {
    //     if (isset($_POST['userId'])) {
    //         $userId = $_POST['userId'];
    //         $getLikeSong = $this->playlistModel->getLike($userId);

    //         echo json_encode($getLikeSong);

    //     }        
    // }

    function like()
    {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $likeSong = $this->playlistModel->reactLike($this->userId, $songId, date('Y-m-d'));
        }
    }

    function unLike()
    {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $unLikeSong = $this->playlistModel->unLike($this->userId, $songId);
        }
    }

    function playSong()
    {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $playSong = $this->playlistModel->countOfSong($songId);
        }
    }
}
