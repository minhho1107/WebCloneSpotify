<?php 
class PodcastAdmin extends Controller {
    public function __construct() {
        $this->PodcastModel = $this->model('Podcast');
    }
    public function index()
    {
        $podcast = $this->PodcastModel->getPodcast();
        $this->view('Listener/indexAdmin', [
            'podcast' => $podcast,
            'Page' => 'PodcastManager'
        ]);
    }

    public function view_insert(){
        
        $this->view('Listener/indexAdmin',[
            'Page' => 'FormInsertPodcast',
        ]); 
    }
    public function create(){
        $result_mess = false;
        if (isset($_POST["submit"])){
            if(empty($_POST["PodcastName"]) || empty($_POST["PodcastAuthor"]) || empty($_POST["PodcastDescription"]) || empty($_FILES["PodcastImage"])){
                $this->view("Listener/indexAdmin",[
                    "Page" =>"FormInsertPodcast",
                    "result"=>$result_mess,
                ]);
            } else {
                $data = [
                    'PodcastName' => $_POST["PodcastName"],
                    'PodcastAuthor' => $_POST["PodcastAuthor"],
                    'PodcastDescription' => $_POST["PodcastDescription"],
                    'PodcastImage' => addslashes(file_get_contents($_FILES["PodcastImage"]["tmp_name"])), 
                ];
                $kq = $this->PodcastModel->create($data);
                $this->view("Listener/indexAdmin",[
                    "Page" =>"FormInsertPodcast",
                    "result"=>$kq,
                ]);
            }
        }
    }
    
    public function edit($id){
        $this->view("Listener/indexAdmin",[
            "Page" =>"FormUpdatePodcast",
            "edit" => $this->PodcastModel->edit($id),
        ]);
    }  

    public function update($id){
        $result_mess = false;
        if (isset($_POST["submit"])){
            $image = !empty($_FILES["PodcastImage"]["tmp_name"]) ? addslashes(file_get_contents($_FILES["PodcastImage"]["tmp_name"])) : 'None';

                $data = [
                    'PodcastName' => $_POST["PodcastName"],
                    'PodcastAuthor' => $_POST["PodcastAuthor"],
                    'PodcastDescription' => $_POST["PodcastDescription"],
                    'PodcastImage' => $image,
                ];
                $kq = $this->PodcastModel->update($id, $data);
                $this->view("Listener/indexAdmin",[
                    "Page" =>"FormUpdatePodcast",
                    "result"=>$kq,
                    "edit" => $this->PodcastModel->edit($id),
                ]);
        }
    }

    public function delete($id){
        $kq = $this->PodcastModel->delete($id);
        $podcast = $this->PodcastModel->getPodcast();
        $this->view('Listener/indexAdmin', [
            'podcast' => $podcast,
            'Page' => 'PodcastManager'
        ]);
    }
    
    
}
