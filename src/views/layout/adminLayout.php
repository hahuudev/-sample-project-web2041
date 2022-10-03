<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous" async></script>

    <link rel="stylesheet" href="<?= DOMAIN ?>/public/css/admin.css">
</head>

<body>
    <div class="app">
        <div class="admin">
            <div class="pt-4 d-flex justify-content-between">
                <h4>Admin: HÀ HỮU</h4>
                <a href="<?= DOMAIN ?>" class="text-primary"><button class="btn btn-primary">Quay về trang Home</button></a>
            </div>

            <div class="wraper d-flex">
                <div class="sidebar list-group">
                    <a href="<?= DOMAIN ?>/admin" class="list-group-item list-group-item-action">
                        Trang chủ
                    </a>
                    <a href="<?= DOMAIN ?>/admin/products" class="list-group-item list-group-item-action">Quản trị sản phẩm</a>
                    <a href="<?= DOMAIN ?>/admin/categories" class="list-group-item list-group-item-action">Quản trị loại sản phẩm</a>
                    <a href="<?= DOMAIN ?>/admin/users" class="list-group-item list-group-item-action">Quản trị User</a>
                    <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
                </div>

                <div class="content">
                    <?php
                    $this->render($content, $props);
                    ?>

                </div>

            </div>
        </div>
    </div>
</body>

</html>