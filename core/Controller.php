<?php
class Controller
{

    public function model($model)
    {
        if (file_exists(_DIR_ROOT . '/src/models/' . $model . '.php')) {
            require_once _DIR_ROOT . '/src/models/' . $model . '.php';
            if (class_exists($model)) {
                $model = new $model();
                return $model;
            }
        }

        return false;
    }

    public function render($view, $data = [])
    {
        extract($data);
        if (file_exists(_DIR_ROOT . '/src/views/' . $view . '.php')) {
            require_once _DIR_ROOT . '/src/views/' . $view . '.php';
        }
    }

    public function upLoatFile($file)
    {
        $save_file = '';

        if ($file['tmp_name'] != '') {
            $foderName = 'public/img/products/';
            // Nối tên file với một đoạn mã duy nhất 
            $fileName = uniqid() . $file['name'];
            // Nội dung file 
            $file = $file['tmp_name'];
            if (move_uploaded_file($file, $foderName . $fileName)) {
                // Nếu lưu thành công thì gán vào $save
                $save_file = DOMAIN . '/' . $foderName . $fileName;
            }
        }

        return $save_file;
    }
}
