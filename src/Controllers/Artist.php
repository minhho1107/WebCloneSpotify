<?php
class Artist extends Controller
{
    private $artistModel;

    function __construct()
    {
        $this->artistModel = $this->model('Artist');
    }

    // function show($id)
    // {
    //     $arrArtist = $this->artistModel->getArtist($id);
    //     $likeForUser = $this->artistModel;

    //     $this->view('Listener/index', [
    //         'listsong' => $arrArtist,
    //         'Page' => 'SongList',
    //         'like' => $likeForUser,
    //         'type' => 'Artist'
    //     ]);
    // }

    function show($id)
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            // Request AJAX
            $arrArtist = $this->artistModel->getArtist($id);
            $likeForUser = $this->artistModel;

            $html = $this->view('pages/SongList', [
                'listsong' => $arrArtist,
                'Page' => 'SongList',
                'like' => $likeForUser,
                'type' => 'Artist'
            ], true);
            echo json_encode(['html' => $html]);
        } else {
            // Request normal
            $arrArtist = $this->artistModel->getArtist($id);
            $likeForUser = $this->artistModel;

            $this->view('Listener/index', [
                'listsong' => $arrArtist,
                'Page' => 'SongList',
                'like' => $likeForUser,
                'type' => 'Artist'
            ]);
        }
    }
}
