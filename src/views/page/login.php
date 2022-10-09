

<form class="" action="auth/submit" method="post" style="max-width: 700px; margin: 0 auto;">
    <h4 class="" style="text-align: center;">Login vào XShop</h4>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name='email' class="form-control" id="exampleInputEmail1" required>
        <div class="text-danger" class="form-text"></div>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name='password' class="form-control" id="exampleInputPassword1">
        <div class="text-danger" class="form-text"></div>
    </div>

    <div class="mb-3">
        <span class="text-danger"></span>
    </div>

    <div class="d-flex w-full">
        <button type="submit" class="btn btn-primary">Login</button>
        <div class="ms-4">
            Bạn chưa có tài khoản?
            <a href="<?= DOMAIN ?>/auth/resgister" class="">Resgiter</a>
        </div>
    </div>
</form>