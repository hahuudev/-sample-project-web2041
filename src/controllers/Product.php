<?php
class Product extends Controller
{

    public function index()
    {
        $data = null;

        $data['props']['products'] = '';
        $data['content'] = 'page/detail';
        $this->render('layout/defaultLayout', $data);
    }
    public function detail()
    {
        echo 'hi';
    }
}
