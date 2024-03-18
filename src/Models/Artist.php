<?php
require_once "./src/core/Database.php";

class ArtistModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    // Get All Songs
    public function getArtists()
    {
        $sql = "SELECT * FROM artist";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }

    function getArtist($id)
    {
        $sql = "SELECT * FROM Song, Artist, Album, SongArtist WHERE (Artist.ArtistID = $id) && (Song.SongID = SongArtist.SongID && SongArtist.ArtistID = Artist.ArtistID)  && (Song.AlbumID = Album.AlbumID)";
        $result = $this->db->select($sql);
        return $result;
    }

    public function getLike($userId)    
    {
        $sql = "SELECT * from likesong WHERE likesong.UserID = '$userId'";
        $result = $this->db->select($sql);
        return $result;
    }

    // CRUD

    public function create(array $data)
    {
        $ArtistName = $data['ArtistName'];
        $ArtistDescription = $data['ArtistDescription'];
        $ArtistDob = $data['ArtistDob'];
        $ArtistImage = $data['ArtistImage'];

        $sql = "INSERT INTO artist (ArtistName, ArtistDescription, ArtistDob,ArtistImage) 
                VALUES ('$ArtistName', '$ArtistDescription', '$ArtistDob','$ArtistImage')";
        $result = $this->db->execute($sql);
        return $result;
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM artist WHERE ArtistID = $id";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }


    public function update(int $id, array $data)
    {
        $ArtistName = $data['ArtistName'];
        $ArtistDescription = $data['ArtistDescription'];
        $ArtistDob = $data['ArtistDob'];
        $ArtistImage = $data['ArtistImage'];
        if ($data['ArtistImage'] != 'None'){
            $sql = "UPDATE `artist` SET `ArtistName`='$ArtistName',`ArtistDescription`='$ArtistDescription',`ArtistDob`='$ArtistDob',`ArtistImage`='$ArtistImage' WHERE ArtistID=$id";
        } else {
            $sql = "UPDATE `artist` SET `ArtistName`='$ArtistName',`ArtistDescription`='$ArtistDescription',`ArtistDob`='$ArtistDob' WHERE ArtistID=$id";
        }

        $result = false;
        if (mysqli_query($this->db->conn, $sql)) {
            $result = true;
        }
        return json_encode($result);
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM artist WHERE ArtistID='$id'";
        $result = $this->db->execute($sql);
        return $result;
    }
    // Phân trang
    public function getArtistsLimit($offsetArtist, $limitArtist)
    {
        $sql = "SELECT * FROM artist ORDER BY ArtistID DESC LIMIT $offsetArtist, $limitArtist";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }

    
    // getCount()
    public function getCount()
    {
        $sql = "SELECT COUNT(*) AS total FROM artist";
        $result = $this->db->select($sql);
        return $result[0]['total'];
    }
    public function search($name)
    {
        $sql = "SELECT * FROM artist where ArtistName LIKE '%".$name."%' ";
        $result = $this->db->select($sql);
        if ($result) {
            foreach($result as $key => $val) {
                $result[$key]['ArtistImage'] = base64_encode($val['ArtistImage']);
            }
        }
        return $result;
    }
    public function getAll()
    {
        $sql = "SELECT * FROM artist";
        $result = $this->db->select($sql);
        if ($result) {
            foreach($result as $key => $val) {
                $result[$key]['ArtistImage'] = base64_encode($val['ArtistImage']);
            }
        }
        return $result;
    }
    function getAlbum($id){
        $sql = "SELECT * FROM albumartist where AlbumID = $id";
        $result = $this->db->select($sql);
        return $result;
    }
    function listIdSong($albumartist){
        $listId = count($albumartist) > 0 ? implode(",", $albumartist) : '';
        $sql = "SELECT * FROM songartist where  ArtistID IN($listId)";
        $result = $this->db->select($sql);
        return $result;
    }
}
