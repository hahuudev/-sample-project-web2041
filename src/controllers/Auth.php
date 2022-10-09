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
        $data['props'] = [];
        $data['content'] = 'page/login';
        $this->render('layout/noLayout', $data);
    }

    public function submit()
    {
        $request = new Request();
        $email = ($request->getFields()['email']);
        $password = ($request->getFields()['password']);
        $userDb = $this->userModel->getUserByEmail($email);

        if (!$userDb) {
            header("Location:  $this->route?error=Sai username hoặc password");
        }
        if (!password_verify($password, $userDb['password'])) {
            header("Location:  $this->route?error=Sai username hoặc password");
        } else {

            $userLogin['username'] = $userDb['username'];
            $userLogin['email'] = $userDb['email'];
            $userLogin['isAdmin'] = $userDb['is_Admin'];
            $_SESSION['user'] = $userLogin;
            header("Location:    $this->domain");
        }
    }

    public function logout()
    {
        if (!isset($_SESSION['user']))  header("Location:  $this->route");
        unset($_SESSION['user']);
        header("Location:  $this->route");
    }

    public function resgister()
    {
        // if (isset($_SESSION['user'])) header("Location:    $this->domain");
        $data = null;
        $data['props'] = [];
        $data['content'] = 'page/resgister';
        $this->render('layout/noLayout', $data);
    }

    public function handleResgiter()
    {
        $request = new Request();
        $data = ($request->getFields());

        $username = $data['username'];
        $email = $data['email'];
        $password = password_hash($data['password'], PASSWORD_BCRYPT);

        $userDb = $this->userModel->getUserByEmail($email);
        // if (!$username || $email || !$password) header('location: resgister_form.php?error="Bạn thiếu username hoặc password');

        if ($userDb) {
            header("Location:  $this->route/resgister?error=Email đã tồn tại");
        }

        $this->userModel->addUser($username, $email, $password);
        header("Location: $this->route");
    }

    public function update($slug = '')
    {
        if (!isset($_SESSION['user'])) header("Location:    $this->domain");
        $data = null;
        $user = $this->userModel->getUserbyUsername($slug);
        $data['props']['user'] = $user;
        $data['content'] = 'page/update';
        $this->render('layout/noLayout', $data);
    }

    public function handleUpdate()
    {
        $request = new Request();
        $data = ($request->getFields());

        $id = $data['id'];
        $username = $data['username'];
        $password = password_hash($data['password'], PASSWORD_BCRYPT);
        $this->userModel->updateUser($id, $username, $password);
        $_SESSION['user']['username'] = $username;
        header("Location: $this->domain");
    }
}
