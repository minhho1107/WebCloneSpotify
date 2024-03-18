<?php
class Podcast extends Controller
{
    private $podcastModel;
    private $episodeModel;
    function __construct()
    {
        $this->podcastModel = $this->model('Podcast');
        $this->episodeModel = $this->model('Episode');
    }

    // function show($id)
    // {
    //     $arrPodcast = $this->podcastModel->getPodcasts($id);
    //     $arrEpisode = $this->episodeModel->getEpisodes($id);

    //     $this->view('Listener/index', [
    //         'listsong' => $arrPodcast,
    //         'listsongepisode' => $arrEpisode,
    //         'Page' => 'DetailPodcast',
    //         'type' => 'Podcast',
    //     ]);
    // }

    function show($id)
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            // Request AJAX
            $arrPodcast = $this->podcastModel->getPodcasts($id);
            $arrEpisode = $this->episodeModel->getEpisodes($id);

            $html = $this->view('pages/DetailPodcast', [
                'listsong' => $arrPodcast,
                'listsongepisode' => $arrEpisode,
                'Page' => 'DetailPodcast',
                'type' => 'Podcast',
            ], true);
            echo json_encode(['html' => $html]);
        } else {
            // Request normal
            $arrPodcast = $this->podcastModel->getPodcasts($id);
            $arrEpisode = $this->episodeModel->getEpisodes($id);

            $this->view('Listener/index', [
                'listsong' => $arrPodcast,
                'listsongepisode' => $arrEpisode,
                'Page' => 'DetailPodcast',
                'type' => 'Podcast',
            ]);
        }
    }
}
