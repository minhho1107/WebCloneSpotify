<?php 
class Profile extends Controller {
    private $UserModel;

    public function __construct() {
        $this->UserModel = $this->model('User');
    }
    
    public function index($id) {
        // Lấy danh sách người dùng từ CSDL
        $user = $this->UserModel->getUserById($id);
        // $user = $users[$id];

        if (isset($_POST['newusername1'])) {
            // Lấy giá trị mới từ form
            // $newUsername = $_POST['newUsername'];
            // $userId = $_POST['id'];
            $newUsername = $_POST["newusername1"];
            // echo $newUsername;
            $userId = $user[0]['UserID'];
            $this->UserModel->updateUsername($userId, $newUsername);
        }
        $this->view('pages/Profile', [
            'id' => $user[0]['UserID'],
            'username' => $user[0]['Username']
        ]);
    }
}
