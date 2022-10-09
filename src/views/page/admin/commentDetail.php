<main class="main mt-2">
    <a href="<?= DOMAIN ?>/admin/comments" class="bg-warning">
        <button class="btn btn-primary">Trở lại</button>
    </a>

    <h3 class="">Tên sản phẩm: <?= $comments[0]['name'] ?> </h3>
    <table class="mt-2 table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Ngày mới nhất</th>
                <th scope="col">Ngày cũ nhất</th>
                <th scope="col">Optionns</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comments as $key => $value) : ?>
                <tr>
                    <th><?= $value['username'] ?></th>
                    <td><?= $value['content'] ?></td>
                    <td><?= $value['created_at'] ?></td>
                    <td><?= $value['updated_at'] ?></td>
                    <td>
                        <a href="<?= DOMAIN ?>/admin/delete_cmt?id=<?= $value['id'] ?>" class="ml-3">
                            <button class="btn btn-primary">Xóa bình luận</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>