<?php
class Song extends Controller
{
    private $songModel;
    private $HistorySong;
    private $albumModel;
    private $userID;

    function __construct()
    {
        $this->songModel = $this->model('Song');
        $this->HistorySong = $this->model('HistorySong');
        if (isset($_SESSION['user'])) {
            $this->userID = $_SESSION['user'][0]['UserID'];
        } else {
            $this->userID = 1;
        }
    }

    // function show($id)
    // {
    //     $arrSong = $this->songModel->getSong($id);
    //     $likeForUser = $this->songModel;

    //     $this->view('Listener/index', [
    //         'listsong' => $arrSong,
    //         'Page' => 'SongList',
    //         'like' => $likeForUser,
    //         'type' => 'Song'
    //     ]);
    // }

    function show($id)
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            // Request AJAX
            $arrSong = $this->songModel->getSong($id);
            $likeForUser = $this->songModel;

            $html = $this->view('pages/SongList', [
                'listsong' => $arrSong,
                'Page' => 'SongList',
                'like' => $likeForUser,
                'type' => 'Song'
            ], true);
            echo json_encode(['html' => $html]);
        } else {
            // Request normal
            $arrSong = $this->songModel->getSong($id);
            $likeForUser = $this->songModel;

            $this->view('Listener/index', [
                'listsong' => $arrSong,
                'Page' => 'SongList',
                'like' => $likeForUser,
                'type' => 'Song'
            ]);
        }
    }

    function like()
    {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $likeSong = $this->albumModel->reactLike(2, $songId, date('Y-m-d'));
        }
    }

    function unLike()
    {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $unLikeSong = $this->albumModel->unLike(2, $songId);
        }
    }

    function playSong()
    {
        if (isset($_POST['songId'])) {
            $songId = $_POST['songId'];
            $playSong = $this->albumModel->countOfSong($songId);
        }
    }

    function songHistory()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $artist = $_POST['artist'];
            $_SESSION['namesong'] = $name;
            $_SESSION['artist'] = $artist;

            $arrSong = $this->songModel->getIdSong($name);
            $array = [
                'UserID'    => $this->userID,
                'SongID'    => $arrSong['SongID'],
            ];
            $data = $this->songModel->getIdSong($arrSong['SongID'], $this->userID); // 1 => userId
            if ($data == NULL) {
                $results = $this->HistorySong->add($array);
            }
        }
    }
}
