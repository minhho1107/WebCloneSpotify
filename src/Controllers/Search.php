<?php

class Search extends Controller
{

    private $Category;
    function __construct()
    {
        $this->Category = $this->model('Category');
    }

    // public function index()
    // {
    //     $arrCate = $this->Category->getCate();
    //     $this->view('Listener/IndexSearch', [
    //         'Page'  => 'Search',
    //         'data'  => $arrCate
    //     ]);
    // }

    public function index()
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            // Request AJAX
            $arrCate = $this->Category->getCate();
            $html = $this->view('pages/Search', [
                'Page'  => 'Search',
                'data'  => $arrCate
            ], true);
            echo json_encode(['html' => $html]);
        } else {
            // Request normal
            $arrCate = $this->Category->getCate();
            $this->view('Listener/IndexSearch', [
                'Page'  => 'Search',
                'data'  => $arrCate
            ]);
        }
    }
}
