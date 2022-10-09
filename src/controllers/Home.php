<?php
class Home extends Controller
{

    public function index()
    {

        $data = null;
        $this->homeModel = $this->model('ProductModel');
        $products = $this->homeModel->getFullProducts();
        $categories = $this->homeModel->getFullCategories();
        $data['props']['products'] = $products;
        $data['props']['categories'] = $categories;
        $data['content'] = 'page/home';
        $this->render('layout/defaultLayout', $data);
    }

    
}
