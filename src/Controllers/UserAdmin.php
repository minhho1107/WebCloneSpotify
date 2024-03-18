<?php 
class UserAdmin extends Controller {
    public function __construct() {
        $this->UserModel = $this->model('User');
    }
    public function index()
    {
        $user = $this->UserModel->getUsers();
        $this->view('Listener/indexAdmin', [
            'user' => $user,
            'Page' => 'UserManager'
        ]);
    }

    public function view_insert(){
        
        $this->view('Listener/indexAdmin',[
            'Page' => 'FormInsertUser',
        ]); 
    }
    public function create(){
        $result_mess = false;
        if (isset($_POST["submit"])){
            if(empty($_POST["Username"]) || empty($_POST["UserFname"]) || empty($_POST["UserLname"]) || empty($_POST["Password"]) || empty($_POST["Email"]) || empty($_POST["Birthday"]) || empty($_POST["Address"]) || empty($_POST["City"]) || empty($_POST["State"]) || empty($_POST["ZipCode"]) || empty($_FILES["UserImage"])){
                $this->view("Listener/indexAdmin",[
                    "Page" =>"FormInsertUser",
                    "result"=>$result_mess,
                    "message"=>"Vui lòng điền đầy đủ thông tin!",
                ]);
            } else {
                $data = [
                    'Username' => $_POST["Username"],
                    'UserFname' => $_POST["UserFname"],
                    'UserLname' => $_POST["UserLname"],
                    'Password' => $_POST["Password"],
                    'Email' => $_POST["Email"],
                    'Birthday' => $_POST["Birthday"],
                    'Address' => $_POST["Address"],
                    'City' => $_POST["City"], 
                    'State' => $_POST["State"], 
                    'ZipCode' => $_POST["ZipCode"], 
                    'UserImage' => addslashes(file_get_contents($_FILES["UserImage"]["tmp_name"])), 
                ];
    
                $kq = $this->UserModel->create($data);
                $this->view("Listener/indexAdmin",[
                    "Page" =>"FormInsertUser",
                    "result"=>$kq,
                    "message"=>"Thêm thành công!",
                ]);
            }
        }
    }
    
    public function edit($id){
        $this->view("Listener/indexAdmin",[
            "Page" =>"FormUpdateUser",
            "edit" => $this->UserModel->edit($id),
        ]);
    }  

    public function update($id){
        $result_mess = false;
        if (isset($_POST["submit"])){
            $image = !empty($_FILES["UserImage"]["tmp_name"]) ? addslashes(file_get_contents($_FILES["UserImage"]["tmp_name"])) : 'None';
            $data = [
                'Username' => $_POST["Username"],
                'UserFname' => $_POST["UserFname"],
                'UserLname' => $_POST["UserLname"],
                'Password' => $_POST["Password"],
                'Email' => $_POST["Email"],
                'Birthday' => $_POST["Birthday"],
                'Address' => $_POST["Address"],
                'City' => $_POST["City"], 
                'State' => $_POST["State"], 
                'ZipCode' => $_POST["ZipCode"], 
                'UserImage' => $image, 
            ];

                $kq = $this->UserModel->update($id, $data);
                $this->view("Listener/indexAdmin",[
                    "Page" =>"FormUpdateUser",
                    "result"=>$kq,
                    "edit" => $this->UserModel->edit($id),
                ]);
        }
    }

    public function delete($id){
        $kq = $this->UserModel->delete($id);
        $user = $this->UserModel->getUsers();
        $this->view('Listener/indexAdmin', [
            'user' => $user,
            'Page' => 'UserManager'
        ]);
    }
}
