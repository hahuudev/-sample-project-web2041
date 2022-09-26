<?php
class Auth extends Controller
{

    public function index()
    {
        $data = null;
        $data['content'] = 'page/login';
        $this->render('layout/noLayout', $data);
    }
}
