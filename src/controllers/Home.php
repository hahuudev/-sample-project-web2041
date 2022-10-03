<?php
class Home extends Controller
{

    public function index()
    {
        $data = null;
        $this->homeModel = $this->model('Product');
        $products = $this->homeModel->getFullProducts();
        $categories = $this->homeModel->getFullCategories();
        $data['props']['products'] = $products;
        $data['props']['categories'] = $categories;
        $data['content'] = 'page/home';
        $this->render('layout/defaultLayout', $data);
    }

    public function detail()
    {
        $request = new Request();
        var_dump($request->getMethod());
    }
}
