<?php
class App
{
    private $__controller, $__action, $__params;

    function __construct()
    {
        $this->__controller = 'home';
        $this->__action = 'index';
        $this->__params = [];

        $this->handleUrl();
    }

    public function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/';
        }

        return $url;
    }

    public function handleUrl()
    {
        $url = $this->getUrl();

        $urlArr = array_filter(explode('/', $url));
        $urlArr = array_values($urlArr);
        // echo '<pre>';
        // print_r($urlArr);
        // echo '</pre>';

        // Xử lý controller
        if (!empty($urlArr[0])) {

            $this->__controller = ucfirst($urlArr[0]);
        } else {
            $this->__controller = ucfirst($this->__controller);
        }

        if (file_exists('src/controllers/' . $this->__controller . '.php')) {
            require_once 'controllers/' .  $this->__controller  . '.php';

            //Kiểm tra class $this->__controller tồn tại
            if (class_exists($this->__controller)) {
                $this->__controller = new $this->__controller();
                unset($urlArr[0]);
            } else {
                echo 'page not pound';
            }
        } else {
            echo 'page not pound';
            return;
        }

        // Xử lý actions
        if (!empty($urlArr[1])) {
            $this->__action = $urlArr[1];
            unset($urlArr[1]);
        }

        //Xử lý params
        $this->__params = array_values($urlArr);

        //Kiểm tra method tồn tại
        if (method_exists($this->__controller, $this->__action)) {
            call_user_func_array([$this->__controller, $this->__action], $this->__params);
        } else {
            echo 'page not pound';
        }
    }
}
