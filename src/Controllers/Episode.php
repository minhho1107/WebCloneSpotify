<?php
class Episode extends Controller
{
    private $episodeModel;
    function __construct()
    {
        $this->episodeModel = $this->model('Episode');
    }

    // function show($id)
    // {
    //     $arrEpisode = $this->episodeModel->getEpisode($id);

    //     $this->view('Listener/index', [
    //         'listsong' => $arrEpisode,
    //         'Page' => 'DetailPodcast',
    //         'type' => 'Podcast',
    //     ]);
    // }

    function show($id)
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            // Request AJAX
            $arrEpisode = $this->episodeModel->getEpisode($id);

            $html = $this->view('pages/DetailPodcast', [
                'listsong' => $arrEpisode,
                'Page' => 'DetailPodcast',
                'type' => 'Podcast',
            ], true);
            echo json_encode(['html' => $html]);
        } else {
            // Request normal
            $arrEpisode = $this->episodeModel->getEpisode($id);

            $this->view('Listener/index', [
                'listsong' => $arrEpisode,
                'Page' => 'DetailPodcast',
                'type' => 'Podcast',
            ]);
        }
    }
}
