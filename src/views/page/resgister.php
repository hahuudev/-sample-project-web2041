<form class="" action="handleResgiter" method="post" style="max-width: 700px; margin: 0 auto;">
    <h4 class="" style="text-align: center;">Đăng ký tài khoản vào X-Shop</h4>

    <div class="mb-3">
        <label for="username" class="form-label">Mời nhập username</label>
        <input type="text" name='username' class="form-control" id="username" required>
        <div class="text-danger" class="form-text"></div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mời nhập email</label>
        <input type="email" name='email' class="form-control" id="exampleInputEmail1" required>
        <div class="text-danger" class="form-text"></div>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mời nhập password</label>
        <input type="password" name='password' class="form-control" id="exampleInputPassword1" required>
        <div class="text-danger" class="form-text"></div>
    </div>

    <div class="d-flex w-full">
        <button type="submit" class="btn btn-primary">Resgiter</button>
        <div class="ms-4">
            Bạn đã có tài khoản?
            <a href="<?= DOMAIN ?>/auth" class="">Resgiter</a>
        </div>
    </div>
</form>