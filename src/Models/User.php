<?php

require_once './src/core/Database.php';

class UserModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    function getUserByUsername($username)
    {
        $sql = "SELECT * FROM User WHERE Username = '$username'";
        $result = $this->db->select($sql);
        return $result;
    }

    // Get All Users
    public function getUsers()
    {
        $sql = "SELECT * FROM User";
        $result = $this->db->select($sql);
        return $result;
    }

    // Get User By Id
    public function getUserById($id)
    {
        $sql = "SELECT * FROM User WHERE UserID = '$id'";
        $result = $this->db->select($sql);
        return $result;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {
        $Username = $data['Username'];
        $UserFname = $data['UserFname'];
        $UserLname = $data['UserLname'];
        $Password = $data['Password'];
        $Email = $data['Email'];
        $Birthday = $data['Birthday'];
        $Address = $data['Address'];
        $City = $data['City'];
        $State = $data['State'];
        $ZipCode = $data['ZipCode'];
        $UserImage = $data['UserImage'];

        $sql = "INSERT INTO user (Username, UserFname, UserLname, Password ,Email,Birthday,Address,City,State,ZipCode,UserImage) 
            VALUES ('$Username', '$UserFname', '$UserLname', '$Password', '$Email', '$Birthday', '$Address','$City','$State','$ZipCode','$UserImage')";
        $result = $this->db->execute($sql);
        return $result;
    }

    public function read(int $id)
    {
    }
    public function edit($id)
    {
        $sql = "SELECT * FROM user WHERE UserID = $id";
        $result = mysqli_query($this->db->conn, $sql);
        return $result;
    }





    public function update(int $id, array $data)
    {
        $Username = $data['Username'];
        $UserFname = $data['UserFname'];
        $UserLname = $data['UserLname'];
        $Password = $data['Password'];
        $Email = $data['Email'];
        $Birthday = $data['Birthday'];
        $Address = $data['Address'];
        $City = $data['City'];
        $State = $data['State'];
        $ZipCode = $data['ZipCode'];
        $UserImage = $data['UserImage'];
        if ($data['UserImage'] != 'None') {
            $sql = "UPDATE `user` 
        SET 
            `Username`='$Username',
            `UserFname`='$UserFname',
            `UserLname`='$UserLname',
            `Password`='$Password',
            `Email`='$Email',
            `Birthday`='$Birthday',
            `Address`='$Address',
            `City`='$City',
            `State`='$State',
            `ZipCode`='$ZipCode',
            `UserImage`='$UserImage'
        WHERE UserID=$id";
        } else {
            $sql = "UPDATE `user` 
        SET 
            `Username`='$Username',
            `UserFname`='$UserFname',
            `UserLname`='$UserLname',
            `Password`='$Password',
            `Email`='$Email',
            `Birthday`='$Birthday',
            `Address`='$Address',
            `City`='$City',
            `State`='$State',
            `ZipCode`='$ZipCode'
        WHERE UserID=$id";
        }
        $result = false;
        if (mysqli_query($this->db->conn, $sql)) {
            $result = true;
        }
        return json_encode($result);
    }



    public function delete(int $id)
    {
        $sql = "DELETE FROM `user` WHERE UserID = $id";
        $result = false;
        if (mysqli_query($this->db->conn, $sql)) {
            $result = true;
        }
        return json_encode($result);
    }



    // Update Username
    public function updateUsername($userId, $newUsername)
    {
        $sql = "UPDATE User SET Username = '$newUsername' WHERE UserID = '$userId'";
        $this->db->execute($sql);
    }
}

// $user = new User();
// $rs = $user->getUsers();
// foreach ($rs as $v) {
//     print $v['Username'];
// }