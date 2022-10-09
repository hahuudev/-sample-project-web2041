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
    public function detail($id)
    {
        $this->ProductModel = $this->model('ProductModel');
        $products = $this->ProductModel->getProductById($id);
        $data['props']['products'] = $products;

        $data['content'] = 'page/detail';
        $this->render('layout/defaultLayout', $data);
    }

    public function search()
    {
        $this->ProductModel = $this->model('ProductModel');
        $products = $this->ProductModel->searchProduct($_GET['q']);

        $data['props']['products'] = $products ;

        $data['content'] = 'page/search';
        $this->render('layout/defaultLayout', $data);
    }
}
