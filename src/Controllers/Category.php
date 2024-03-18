<?php
class Category extends Controller
{
    private $Category;
    private $songModel;

    function __construct()
    {
        $this->Category = $this->model('Category');
        $this->songModel = $this->model('Song');
    }

    // function index($id)
    // {
    //     $arrCate = $this->Category->listSongId($id);
    //     $rowsId = [];
    //     foreach($arrCate as $val){
    //         $rowsId[] = $val['SongID'];
    //     }
    //     $results = $this->songModel->getList($rowsId);

    //     $this->view('Listener/index', [
    //         'Page'      => 'category',
    //         'results'   => $results
    //     ]);
    // }

    function index($id)
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            // Request AJAX
            $arrCate = $this->Category->listSongId($id);
            $rowsId = [];
            foreach ($arrCate as $val) {
                $rowsId[] = $val['SongID'];
            }
            $results = $this->songModel->getList($rowsId);

            $html = $this->view('pages/category', [
                'Page'      => 'category',
                'results'   => $results
            ], true);
            echo json_encode(['html' => $html]);
        } else {
            // Request normal
            $arrCate = $this->Category->listSongId($id);
            $rowsId = [];
            foreach ($arrCate as $val) {
                $rowsId[] = $val['SongID'];
            }
            $results = $this->songModel->getList($rowsId);

            $this->view('Listener/index', [
                'Page'      => 'category',
                'results'   => $results
            ]);
        }
    }
}
