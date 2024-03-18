<?php
require_once "./src/core/Database.php";

class PlaylistModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    // Get All Songs
    public function getPlaylists()
    {
        $sql = "SELECT * FROM playlist";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }


    function getPlaylist($id)
    {
        $sql = "SELECT * FROM Playlist, Song, Album, Artist, PlaylistSong, SongArtist WHERE (Playlist.PlaylistID = PlaylistSong.PlaylistID) && (Song.SongID = PlaylistSong.SongID && PlaylistSong.PlaylistID = $id) && (Song.AlbumID = Album.AlbumID) && (Song.SongID = SongArtist.SongID && SongArtist.ArtistID = Artist.ArtistID)";
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
        if (mysqli_query($this->db->conn, $sql)) {
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

    public function getPlaylistById($id)
    {
        $sql = "SELECT * FROM Playlist WHERE PlaylistID = '$id'";
        $result = $this->db->select($sql);
        return $result;
    }
    // CRUD OPERATIONS
    public function create(array $data)
    {
        $PlaylistName = $data['PlaylistName'];
        $PlaylistDescription = $data['PlaylistDescription'];
        $AmountLike = $data['AmountLike'];
        $AmountSong = $data['AmountSong'];
        $PlaylistLength = $data['PlaylistLength'];
        $CreateDate = $data['CreateDate'];
        $PlaylistImage = $data['PlaylistImage'];

        $sql = "INSERT INTO playlist (PlaylistName, PlaylistDescription, AmountLike, AmountSong,PlaylistLength,CreateDate,PlaylistImage) 
                    VALUES ('$PlaylistName', '$PlaylistDescription', '$AmountLike', '$AmountSong', '$PlaylistLength', '$CreateDate', '$PlaylistImage')";
        $result = $this->db->execute($sql);
        return $result;
    }
    public function edit($id)
    {
        $sql = "SELECT * FROM playlist WHERE PlaylistID = $id";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }





    public function update(int $id, array $data)
    {
        $PlaylistName = $data['PlaylistName'];
        $PlaylistDescription = $data['PlaylistDescription'];
        $AmountLike = $data['AmountLike'];
        $AmountSong = $data['AmountSong'];
        $PlaylistLength = $data['PlaylistLength'];
        $CreateDate = $data['CreateDate'];
        $PlaylistImage = $data['PlaylistImage'];
        if ($data['PlaylistImage'] != 'None') {
            $sql = "UPDATE `playlist` 
            SET 
                `PlaylistName`='$PlaylistName',
                `PlaylistDescription`='$PlaylistDescription',
                `AmountLike`='$AmountLike',
                `AmountSong`='$AmountSong',
                `PlaylistLength`='$PlaylistLength',
                `CreateDate`='$CreateDate',
                `PlaylistImage`='$PlaylistImage'
            WHERE PlaylistID=$id";
        } else {
            $sql = "UPDATE `playlist` 
            SET 
                `PlaylistName`='$PlaylistName',
                `PlaylistDescription`='$PlaylistDescription',
                `AmountLike`='$AmountLike',
                `AmountSong`='$AmountSong',
                `PlaylistLength`='$PlaylistLength',
                `CreateDate`='$CreateDate'
            WHERE PlaylistID=$id";
        }
        $result = false;
        if (mysqli_query($this->db->conn, $sql)) {
            $result = true;
        }
        return json_encode($result);
    }

    public function delete(int $id)
    { {
            $sql = "DELETE FROM `playlist` WHERE PlaylistID = $id";
            $result = false;
            if (mysqli_query($this->db->conn, $sql)) {
                $result = true;
            }
            return json_encode($result);
        }
    }
    // Phân trang
    public function getPlaylistsLimit($offsetPlaylist, $limitPlaylist)
    {
        $sql = "SELECT * FROM playlist ORDER BY PlaylistID DESC LIMIT $offsetPlaylist, $limitPlaylist";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }
    // Tìm kiếm
    function search($name)
    {
        $sql = "SELECT * FROM playlist where PlaylistName LIKE '%" . $name . "%' ";
        $result = $this->db->select($sql);
        if ($result) {
            foreach ($result as $key => $val) {
                $result[$key]['PlaylistImage'] = base64_encode($val['PlaylistImage']);
            }
        }
        return $result;
    }
    function getAll()
    {
        $sql = "SELECT * FROM playlist";
        $result = $this->db->select($sql);
        if ($result) {
            foreach ($result as $key => $val) {
                $result[$key]['PlaylistImage'] = base64_encode($val['PlaylistImage']);
            }
        }
        return $result;
    }
    function listIdSong($idPlayList)
    {
        $listId = count($idPlayList) > 0 ? implode(",", $idPlayList) : '';
        $sql = "SELECT * FROM playlistsong where  PlaylistID  IN($listId)";
        $result = $this->db->select($sql);
        return $result;
    }

    // Fix KhangProPlayer
    // Hàm lấy tổng só Playlist của User
    public function getCountUserplaylist($userID)
    {
        $sql = "SELECT COUNT(*) AS total FROM userplaylist WHERE UserID = $userID";
        $result = $this->db->select($sql);
        return $result[0]['total'];
    }
    // Hàm lấy chi tiết từng playlist của user
    public function getUserIDPlaylist($userID)
    {
        $sql = "SELECT PlaylistID FROM userplaylist WHERE UserID = $userID";
        $result = $this->db->select($sql);  
        $playlistIDs = array();
    
        if ($result !== null) {
            foreach ($result as $row) {
                $playlistIDs[] = $row['PlaylistID'];
            }
        }
    
        return $playlistIDs;
    }
    
    //Hàm lấy SongID của User
    public function getUserSongID($id)
    {
        $sql = "SELECT SongID FROM likesong WHERE UserID = $id";
        $result = $this->db->select($sql);
        $songIDs = array();
        foreach ($result as $row) {
            $songIDs[] = $row['SongID'];
        }
        return $songIDs;
    }
    // Hàm lấy danh sách bài hát
    function getSongList()
    {
        $sql = "SELECT * FROM Song, Album, Artist, SongArtist WHERE (Song.AlbumID = Album.AlbumID) AND (Song.SongID = SongArtist.SongID AND SongArtist.ArtistID = Artist.ArtistID)";
        $result = $this->db->select($sql);
        return $result;
    }
    // Hàm tìm kiếm bài hát trong danh sách theo tên 
    function searchSongs($searchTerm)
    {
        $sql = "SELECT * FROM Song, Album, Artist, SongArtist WHERE (Song.AlbumID = Album.AlbumID) AND (Song.SongID = SongArtist.SongID AND SongArtist.ArtistID = Artist.ArtistID) AND Song.SongName LIKE '%{$searchTerm}%'";
        $result = $this->db->select($sql);
        return $result;
    }
    // Hàm thêm bài hát vào playlist
    function addSongToPlaylist($playlistID, $songID)
    {
        $date = date('Y-m-d');
        $sql = "INSERT INTO playlistsong (PlaylistID, SongID, AddDate) VALUES ('$playlistID', '$songID', '$date')";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }
    // Hàm lấy SongID của Playlist
    public function getPlaylistSongIDs($playlistID)
    {
        $sql = "SELECT SongID FROM playlistsong WHERE PlaylistID = $playlistID";
        $result = $this->db->select($sql);
        $songIDs = array();
        foreach ($result as $row) {
            $songIDs[] = $row['SongID'];
        }
        return $songIDs;
    }
    // Tạo Playlist mới trắng tt
    // public function CreatePlaylist()
    // {   
    //     $date = date('Y-m-d');
    //     $sql = "INSERT INTO playlist (PlaylistID, PlaylistName, PlaylistDescription, AmountLike, AmountSong, PlaylistLength, CreateDate, PlaylistImage) VALUES (NULL, 'Khang ProPlayer', 'Khang đẹp trai','10', '10', '1000', '$date', NULL)";
    //     $result = mysqli_query($this->db->conn, $sql);
    //     return $result;
    // }

    // 18/05/2023 Đã xong create
    public function createPlaylist()
    {
        $date = date('Y-m-d');
        $sql = "INSERT INTO playlist (PlaylistID, PlaylistName, PlaylistDescription, AmountLike, AmountSong, PlaylistLength, CreateDate, PlaylistImage) VALUES (NULL, 'My Playlist', 'My Playlist', '10', '10', '1000', '$date', 0xffd8ffe000104a46494600010101004800480000ffdb0043000302020302020303030304030304050805050404050a070706080c0a0c0c0b0a0b0b0d0e12100d0e110e0b0b1016101113141515150c0f171816141812141514ffdb00430103040405040509050509140d0b0d1414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414ffc00011080126012703011100021101031101ffc4001c0001000105010100000000000000000000000103040507080602ffc40047100100010202020a0c0d040203000000000001020304050611071214162151527291d108133133414255617181b1d217223234363773748392a4b3c118a1b2c324431563d3ffc40014010100000000000000000000000000000000ffc40014110100000000000000000000000000000000ffda000c03010002110311003f00e40cf33dc465d8aa2d5aa6dd54cd1b6f8f13afbb3c53e6063674af173ff5d9fcb3d6089d29c5cf8967f2cf5822749f173e259fcb3d6089d25c54f896ba27ac113a498a9f12d744f58237c78a9f12d744f58237c589e45ae89eb037c589e45ae89eb037c389e45ae89eb037c389e45ae89eb046f8313c8b5d13d606f8313c8b5d13d606f8313c8b5d13d606f8313c8b5d13d606f8313c9b7d13d606f8313c9b7d13d606f8313c9b7d13d606f8313c9b7d13d606f8313c9b5d13d606f8313c9b7d13d606f8313c9b7d13d606f8313c8b7d13d606f8313c8b5d13d606f8313c9b7d13d609df0e27916ba27ac0df0627916ba27ac0df0e27916ba27ac0df0e27916ba27ac13be2c4f22d7e59eb037c7898f12d744f581be4c4f22d744f583ea3497151e25ae89eb04ef9f15c8b3f967ac13be9c5c78967f2cf582634af191ff5d9fcb3d60c8e479f5fcc7175dbbb45b8a6289abe244ebd7ae3cfe706374a675e616feca3db20c30000000000000000000000000000000000000000000000000000333a2d3ab30b9f653ed807ce92cebc7d1f671ed90620000000000000000000000000000000000000000000000000000196d1af9fdcfb39f6c02348a75e3a8fb38f6c83140000000000000000000000000000000000000000000000000000ca68eceac757f673ed80467f3af1947d9c7b6418c000000000000000000000000000000000000000000000000000064f209d58cae7ff005cfb601f39e4ebc5d3cc8f6c831c0000000000000000000000000000000000000000000000000000c8e473ab175f327db008cebe754f323db20c780000000000000000000000000000000000000000000000000002ff0026e0c557cc9f6c02337f9d53cdfe641620000000000000000000000000000000000000000000000000000beca275626ae64fb60119b70e269e647b641640000000000000000000000000000000000000000000000000000bdcaa75622ae64fb60119a7ce29e6ff00320b300000000000000000000000000000000000000000000000000005e657f38ab9bfcc02332eff004f37f9905a00000000000000000000000000000000000000000000000000002ef2deff005737f980331eff004f37f9905a00000000000000000000000000000000000000000000000000002eb2e9d57e79a0661dfe39bfcc82d400000000000000000000000000000000000000000000000000017597ceabd3cd0463fbf473416c0000000000000000000000000000000000000000000000000000b9c077e9e6818e9d77a3d00b600000000000000000000007baf80fd36f22feaac7be07c07e9b7917f5563df03e03f4dbc8bfaab1ef81f01fa6de45fd558f7c0f80fd36f22feaac7be07c07e9b7917f5563df0794cf323c6e8de697f2ecc6c6e7c659daf6cb5b7a6ad5ae98aa3869998ee4c7841600000000000000000000b8c0ceabd3cd031bdf63d00b7000000000000000000000076d67b9bdbc8326c6e657a8aee5ac2daaaf55451ab6d3111af546b06aff00ea5722f25e63d16fde03fa95c8bc9798f45bf780fea5722f25e63d16fde03fa95c8bc9798f45bf781ee340f4f307a7f96e231983c3dfc3dbb377b4cd37f56b99d513ae354cf1839df670fad0cebf03f62d83c280000000000000000002e305df67d008c64ebbb1e805000000000000000000000007626c93f403483ee577fc641c76000003a2bb1abe8a669f7dff005d20d5fb387d68675f81fb16c1e1400000000000000000015f07df67d0062e75dc8f402800000000000000000000003b13649fa01a41f72bbfe320e3b000001d15d8d5f45334fbeffae906afd9c3eb433afc0fd8b60f0a0000000000000000000ad85d5db275f1018aef91e805100000000000000000000007626c93f403483ee577fc641c76000003a2bb1abe8a669f7dff005d20d5fb387d68675f81fb16c1e1400000000000000000015b0bdf27d00627be7a814400000000000000000019dd15d09ce74cf13559cab0755f8a3be5daa76b6e8f4d53c1eaeef981eea3b1bb49a623fe76551e6edd77ff0098376ec93f403483ee577fc641c76002a58c3ddc55fb766cdbaaedeb9545345ba235d554cf72223c20d9195f63e69566385a6f5cdc5809aa35c5ac55eab6feb8a69ab57ac1b8b622d04c7e80e498cc1e617b0d7aedec476ea670d55555311b5a63876d4c70f00345ece1f5a19d7e07ec5b0785000000000000000000055c3fcb9f40188f971e8052000000000000000001570b87af1789b562dea9b976b8a29d73aa35ccea8075fe130d956c61a153f17b5e0b01676f76ba29f8f76af0cf9eaaa7db1dc8806a6c4f64ce366f55b9f23b14dad7f162e5eaa6ad5e7d5100db3b24fd00d20fb95dff0019071d800defd8e3a2787af0f8dd21bf6e2bc4537270d8799f1222989aea8f3ceda23d53c60cd6c87b3adad11ceaee5580c0538fc458d517aedcb934d1455dddac44470f04f775c03d16c57a7d88d90727c5e371185b784aacdfed314daaa662636b13af87d20d0db387d68675f81fb16c1e140000000000000000001570ff002e7d008bff002e3d00a6000000000000000002e32fc65597e3f0d8aa235d762ed37698d7ab869989eefa81d7d9be0705b246845db16afeac2665629aeddea635ed675c554ccc79aa88d71e6980699c8bb1d739ff00ce5a8cd2fe168cb6dd7155caecd7355576989ee531ab835f9fb9e706cad9bb482ce49a038eb35d7ff231f1186b3444ea99d73f1a7d114ebe988f08395400742763769058bd9263f26aaaa69c559bd389a69d7c35515453133ea98e1e7402cf64bd83b33cfb49b119ae4d76c556f17545776cdfae689a2bd5113313ab8627ba0d83b19e8446c7ba31384bf88a2f622e5c9c4622ed3c1444ea88d51afc11111c33e707356c8d9edad25d37cdf31b156dec5dbdb5b7572a9a698a227d714c483cd80000000000000000002a59f953e802f7ca8f402980000000000000000003d9e81eca99c6816dace1e68c5e02b9db5584bf33b589e3a67c59fed3c40f7f88ec9baeac3eab1a3f4d17e63bb7317b6a63d51444cff606a7d2ad2eccf4cf339c76677fb6dcd5b5a2dd31aa8b74f1531e08fef3e10614005e6519c63321cc6ce3f0188af0d8bb356da8b94783ae3cd3c120dc195764c62ad61a9a331c92de26fc470ddc3df9b7154f36699d5d3ea0799d38d9bf38d30c1dcc0d8b5465580b9c172dd9ae6ab972393557c1c1e6888f3835c800000000000000000000a96a75553e8045d9d7503e00000000000000000000000000000000000000000000000000001f76fe5022e7ca07c80000000000000000000000000000000000000000000000000003ea8f94057dd07c80000000000000000000000000000000000000000000000000003ea8ee822aee820000000000000000000000000000000000000000000000000000134f7409ee820000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000080000000000000000000000000000000000000000000000000000009023c200000000000000000000000000000000000000000000000000000120880480000000000000000000000000000000000000000000000000002241300000000000000000000000000000000000000000000000000000022aee0148240000000000000000000000000000000000000000000000000001150260000000000000000000000000000000000000000000000000000002635810000000000000000000000000000000000000000000000000000001208d7a809ae2011372238c1137a98f04823b7d3c5208dd34f1481ba698f0481baa8e29046eba38aa037551c5501baa8e2a811bb28e2a813bae8e2a811bb28e2a80dd94715406eca38aa037651c5501bb28e2a80dd94715406eca38aa037651c5501bb28e2a80dd94715406eca38aa037651c5501bb28e2a813bae8d5dca80dd54715406eba38aa0231544f82a04ee9a78a40dd34f14827b7d3c52098bd4cf82408bb13c60fadbc01af583ffd9)";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }

    // Hàm lấy PlaylistID của bảng playlist 

    public function getAllPlaylistIDs()
    {
        $sql = "SELECT PlaylistID FROM playlist";
        $result = $this->db->select($sql);
        $playlistIDs = array();
        foreach ($result as $row) {
            $playlistIDs[] = $row['PlaylistID'];
        }
        return $playlistIDs;
    }

    // Hàm tạo userplaylist

    public function createUserPlaylist($userID, $playlistID)
    {
        $date = date('Y-m-d');
        $sql = "INSERT INTO userplaylist (UserID, PlaylistID, CreateDate) VALUES ('$userID', '$playlistID', '$date')";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }

    // Hàm xóa userplaylist

    public function deleteUserPlaylist($userID, $playlistID)
    {
        $sql = "DELETE FROM userplaylist WHERE `userplaylist`.`UserID` = '$userID' AND `userplaylist`.`PlaylistID` = '$playlistID'";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }

    // Đã thêm
    // 18/05/2023
    public function updateNamePlaylist($playlistName, $playlistID)
    {
        $sql = "UPDATE `playlist` SET `PlaylistName` = '$playlistName' WHERE `playlist`.`PlaylistID` = $playlistID";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }

    public function updateDescriptionPlaylist($playlistDescription, $playlistID)
    {
        $sql = "UPDATE `playlist` SET `PlaylistDescription` = '$playlistDescription' WHERE `playlist`.`PlaylistID` = $playlistID";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }

    public function updateImagePlaylist($PlaylistImage, $playlistID)
    {
        // $imageContent = file_get_contents($PlaylistImage['tmp_name']);

        // if ($imageContent === false) {
        // }
        // $escapedImage = mysqli_real_escape_string($this->db->conn, base64_encode($imageContent));
        // $sql = "UPDATE `playlist` SET `PlaylistImage` = '$PlaylistImage' WHERE `playlist`.`PlaylistID` = $playlistID";
        // $result = mysqli_query($this->db->conn, $sql);
        // return $result;
        $stmt = $this->db->conn->prepare("UPDATE `playlist` SET `PlaylistImage` = ? WHERE `playlist`.`PlaylistID` = ?");
        $stmt->bind_param("si", $PlaylistImage, $playlistID);
        $stmt->execute();
        $result = $stmt->affected_rows;
        $stmt->close();
        return $result;
    }
}
