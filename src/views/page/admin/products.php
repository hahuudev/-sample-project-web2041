<main class="main mt-2">
    <a href="<?= DOMAIN ?>/admin/addProduct" class="bg-warning">
        <button class="btn btn-primary">Thêm sản phẩm</button>
    </a>

    <table class="mt-2 table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">price</th>
                <th scope="col">số lượng</th>
                <th scope="col">LikeCount</th>
                <th scope="col">Image</th>
                <th scope="col">Category</th>
                <th scope="col">Optionns</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $key => $value) : ?>
                <tr>
                    <th scope="row"><?= $value['name'] ?></th>
                    <td><?= $value['category'] ?></td>
                    <td><?= $value['price'] ?></td>
                    <td><?= $value['sl'] ?></td>
                    <td><?= $value['likeCount'] ?></td>
                    <td><img src="<?= $value['image'] ?>" alt="" class="" width="50px" height=""></td>
                    <td><?= $value['description'] ?></td>
                    <td>
                        <a href="delete_product?id=<?= $value['id'] ?>" onclick="return confirm('bạn có muốn xóa không')">
                            <button class="btn btn-primary">Delete</button>
                        </a>

                        <a href="update_product?id=<?= $value['id'] ?>" class="ml-3">
                            <button class="btn btn-primary">Update</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>