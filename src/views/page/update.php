<form class="" action="<?= DOMAIN ?>/auth/handleUpdate" method="post" style="max-width: 700px; margin: 0 auto;">
    <h4 class="" style="text-align: center;">Update trang cá nhân</h4>

    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <div class="mb-3">
        <label for="username" class="form-label">MUsername</label>
        <input type="text" name='username' class="form-control" value="<?= $user['username'] ?>" id="username" required>
        <div class="text-danger" class="form-text"></div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name='email' class="form-control" value="<?= $user['email'] ?>" id="exampleInputEmail1" required>
        <div class="text-danger" class="form-text"></div>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name='password' class="form-control" id="exampleInputPassword1" required>
        <div class="text-danger" class="form-text"></div>
    </div>

    <div class="d-flex w-full">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>