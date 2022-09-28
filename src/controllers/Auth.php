<?php
class Auth extends Controller
{
    public $userModel, $route = DOMAIN . '/auth', $domain  = DOMAIN;

    public function __construct()
    {
        $this->userModel = $this->model('UserModel');
    }

    public function index()
    {
        if (isset($_SESSION['user'])) header("Location:    $this->domain");
        $data = null;
        $data['content'] = 'page/login';
        $this->render('layout/noLayout', $data);
    }

    public function submit()
    {
        $request = new Request();
        $username = ($request->getFields()['username']);
        $password = ($request->getFields()['password']);
        $userDb = $this->userModel->getUserByUsername($username);

        if (!$userDb) {
            header("Location:  $this->route?error=Sai username hoặc password");
        }
        if ($password != $userDb['password']) {
            header("Location:  $this->route?error=Sai username hoặc password");
        }
        $userLogin['username'] = $userDb['username'];
        $userLogin['isAdmin'] = $userDb['is_Admin'];
        $_SESSION['user'] = $userLogin;;
        header("Location:    $this->domain");
    }

    public function logout()
    {
        if (!isset($_SESSION['user']))  header("Location:  $this->route");
        unset($_SESSION['user']);
        header("Location:  $this->route");
    }
}
