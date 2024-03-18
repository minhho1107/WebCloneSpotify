<?php
require_once "./src/core/Database.php";

class AlbumModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    // Get All Songs
    public function getAlbums()
    {
        $sql = "SELECT * FROM album";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }
    

    function getAlbum($id)
    {
        // $sql = "SELECT * FROM Song, Album WHERE (Album.AlbumID = $id && Song.AlbumID = Album.AlbumID)";
        $sql = "SELECT * FROM Song, Album, Artist, SongArtist WHERE (Song.AlbumID = $id && Song.AlbumID = Album.AlbumID) && (Song.SongID = SongArtist.SongID && SongArtist.ArtistID = Artist.ArtistID)";
        $result = $this->db->select($sql);
        return $result;
    }

    function getArtist($id)
    {
        $sql = "SELECT * FROM Artist, AlbumArtist WHERE (AlbumArtist.AlbumID = $id && AlbumArtist.ArtistID = Artist.ArtistID)";
        $result = $this->db->select($sql);
        return $result;
    }

    public function getLike($userId)    
    {
        $sql = "SELECT * from likesong WHERE likesong.UserID = '$userId'";
        $result = $this->db->select($sql);
        return $result;
    }

    public function reactLike($userId, $songId, $Date)
    {
        $sql = "INSERT INTO likesong (UserId, SongId, LikeDate) VALUES ('$userId', '$songId', '$Date')";
        $result = $this->db->execute($sql);
        return $result;
    }


    public function unLike($userId, $songId)
    {
        $sql = "DELETE FROM `likesong` WHERE userID = '$userId' and SongID = '$songId'";
        $result = false;
        if(mysqli_query($this->db->conn, $sql)){
            $result = true;
        }
        return json_encode($result);
    
    }

    public function countOfSong($songId)
    {
        $sql = "INSERT INTO playsong(SongID, CountOfSong) VALUES('$songId', 1) ON DUPLICATE KEY UPDATE CountOfSong = CountOfSong + 1";
        $result = $this->db->execute($sql);
        return $result;
    }

    // Get Song By Id
    public function getAlbumById($id)
    {
        $sql = "SELECT * FROM album WHERE AlbumID = '$id'";
        $result = $this->db->execute($sql);
        return $result;
    }
    public function edit($id){
        $sql = "SELECT * FROM album WHERE AlbumID = $id";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }
    
    public function create(array $data)
    {
        $AlbumName = $data['AlbumName'];
        $ReleaseDate = $data['ReleaseDate'];
        $AmountSong = $data['AmountSong'];
        $AlbumLength = $data['AlbumLength'];
        $AlbumImage = $data['AlbumImage'];
        
        $sql = "INSERT INTO album (AlbumName, ReleaseDate, AmountSong, AlbumLength,AlbumImage) 
                VALUES ('$AlbumName', '$ReleaseDate', '$AmountSong', '$AlbumLength','$AlbumImage')";
        $result = $this->db->execute($sql);
        return $result;
    }
    

    public function update(int $id, array $data)
    {
        $AlbumName = $data['AlbumName'];
        $ReleaseDate = $data['ReleaseDate'];
        $AmountSong = $data['AmountSong'];
        $AlbumLength = $data['AlbumLength'];
        $AlbumImage = $data['AlbumImage'];
        if ($data['AlbumImage'] != 'None'){
            $sql = "UPDATE `album` SET `AlbumName`='$AlbumName',`ReleaseDate`='$ReleaseDate',`AmountSong`='$AmountSong',`AlbumLength`='$AlbumLength',`AlbumImage`='$AlbumImage' WHERE AlbumID=$id";
        } else {
            $sql = "UPDATE `album` SET `AlbumName`='$AlbumName',`ReleaseDate`='$ReleaseDate',`AmountSong`='$AmountSong',`AlbumLength`='$AlbumLength' WHERE AlbumID=$id";
        }
    $result = false;
    if(mysqli_query($this->db->conn, $sql)){
        $result = true;
    }
    return json_encode($result);
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM album WHERE AlbumID='$id'";
        $result = $this->db->execute($sql);
        return $result;
    }
    // Phân trang
    public function getAlbumsLimit($offsetAlbum, $limitAlbum){
        $sql = "SELECT * FROM album ORDER BY AlbumID DESC LIMIT $offsetAlbum, $limitAlbum";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }

    public function getCount()
    {
        $sql = "SELECT COUNT(*) AS total FROM album";
        $result = $this->db->select($sql);
        return $result[0]['total'];
    }

    function search($name)
    {
        $sql = "SELECT * FROM album where AlbumName LIKE '%".$name."%' ";
        $result = $this->db->select($sql);
        if ($result) {
            foreach($result as $key => $val) {
                $result[$key]['AlbumImage'] = base64_encode($val['AlbumImage']);
            }
        }
        return $result;
    }
    
    function getAll()
    {
        $sql = "SELECT * FROM album";
        $result = $this->db->select($sql);
        if ($result) {
            foreach($result as $key => $val) {
                $result[$key]['AlbumImage'] = base64_encode($val['AlbumImage']);
            }
        }
        return $result;
    }

}
