<?php
class playlistuser extends Controller
{
    private $playlistModel;

    function __construct()
    {
        $this->playlistModel = $this->model('Playlist');

    }
  
    function index() {
      $this->view('Listener/index_Seach_Listsong', [
        'Page' => 'Playlistuser',
        'type' => 'Playlist'
      ]);
    }
  

}
