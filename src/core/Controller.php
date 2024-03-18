<?php

// Base controller, cấu hình chung cho các Controller
class Controller
{
    public function model($model)
    {
        require_once './src/Models/' . $model . '.php';
        $model .= "Model";
        return new $model;
    }

    // public function view($view, $data = [])
    // {
    //     if (file_exists('./src/Views/' .$view. '.php')) {
    //         require_once './src/Views/' .$view . '.php';
    //     } else {
    //         die('not view');
    //     }
    // }

    public function view($view, $data = [], $return = false)
    {
        if (file_exists('./src/Views/' . $view . '.php')) {
            if ($return) {
                ob_start();
                require_once './src/Views/' . $view . '.php';
                $output = ob_get_clean();
                return $output;
            } else {
                require_once './src/Views/' . $view . '.php';
            }
        } else {
            die('Not view');
        }
    }
}
