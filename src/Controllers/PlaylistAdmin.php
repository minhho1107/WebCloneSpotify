<?php 
class PlaylistAdmin extends Controller {
    public function __construct() {
        $this->PlaylistModel = $this->model('Playlist');
    }
    public function index()
    {
        $playlist = $this->PlaylistModel->getPlaylists();
        $this->view('Listener/indexAdmin', [
            'playlist' => $playlist,
            'Page' => 'PlaylistManager'
        ]);
    }

    public function view_insert(){
        
        $this->view('Listener/indexAdmin',[
            'Page' => 'FormInsertPlaylist',
        ]); 
    }
    public function create(){
        $result_mess = false;
        if (isset($_POST["submit"])){
            if(empty($_POST["PlaylistName"]) || empty($_POST["PlaylistDescription"]) || empty($_POST["AmountLike"]) || empty($_POST["AmountSong"]) || empty($_POST["PlaylistLength"]) || empty($_POST["CreateDate"]) || empty($_FILES["PlaylistImage"])){
                $this->view("Listener/indexAdmin",[
                    "Page" =>"FormInsertPlaylist",
                    "result"=>$result_mess,
                    "message"=>"Vui lòng điền đầy đủ thông tin!",
                ]);
            } else {
                $data = [
                    'PlaylistName' => $_POST["PlaylistName"],
                    'PlaylistDescription' => $_POST["PlaylistDescription"],
                    'AmountLike' => $_POST["AmountLike"],
                    'AmountSong' => $_POST["AmountSong"],
                    'PlaylistLength' => $_POST["PlaylistLength"],
                    'CreateDate' => $_POST["CreateDate"],
                    'PlaylistImage' => addslashes(file_get_contents($_FILES["PlaylistImage"]["tmp_name"])), 
                ];
                $kq = $this->PlaylistModel->create($data);
                $this->view("Listener/indexAdmin",[
                    "Page" =>"FormInsertPlaylist",
                    "result"=>$kq,
                    "message"=>"Thêm thành công!",
                ]);
            }
        }
    }
    
    public function edit($id){
        $this->view("Listener/indexAdmin",[
            "Page" =>"FormUpdatePlaylist",
            "edit" => $this->PlaylistModel->edit($id),
        ]);
    }  

    public function update($id){
        $result_mess = false;
        if (isset($_POST["submit"])){
            $image = !empty($_FILES["PlaylistImage"]["tmp_name"]) ? addslashes(file_get_contents($_FILES["PlaylistImage"]["tmp_name"])) : 'None';
            $data = [
                'PlaylistName' => $_POST["PlaylistName"],
                'PlaylistDescription' => $_POST["PlaylistDescription"],
                'AmountLike' => $_POST["AmountLike"],
                'AmountSong' => $_POST["AmountSong"],
                'PlaylistLength' => $_POST["PlaylistLength"],
                'CreateDate' => $_POST["CreateDate"],
                'PlaylistImage' => $image, 
            ];

                $kq = $this->PlaylistModel->update($id, $data);
                $this->view("Listener/indexAdmin",[
                    "Page" =>"FormUpdatePlaylist",
                    "result"=>$kq,
                    "edit" => $this->PlaylistModel->edit($id),
                ]);
        }
    }

    public function delete($id){
        $kq = $this->PlaylistModel->delete($id);
        $playlist = $this->PlaylistModel->getPlaylists();
        $this->view('Listener/indexAdmin', [
            'playlist' => $playlist,
            'Page' => 'PlaylistManager'
        ]);
    }
}
