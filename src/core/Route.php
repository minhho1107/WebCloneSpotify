<?php 

class Route {
    protected $controller = 'Home';
    protected $action = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->getUrl();

        // Nếu user nhập controller tồn tại thì
        if (isset($url[0])) {
            if (file_exists('./src/Controllers/' .$url[0]. '.php')) {
                // gán controller đó
                $this->controller = $url[0];
            }
            unset($url[0]);
        }
        // Mặc định đang ở trang Home
        require_once './src/Controllers/' .$this->controller. '.php';

        $this->controller = new $this->controller;

        // Lọc action
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->action = $url[1];
            }
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $filter = filter_var($url);
            return explode('/', $filter);
        }
    }

}

?>