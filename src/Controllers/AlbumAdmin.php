<?php
class AlbumAdmin extends Controller
{
    public function __construct()
    {
        $this->AlbumModel = $this->model('Album');
    }
    public function index()
    {
        $album = $this->AlbumModel->getAlbums();
        $this->view('Listener/indexAdmin', [
            'album' => $album,
            'Page' => 'AlbumManager'
        ]);
    }

    public function view_insert()
    {

        $this->view('Listener/indexAdmin', [
            'Page' => 'FormInsertAlbum',
        ]);
    }

    public function create()
    {
        $result_mess = false;
        if (isset($_POST["submit"])) {
            if (empty($_POST["AlbumName"]) || empty($_POST["ReleaseDate"]) || empty($_POST["AmountSong"]) || empty($_POST["AlbumLength"]) || empty($_FILES["AlbumImage"])) {
                $this->view("Listener/indexAdmin", [
                    "Page" => "FormInsertAlbum",
                    "result" => $result_mess,
                ]);
            } else {
                $data = [
                    'AlbumName' => $_POST["AlbumName"],
                    'ReleaseDate' => $_POST["ReleaseDate"],
                    'AmountSong' => $_POST["AmountSong"],
                    'AlbumLength' => $_POST["AlbumLength"],
                    'AlbumImage' => addslashes(file_get_contents($_FILES["AlbumImage"]["tmp_name"])),

                ];
                $kq = $this->AlbumModel->create($data);
                $this->view("Listener/indexAdmin", [
                    "Page" => "FormInsertAlbum",
                    "result" => $kq,
                    "message" => "Thêm thành công!",
                ]);
            }
        }
    }


    public function edit($id)
    {
        $this->view("Listener/indexAdmin", [
            "Page" => "FormUpdateAlbum",
            "edit" => $this->AlbumModel->edit($id),
        ]);
    }

    public function update($id)
    {
        $result_mess = false;
        if (isset($_POST["submit"])) {

            $image = !empty($_FILES["AlbumImage"]["tmp_name"]) ? addslashes(file_get_contents($_FILES["AlbumImage"]["tmp_name"])) : 'None';
            $data = [
                'AlbumName' => $_POST["AlbumName"],
                'ReleaseDate' => $_POST["ReleaseDate"],
                'AmountSong' => $_POST["AmountSong"],
                'AlbumLength' => $_POST["AlbumLength"],
                'AlbumImage' => $image,
            ];
            $kq = $this->AlbumModel->update($id, $data);

            $this->view("Listener/indexAdmin", [
                "Page" => "FormUpdateAlbum",
                "result" => $kq,
                "edit" => $this->AlbumModel->edit($id),
            ]);
        }
    }

    public function delete($id)
    {
        $kq = $this->AlbumModel->delete($id);
        $album = $this->AlbumModel->getAlbums();
        $this->view('Listener/indexAdmin', [
            'album' => $album,
            'Page' => 'AlbumManager',
            'result' => $kq,
        ]);
    }
}
