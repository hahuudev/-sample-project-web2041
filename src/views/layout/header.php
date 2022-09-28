<header class="header d-flex" style="height: 100px;">
    <div class="m-auto d-flex align-items-center justify-content-between " style="max-width: 1200px">
        <a href="home" class="text-red" style="width: 300px">Logo</a>

        <div class="d-flex flex-column align-items-center justify-content-center" style="flex: 1">
            <form class="form d-flex " style="width: 500px;height: 40px">
                <input type="email" class="form-control" placeholder="Bạn muốn tìm sản phẩm gì?">

                <button type="submit" class="btn text-light"><i class="bi bi-search"></i></button>
            </form>

            <nav class="nav">
                <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
                <a class="nav-link" href="product">Product</a>
                <a class="nav-link" href="product">máy tính</a>
                <a class="nav-link" href="product">điện thoại</a>
                <a class="nav-link" href="product">quần áo</a>
            </nav>
        </div>



        <div class=" d-flex" style="width: 300px">
            <?php if (!isset($_SESSION['user']))  echo '<a class="d-block nav-link " href="/web204/auth"><button type="button" class="btn btn-success">Đăng nhập</button></a>' ?>

            <?php if (isset($_SESSION['user']))  echo '
            <div class="dropdown ms-4">
                <img class=" dropdown-toggle rounded-circle" src="https://cf.shopee.vn/file/af21a72af277c6a11e1a35995e07b505" type="button" data-bs-toggle="dropdown" aria-expanded="false" width="40px" height="40px">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./admin">admin</a></li>
                    
                    <li><a class="dropdown-item" href="/web204/auth/logout">Đăng xuất</a></li>
                </ul>

            </div>' ?>
        </div>
    </div>

</header>