<?php 

require_once './src/core/Database.php';

class EpisodeModel{

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Get All Songs
    public function getEpisodes($podcast_id)
    {
        $sql = "SELECT * FROM episode WHERE PodcastID = $podcast_id";
        $result = mysqli_query($this->db->conn, $sql);
        $arrEpisode = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $arrEpisode[] = $row;
        }
        return $arrEpisode;
    }
    
    
    function getEpisode($id)
    {
        $sql = "SELECT * FROM Episode WHERE EpisodeID = $id";
        $result = $this->db->select($sql);
        return $result;
    }
    
}
