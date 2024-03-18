<?php
require_once "./src/core/Database.php";

class HistorySongModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }
    function add($data){
        $fields = array_keys($data);
        $fields_list = implode(",",$fields);
        $values = array_values($data);
        $qr = str_repeat("?,",count($fields) - 1);
        $sql = "INSERT INTO `historysong`(".$fields_list.") VALUES (${qr}?)";
        $stmt = $this->db->conn->prepare($sql);
        $stmt->bind_param("ss", $UserID, $SongID);
        $UserID =  $data['UserID'];
        $SongID = $data['SongID'];
        $results = false;
        if($stmt->execute()){
            $results = true;
        }
        return $results;
    }
    
    public function getIdSong($id, $UserID)
    {
        $sql = "SELECT SongID  FROM historysong where SongID  = $id and userId = $UserID";
        $result = $this->db->conn->query($sql);
        $data = null;
        while ($row = $result->fetch_assoc()) {
              $data = $row;
        }
        return $data;
    }
function getSong($id)
{
    $sql = "SELECT *
            FROM historysong
            INNER JOIN song ON song.SongID = historysong.SongID
            JOIN SongArtist ON Song.SongID = SongArtist.SongID
            JOIN Artist ON SongArtist.ArtistID = Artist.ArtistID
            WHERE userId = $id
            ORDER BY Song.SongID DESC
            LIMIT 0, 6";
    $result = $this->db->select($sql);
    return $result;
}

    
    
    function showAll($id)
    {
        $sql = "SELECT *
        FROM historysong
        INNER JOIN song ON song.SongID = historysong.SongID
        JOIN SongArtist ON Song.SongID = SongArtist.SongID
        JOIN Artist ON SongArtist.ArtistID = Artist.ArtistID
        WHERE userId = $id";
        $result = $this->db->select($sql);
        return $result;
    }

    //Clear All:
    function clearAll($id)
{
    $sql = "DELETE FROM historysong WHERE userId = $id";
    $result = mysqli_query($this->db->conn, $sql);
    return $result;
}

}