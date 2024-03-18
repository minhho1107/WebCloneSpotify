<?php
class ArtistAdmin extends Controller
{
    public function __construct()
    {
        $this->ArtistModel = $this->model('Artist');
    }
    public function index()
    {
        $artist = $this->ArtistModel->getArtists();
        $this->view('Listener/indexAdmin', [
            'artist' => $artist,
            'Page' => 'ArtistManager'
        ]);
    }

    public function view_insert()
    {

        $this->view('Listener/indexAdmin', [
            'Page' => 'FormInsertArtist',
        ]);
    }

    public function create()
    {
        $result_mess = false;
        if (isset($_POST["submit"])) {
            if (empty($_POST["ArtistName"]) || empty($_POST["ArtistDescription"]) || empty($_POST["ArtistDob"]) || empty($_FILES["ArtistImage"])) {
                $this->view("Listener/indexAdmin", [
                    "Page" => "FormInsertArtist",
                    "result" => $result_mess,
                ]);
            } else {
                $data = [
                    'ArtistName' => $_POST["ArtistName"],
                    'ArtistDescription' => $_POST["ArtistDescription"],
                    'ArtistDob' => $_POST["ArtistDob"],
                    'ArtistImage' => addslashes(file_get_contents($_FILES["ArtistImage"]["tmp_name"])),

                ];
                $kq = $this->ArtistModel->create($data);
                $this->view("Listener/indexAdmin", [
                    "Page" => "FormInsertArtist",
                    "result" => $kq,
                    "message" => "Thêm thành công!",
                ]);
            }
        }
    }



    public function edit($id)
    {
        $this->view("Listener/indexAdmin", [
            "Page" => "FormUpdateArtist",
            "edit" => $this->ArtistModel->edit($id),
        ]);
    }

    public function update($id)
    {
        $result_mess = false;
        if (isset($_POST["submit"])) {
            $image = !empty($_FILES["ArtistImage"]["tmp_name"]) ? addslashes(file_get_contents($_FILES["ArtistImage"]["tmp_name"])) : 'None';

            $data = [
                'ArtistName' => $_POST["ArtistName"],
                'ArtistDescription' => $_POST["ArtistDescription"],
                'ArtistDob' => $_POST["ArtistDob"],
                'ArtistImage' => $image,
            ];
            $kq = $this->ArtistModel->update($id, $data);
            $this->view("Listener/indexAdmin", [
                "Page" => "FormUpdateArtist",
                "result" => $kq,
                "edit" => $this->ArtistModel->edit($id),
            ]);
        }
    }

    public function delete($id)
    {
        $kq = $this->ArtistModel->delete($id);
        $artist = $this->ArtistModel->getArtists();
        $this->view('Listener/indexAdmin', [
            'artist' => $artist,
            'Page' => 'ArtistManager',
        ]);
    }
}
