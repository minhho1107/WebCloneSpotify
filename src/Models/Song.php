<?php

require_once './src/core/Database.php';

class SongModel
{

    private $db;
    public $likeSongInYear;
    public $likeSongInMonth4;
    public $likeSongInMonth3;
    public $likeSongInMonth2;
    public $likeSongInMonth1;
    public $likeSongInMonth5;
    public $likeSongInMonth6;
    public $likeSongInMonth7;
    public $likeSongInMonth8;
    public $likeSongInMonth9;
    public $likeSongInMonth10;
    public $likeSongInMonth11;
    public $likeSongInMonth12;
    public $dataTableLikeSong;

    public function __construct()
    {
        $this->db = new Database();
    }

    function getSong($id)
    {
        $sql = "SELECT * FROM Song, Album, Artist, SongArtist WHERE (Song.SongID = $id) && (Song.AlbumID = Album.AlbumID) && (Song.SongID = SongArtist.SongID && SongArtist.ArtistID = Artist.ArtistID)";
        $result = $this->db->select($sql);
        return $result;
    }

    // Get All Songs
    public function getSongs()
    {
        $sql = "SELECT * FROM Song JOIN Album ON Song.AlbumID = Album.AlbumID JOIN SongArtist ON Song.SongID = SongArtist.SongID JOIN Artist ON SongArtist.ArtistID = Artist.ArtistID";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }


    // Get Song By Id
    public function getSongById($id)
    {
        $sql = "SELECT * FROM Song WHERE SongID = '$id'";
        $result = $this->db->select($sql);
        return $result;
    }

    // public function likeSong($songId, $userId)
    // {
    //     // TODO
    //     $sql = "SELECT * FROM likesong WHERE likesong.UserId = '$userId'";
    //     $result = $this->db->select($sql);
    //     return $result;
    // }

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

