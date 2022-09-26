<?php
class Home extends Controller
{

    public function index()
    {
        $data = null;
        $this->homeModel = $this->model('Product');
        $products = $this->homeModel->getFullProducts();

        $data['props']['products'] = $products;
        $data['content'] = 'page/home';
        $this->render('layout/defaultLayout', $data);
    }
}
