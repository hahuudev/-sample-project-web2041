<?php
class Admin extends Controller
{
    private $domain = DOMAIN;

    public function index()
    {
        if (!isset($_SESSION['user']['isAdmin'])) {
            header("Location: $this->domain");
        }
        $data = null;
        $this->homeModel = $this->model('Product');
        $products = $this->homeModel->getFullProducts();

        $data['props']['products'] = $products;
        $data['content'] = 'page/admin';
        $this->render('layout/noLayout', $data);
    }

    public function detail()
    {
        $request = new Request();
        var_dump($request->getMethod());
    }
}
