<?php
require_once "./src/core/Database.php";

class LikeSongModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function getLikeSong($id)
    {
        $sql = "SELECT * FROM Song, Album, Artist, SongArtist, LikeSong, User WHERE (User.UserID = $id) && (Song.SongID = LikeSong.SongID && LikeSong.UserID = User.UserID) && (Song.AlbumID = Album.AlbumID) && (Song.SongID = SongArtist.SongID && SongArtist.ArtistID = Artist.ArtistID)";
        $result = $this->db->select($sql);
        return $result;
    }

    public function getLike($userId)    
    {
        $sql = "SELECT * from likesong WHERE likesong.UserID = '$userId'";
        $result = $this->db->select($sql);
        return $result;
    }

}
