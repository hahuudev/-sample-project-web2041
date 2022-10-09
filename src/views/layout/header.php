<?php

?>
<header class="header d-flex" style="height: 100px;">
    <div class="m-auto d-flex align-items-center justify-content-between " style="max-width: 1200px">
        <a href="<?= DOMAIN ?>" class="text-light fs-2" style="width: 300px">X-Shop</a>

        <div class="d-flex flex-column align-items-center justify-content-center" style="flex: 1">
            <form class="form d-flex " style="width: 500px;height: 40px" action="<?= DOMAIN ?>/product/search" method="GET">
                <input type="text" name="q" class="form-control" placeholder="Bạn muốn tìm sản phẩm gì?" required>

                <button type="submit" class="ms-2 btn btn-primary">Search</button>
            </form>

            <nav class="nav ">
                <a class="nav-link text-light active" aria-current="page" href="index.php">Trang chủ</a>
                <a class="nav-link text-light" href="product">Product</a>
                <a class="nav-link text-light" href="product">máy tính</a>
                <a class="nav-link text-light" href="product">điện thoại</a>
                <a class="nav-link text-light" href="product">quần áo</a>
            </nav>
        </div>



        <div class=" d-flex" style="width: 300px">
            <div class="cart ms-5"><img src="<?= DOMAIN ?>/public/img/cart.png" width="30" alt=""></div>
            <?php if (!isset($_SESSION['user']))  echo '<a class="ms-5 d-block nav-link " href="/web204/auth"><button type="button" class="btn btn-success">Đăng nhập</button></a>' ?>

            <?php if (isset($_SESSION['user'])) {
                $data = null;
                $data['username'] = $_SESSION['user']['username'];
                $data['content'] = '';
                $this->render('layout/UserDropdow', $data);
            }
            ?>
        </div>
    </div>

</header>