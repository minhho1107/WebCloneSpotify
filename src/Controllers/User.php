<?php
class User extends Controller
{
    private $userModel;

    function __construct()
    {
        $this->userModel = $this->model('User');
    }

    function login()
    {
        // session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userModel->getUserByUsername($username);

            if ($user && ($password == $user[0]['Password'])) {
                // session_start();
                $_SESSION['user'] = $user;
                $_SESSION['userId'] = $user[0]['UserID'];
                $this->setCookie($username);

                if ($user[0]['Role'] == '1') {
                    header('Location: /Spotify');
                    exit;
                } else {
                    header('Location: /Spotify/AdminDashBoardController');
                    exit;
                }
            } else {
                $errorMessage = 'Invalid username or password.';
                echo "<script>
                alert('$errorMessage');
                window.location.replace('http://localhost/Spotify/src/Views/pages/Login.php');
                </script>";
                // header('Location: /Spotify/src/Views/pages/Login.php');
                // $this->view('pages/Login', ['errorMessage' => $errorMessage]);
                exit;
            }
        }
        // $this->view('pages/Login');
    }

    function logout()
    {
        // session_start();
        // unset($_SESSION['user']);
        session_unset();
        session_destroy();

        header('Location: /Spotify');
        exit();
    }

    function signup()
    {
        // session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // if (empty($_POST["Username"]) || empty($_POST["UserFname"]) || empty($_POST["UserLname"]) || empty($_POST["Password"]) || empty($_POST["Email"]) || empty($_POST["Birthday"]) || empty($_POST["Address"]) || empty($_POST["City"]) || empty($_POST["State"]) || empty($_POST["ZipCode"]) || empty($_FILES["UserImage"])) {
            // } else {
            $data = [
                // 'Username' => $_POST["Username"],
                // 'UserFname' => $_POST["UserFname"],
                // 'UserLname' => $_POST["UserLname"],
                // 'Password' => $_POST["Password"],
                // 'Email' => $_POST["Email"],
                // 'Birthday' => $_POST["Birthday"],
                // 'Address' => $_POST["Address"],
                // 'City' => $_POST["City"],
                // 'State' => $_POST["State"],
                // 'ZipCode' => $_POST["ZipCode"],
                // 'UserImage' => addslashes(file_get_contents($_FILES["UserImage"]["tmp_name"])),

                'Username' => $_POST["email"],
                'UserFname' => $_POST["name"],
                'UserLname' => $_POST["name"],
                'Password' => $_POST["password"],
                'Email' => $_POST["email"],
                'Birthday' => '2000-01-01',
                'Address' => '271 An Duong Vuong',
                'City' => 'Ho Chi Minh',
                'State' => 'Viet Nam',
                'ZipCode' => '70000',
                'UserImage' => 'None',
            ];
            $result = $this->userModel->create($data);
            if ($result) {
                // header('Location: /Spotify/src/Views/pages/Login.php');

                // $user[] = $data;
                $user = $this->userModel->getUserByUsername($data['Username']);

                $_SESSION['user'] = $user;

                $this->setCookie($data['Username']);

                // header('Location: /Spotify');
                echo "<script>window.location.replace('http://localhost/Spotify/src/Views/pages/Login.php');</script>";
            }
            // }
        }
    }

    function setCookie($username)
    {
        $user = $this->userModel->getUserByUsername($username);

        $cookies = $_COOKIE;
        $userCookies = array();
        $count = 0;

        $userArray = array(
            'UserID' => $user[0]['UserID'],
            'Username' => $user[0]['Username']
        );
        $userArrayEncoded = json_encode($userArray);

        if (isset($_COOKIE['user1'])) {
            $x = FALSE;
            foreach ($cookies as $name => $value) {
                if (strpos($name, 'user') === 0) {
                    $userCookies[] = $name;
                    $count++;
                }
            }
            foreach ($cookies as $name => $value) {
                if (strpos($name, 'user') === 0) {
                    if (json_decode($value, true)['UserID'] === $user[0]['UserID']) {
                        $x = TRUE;
                        break;
                    }
                }
            }
            if (!$x) {
                $newUsername = 'user' . ($count + 1);
                setcookie($newUsername, $userArrayEncoded, time() + (86400 * 30), "/");
            }
        } else {
            $newUsername = 'user' . ($count + 1);
            setcookie($newUsername, $userArrayEncoded, time() + (86400 * 30), "/");
        }
    }
}
