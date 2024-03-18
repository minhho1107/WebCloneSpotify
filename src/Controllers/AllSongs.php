<?php
class AllSongs extends Controller
{
    private $SongModel;

    public function __construct()
    {
        $this->SongModel = $this->model('Song');
    }

    // public function index()
    // {
    //     $arrSong = $this->SongModel->getSongs();
    //     $song = $this->SongModel->getSongs();

    //     $this->view('Listener/AllSongs', [
    //         'song' => $song,
    //         'Page' => 'ContentHome',
    //         'arrSong' => $arrSong,
    //     ]);
    // }

    public function index()
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            // Request AJAX
            $arrSong = $this->SongModel->getSongs();
            $song = $this->SongModel->getSongs();

            $html = $this->view('pages/ContentHome', [
                'song' => $song,
                'Page' => 'ContentHome',
                'arrSong' => $arrSong,
            ], true);
            echo json_encode(['html' => $html]);
        } else {
            // Request normal
            $arrSong = $this->SongModel->getSongs();
            $song = $this->SongModel->getSongs();

            $this->view('Listener/AllSongs', [
                'song' => $song,
                'Page' => 'ContentHome',
                'arrSong' => $arrSong,
            ]);
        }
    }
}
