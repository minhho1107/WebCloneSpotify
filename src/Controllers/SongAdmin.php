<?php 
class SongAdmin extends Controller {
    public function __construct() {
        $this->SongModel = $this->model('Song');
    }
    public function index()
    {
        $song = $this->SongModel->getSongs();
        $this->view('Listener/indexAdmin', [
            'song' => $song,
            'Page' => 'SongManager'
        ]);
    }

    public function view_insert(){
        
        $this->view('Listener/indexAdmin',[
            'Page' => 'FormInsertSong',
        ]); 
    }
    public function create(){
        $result_mess = false;
        if (isset($_POST["submit"])){
            if(empty($_POST["SongName"]) || empty($_POST["AlbumID"]) || empty($_POST["SongDate"]) || empty($_POST["SongLength"]) || empty($_POST["SongLyric"]) || empty($_FILES["SongImage"]) || empty($_POST["SongAudio"])){
                $this->view("Listener/indexAdmin",[
                    "Page" =>"FormInsertSong",
                    "result"=>$result_mess,
                    "message"=>"Vui lòng điền đầy đủ thông tin!",
                ]);
            } else {
                $data = [
                    'SongName' => $_POST["SongName"],
                    'AlbumID' => $_POST["AlbumID"],
                    'SongDate' => $_POST["SongDate"],
                    'SongLength' => $_POST["SongLength"],
                    'SongLyric' => $_POST["SongLyric"],
                    'SongImage' => addslashes(file_get_contents($_FILES["SongImage"]["tmp_name"])), 
                    'SongAudio' => $_POST["SongAudio"], 
                ];
                $kq = $this->SongModel->create($data);
                $this->view("Listener/indexAdmin",[
                    "Page" =>"FormInsertSong",
                    "result"=>$kq,
                    "message"=>"Thêm thành công!",
                ]);
            }
        }
    }
    
    public function edit($id){
        $this->view("Listener/indexAdmin",[
            "Page" =>"FormUpdateSong",
            "edit" => $this->SongModel->edit($id),
        ]);
    }  

    public function update($id){
        $result_mess = false;
        if (isset($_POST["submit"])){
            $image = !empty($_FILES["SongImage"]["tmp_name"]) ? addslashes(file_get_contents($_FILES["SongImage"]["tmp_name"])) : 'None';

                $data = [
                    'SongName' => $_POST["SongName"],
                    'AlbumID' => $_POST["AlbumID"],
                    'SongDate' => $_POST["SongDate"],
                    'SongLength' => $_POST["SongLength"],
                    'SongLyric' => $_POST["SongLyric"],
                    'SongImage' => $image, 
                    'SongAudio' => $_POST["SongAudio"],
                ];

                $kq = $this->SongModel->update($id, $data);
                $this->view("Listener/indexAdmin",[
                    "Page" =>"FormUpdateSong",
                    "result"=>$kq,
                    "edit" => $this->SongModel->edit($id),
                ]);
        }
    }

    public function delete($id){
        $kq = $this->SongModel->delete($id);
        $song = $this->SongModel->getSongs();
        $this->view('Listener/indexAdmin', [
            'song' => $song,
            'Page' => 'SongManager'
        ]);
    }
}