    // CRUD OPERATIONS
    public function create(array $data)
    {
        $SongName = $data['SongName'];
        $AlbumID = $data['AlbumID'];
        $SongDate = $data['SongDate'];
        $SongLength = $data['SongLength'];
        $SongLyric = $data['SongLyric'];
        $SongImage = $data['SongImage'];
        $SongAudio = $data['SongAudio'];

        $sql = "INSERT INTO song (SongName, AlbumID, SongDate, SongLength,SongLyric,SongImage,SongAudio) 
               VALUES ('$SongName', '$AlbumID', '$SongDate', '$SongLength', '$SongLyric', '$SongImage', '$SongAudio')";
        $result = $this->db->execute($sql);
        return $result;
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM song WHERE SongID = $id";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }

    public function update(int $id, array $data)
    {
        $SongName = $data['SongName'];
        $AlbumID = $data['AlbumID'];
        $SongDate = $data['SongDate'];
        $SongLength = $data['SongLength'];
        $SongLyric = $data['SongLyric'];
        $SongImage = $data['SongImage'];
        $SongAudio = $data['SongAudio'];
        if ($data['SongImage'] != 'None') {
            $sql = "UPDATE `song` 
            SET 
                `SongName`='$SongName',
                `AlbumID`='$AlbumID',
                `SongDate`='$SongDate',
                `SongLength`='$SongLength',
                `SongLyric`='$SongLyric',
                `SongImage`='$SongImage',
                `SongAudio`='$SongAudio'
            WHERE SongID=$id";
        } else {
            $sql = "UPDATE `song` 
            SET 
                `SongName`='$SongName',
                `AlbumID`='$AlbumID',
                `SongDate`='$SongDate',
                `SongLength`='$SongLength',
                `SongLyric`='$SongLyric',
                `SongAudio`='$SongAudio'
            WHERE SongID=$id";
        }

        $result = false;
        if (mysqli_query($this->db->conn, $sql)) {
            $result = true;
        }
        return json_encode($result);
    }


    public function delete(int $id)
    { {
            $sql = "DELETE FROM `song` WHERE SongID = $id";
            $result = false;
            if (mysqli_query($this->db->conn, $sql)) {
                $result = true;
            }
            return json_encode($result);
        }
    }

    // Phân trang
    public function getSongsLimit($offsetSong, $limitSong)
    {
        $sql = "SELECT * FROM Song JOIN Album ON Song.AlbumID = Album.AlbumID JOIN SongArtist ON Song.SongID = SongArtist.SongID JOIN Artist ON SongArtist.ArtistID = Artist.ArtistID ORDER BY Song.SongID DESC LIMIT $offsetSong, $limitSong";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }
    // tìm kiếm
    function search($name)
    {
        if (trim($name) != '') {
            $sql = "SELECT * FROM `song` INNER JOIN album On album.AlbumID = song.AlbumID where album.AlbumName like '%" . $name . "%' or song.SongName  like '%" . $name . "%' ";
            $result = $this->db->select($sql);
            if ($result) {
                foreach ($result as $key => $val) {
                    $result[$key]['SongImage'] = base64_encode($val['SongImage']);
                    $result[$key]['AlbumImage'] = base64_encode($val['AlbumImage']);
                }
            }
            return $result;
        } else {
            $sql = "SELECT * FROM `song` INNER JOIN album On album.AlbumID = song.AlbumID ";
            $result = $this->db->select($sql);
            if ($result) {
                foreach ($result as $key => $val) {
                    $result[$key]['SongImage'] = base64_encode($val['SongImage']);
                    $result[$key]['AlbumImage'] = base64_encode($val['AlbumImage']);
                }
            }
            return $result;
        }
    }
    function getList($listId)
    {
        $listId = count($listId) > 0 ? implode(",", $listId) : '';
        $sql = "SELECT * FROM Song WHERE SongID IN($listId)";
        $result = $this->db->select($sql);
        return $result;
    }

    // getCount() của tất cả các table thống kê
    public function getCount()
    {
        $sql = "SELECT COUNT(*) AS total FROM song";
        $result = $this->db->select($sql);
        return $result[0]['total'];
    }
    // getCount() của  table thống kê trong 1 năm
    public function getCountLikeSongInYear()
    {
        $sql = "SELECT COUNT(*) AS count
                    FROM likesong
                    WHERE LikeDate >= DATE_SUB(NOW(), INTERVAL 1 YEAR)
                    GROUP BY DATE_FORMAT(LikeDate, '%Y-%m')
                    ORDER BY DATE_FORMAT(LikeDate, '%Y-%m') ASC";
        $result = $this->db->select($sql);
        $count = array();
        foreach ($result as $row) {
            array_push($count, $row['count']);
        }
        return $count;
    }
    // getCount() của  table thống kê trong tháng 4
    public function getCountLikeSongInMonth4()
    {
        $sql = "SELECT COUNT(*) AS LikesCount 
                   FROM likesong 
                   WHERE LikeDate >= '2023-04-01' AND LikeDate < '2023-05-01' 
                   GROUP BY DATE(LikeDate) 
                   ORDER BY DATE(LikeDate) ASC";
        $result = $this->db->select($sql);
        $count = array();
        foreach ($result as $row) {
            array_push($count, $row['LikesCount']);
        }
        return $count;
    }
    // getCount() của  table thống kê trong tháng 3
    public function getCountLikeSongInMonth3()
    {
        $sql = "SELECT COUNT(*) AS LikesCount 
               FROM likesong 
               WHERE LikeDate >= '2023-03-01' AND LikeDate < '2023-04-01' 
               GROUP BY DATE(LikeDate) 
               ORDER BY DATE(LikeDate) ASC";
        $result = $this->db->select($sql);
        $count = array();
        foreach ($result as $row) {
            array_push($count, $row['LikesCount']);
        }
        return $count;
    }
    // getCount() của  table thống kê trong tháng 2
    public function getCountLikeSongInMonth2()
    {
        $sql = "SELECT COUNT(*) AS LikesCount 
               FROM likesong 
               WHERE LikeDate >= '2023-02-01' AND LikeDate < '2023-03-01' 
               GROUP BY DATE(LikeDate) 
               ORDER BY DATE(LikeDate) ASC";
        $result = $this->db->select($sql);
        $count = array();
        foreach ($result as $row) {
            array_push($count, $row['LikesCount']);
        }
        return $count;
    }
    // getCount() của  table thống kê trong tháng 1

    public function getCountLikeSongInMonth1()
    {
        $sql = "SELECT COUNT(*) AS LikesCount 
               FROM likesong 
               WHERE LikeDate >= '2023-01-01' AND LikeDate < '2023-02-01' 
               GROUP BY DATE(LikeDate) 
               ORDER BY DATE(LikeDate) ASC";
        $result = $this->db->select($sql);
        $count = array();
        foreach ($result as $row) {
            array_push($count, $row['LikesCount']);
        }
        return $count;
    }

    // getCount() của  table thống kê trong tháng 5

    public function getCountLikeSongInMonth5()
    {
        $sql = "SELECT COUNT(*) AS LikesCount 
               FROM likesong 
               WHERE LikeDate >= '2023-05-01' AND LikeDate < '2023-06-01' 
               GROUP BY DATE(LikeDate) 
               ORDER BY DATE(LikeDate) ASC";
        $result = $this->db->select($sql);
        $count = array();
        foreach ($result as $row) {
            array_push($count, $row['LikesCount']);
        }
        return $count;
    }

    // getCount() của  table thống kê trong tháng 6

    public function getCountLikeSongInMonth6()
    {
        $sql = "SELECT COUNT(*) AS LikesCount 
               FROM likesong 
               WHERE LikeDate >= '2023-06-01' AND LikeDate < '2023-07-01' 
               GROUP BY DATE(LikeDate) 
               ORDER BY DATE(LikeDate) ASC";
        $result = $this->db->select($sql);
        $count = array();
        foreach ($result as $row) {
            array_push($count, $row['LikesCount']);
        }
        return $count;
    }

    // getCount() của  table thống kê trong tháng 7

    public function getCountLikeSongInMonth7()
    {
        $sql = "SELECT COUNT(*) AS LikesCount 
               FROM likesong 
               WHERE LikeDate >= '2023-07-01' AND LikeDate < '2023-08-01' 
               GROUP BY DATE(LikeDate) 
               ORDER BY DATE(LikeDate) ASC";
        $result = $this->db->select($sql);
        $count = array();
        foreach ($result as $row) {
            array_push($count, $row['LikesCount']);
        }
        return $count;
    }

    // getCount() của  table thống kê trong tháng 8

    public function getCountLikeSongInMonth8()
    {
        $sql = "SELECT COUNT(*) AS LikesCount 
               FROM likesong 
               WHERE LikeDate >= '2023-08-01' AND LikeDate < '2023-09-01' 
               GROUP BY DATE(LikeDate) 
               ORDER BY DATE(LikeDate) ASC";
        $result = $this->db->select($sql);
        $count = array();
        foreach ($result as $row) {
            array_push($count, $row['LikesCount']);
        }
        return $count;
    }

    // getCount() của  table thống kê trong tháng 9

    public function getCountLikeSongInMonth9()
    {
        $sql = "SELECT COUNT(*) AS LikesCount 
               FROM likesong 
               WHERE LikeDate >= '2023-09-01' AND LikeDate < '2023-10-01' 
               GROUP BY DATE(LikeDate) 
               ORDER BY DATE(LikeDate) ASC";
        $result = $this->db->select($sql);
        $count = array();
        foreach ($result as $row) {
            array_push($count, $row['LikesCount']);
        }
        return $count;
    }

    // getCount() của  table thống kê trong tháng 10

    public function getCountLikeSongInMonth10()
    {
        $sql = "SELECT COUNT(*) AS LikesCount 
               FROM likesong 
               WHERE LikeDate >= '2023-10-01' AND LikeDate < '2023-11-01' 
               GROUP BY DATE(LikeDate) 
               ORDER BY DATE(LikeDate) ASC";
        $result = $this->db->select($sql);
        $count = array();
        foreach ($result as $row) {
            array_push($count, $row['LikesCount']);
        }
        return $count;
    }

    // getCount() của  table thống kê trong tháng 11

    public function getCountLikeSongInMonth11()
    {
        $sql = "SELECT COUNT(*) AS LikesCount 
               FROM likesong 
               WHERE LikeDate >= '2023-011-01' AND LikeDate < '2023-12-01' 
               GROUP BY DATE(LikeDate) 
               ORDER BY DATE(LikeDate) ASC";
        $result = $this->db->select($sql);
        $count = array();
        foreach ($result as $row) {
            array_push($count, $row['LikesCount']);
        }
        return $count;
    }

    // getCount() của  table thống kê trong tháng 12

    public function getCountLikeSongInMonth12()
    {
        $sql = "SELECT COUNT(*) AS LikesCount 
               FROM likesong 
               WHERE LikeDate >= '2023-12-01' AND LikeDate < '2023-12-31' 
               GROUP BY DATE(LikeDate) 
               ORDER BY DATE(LikeDate) ASC";
        $result = $this->db->select($sql);
        $count = array();
        foreach ($result as $row) {
            array_push($count, $row['LikesCount']);
        }
        return $count;
    }
    // Hàm lấy dữ liệu từ bảng Song được tạo bằng truy xuất sql
    public function GetDataTableSongLike()
    {
        $sql = "SELECT song.SongName, artist.ArtistName, album.AlbumName, song.SongLength, COUNT(likesong.SongID) AS TotalLikes 
                FROM song 
                INNER JOIN album ON song.AlbumID = album.AlbumID 
                INNER JOIN songartist ON song.SongID = songartist.SongID 
                INNER JOIN artist ON songartist.ArtistID = artist.ArtistID 
                LEFT JOIN likesong ON song.SongID = likesong.SongID 
                GROUP BY song.SongID 
                ORDER BY song.SongName ASC";
        $result = $this->db->select($sql);
        $data = array();
        foreach ($result as $row) {
            $songName = $row['SongName'];
            $artistName = $row['ArtistName'];
            $albumName = $row['AlbumName'];
            $songLength = $row['SongLength'];
            $totalLikes = $row['TotalLikes'];
            $data[] = array($songName, $artistName, $albumName, $songLength, $totalLikes);
        }
        return $data;
    }
    // Get All Songs
    public function getIdSong($name)
    {
        $sql = "SELECT SongID  FROM Song where SongName = '" . $name . "'";
        $result = $this->db->conn->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data = $row;
        }
        return $data;
    }
}
