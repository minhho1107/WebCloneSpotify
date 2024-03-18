<?php 

require_once './src/core/Database.php';

class PodcastModel{

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Get All Songs
    public function getPodcast()
    {
        $sql = "SELECT * FROM podcast";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }
    function getPodcasts($id)
    {
        $sql = "SELECT * FROM Podcast WHERE PodcastID = $id";
        $result = $this->db->select($sql);
        return $result;
    }
    

    // Get Song By Id
    public function getPodcastById($id)
    {
        $sql = "SELECT * FROM podcast WHERE PodcastID = '$id'";
        $result = $this->db->execute($sql);
        return $result;
    }

 // CRUD OPERATIONS
 public function create(array $data)
 {
     $PodcastName = $data['PodcastName'];
     $PodcastAuthor = $data['PodcastAuthor'];
     $PodcastDescription = $data['PodcastDescription'];
     $PodcastImage = $data['PodcastImage'];
 
     $sql = "INSERT INTO podcast (PodcastName, PodcastAuthor, PodcastDescription, PodcastImage) 
             VALUES ('$PodcastName', '$PodcastAuthor', '$PodcastDescription', '$PodcastImage')";
     $result = $this->db->execute($sql);
     return $result;
 }

 public function edit($id){
     $sql = "SELECT * FROM podcast WHERE PodcastID = $id";
     $result = mysqli_query($this->db->conn, $sql);
     return $result;
 }
 

 public function update(int $id, array $data)
 {
         $PodcastName = $data['PodcastName'];
         $PodcastAuthor = $data['PodcastAuthor'];
         $PodcastDescription = $data['PodcastDescription'];
         $PodcastImage = $data['PodcastImage'];
         if ($data['PodcastImage'] != 'None'){
            $sql = "UPDATE `podcast` SET `PodcastName`='$PodcastName',`PodcastAuthor`='$PodcastAuthor',`PodcastDescription`='$PodcastDescription',`PodcastImage`='$PodcastImage' WHERE PodcastID=$id";
        } else {
            $sql = "UPDATE `podcast` SET `PodcastName`='$PodcastName',`PodcastAuthor`='$PodcastAuthor',`PodcastDescription`='$PodcastDescription' WHERE PodcastID=$id";
        }
     $result = false;
     if(mysqli_query($this->db->conn, $sql)){
         $result = true;
     }
     return json_encode($result);
 }

 public function delete($id)
 {
     $sql = "DELETE FROM `podcast` WHERE PodcastID = $id";
     $result = false;
     if(mysqli_query($this->db->conn, $sql)){
         $result = true;
     }
     return json_encode($result);
 }

 public function getPodcastsLimit($offsetPodcast, $limitPodcast){
    $sql = "SELECT * FROM podcast ORDER BY PodcastID DESC LIMIT $offsetPodcast, $limitPodcast";
    $result = mysqli_query($this->db->conn, $sql);
    return $result;
}
public function search($name)
{
    $sql = "SELECT * FROM podcast where PodcastName LIKE '%".$name."%' ";
    $result = $this->db->select($sql);
    if ($result) {
        foreach($result as $key => $val) {
            $result[$key]['PodcastImage'] = base64_encode($val['PodcastImage']);
        }
    }
    return $result;
}
public function getAll()
{
    $sql = "SELECT * FROM podcast";
    $result = $this->db->select($sql);
    if ($result) {
        foreach($result as $key => $val) {
            $result[$key]['PodcastImage'] = base64_encode($val['PodcastImage']);
        }
    }
    return $result;
}

    // getCount()
    public function getCount()
    {
        $sql = "SELECT COUNT(*) AS total FROM podcast";
        $result = $this->db->select($sql);
        return $result[0]['total'];
    }

}
