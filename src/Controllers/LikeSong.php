<?php
class LikeSong extends Controller
{
    private $songModel;

    function __construct()
    {
        $this->songModel = $this->model('LikeSong');
    }

    function show($id)
    {
        $arrSong = $this->songModel->getLikeSong($id);
        $likeForUser = $this->songModel;

        $this->view('Listener/index', [
            'listsong' => $arrSong,
            'Page' => 'SongList',
            'like' => $likeForUser,
            'type' => 'Liked Song'
        ]);
    }
}
