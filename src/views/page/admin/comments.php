<main class="main mt-2">
    <table class="mt-2 table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Tổng số bình luận</th>
                <th scope="col">Ngày mới nhất</th>
                <th scope="col">Ngày cũ nhất</th>
                <th scope="col">Optionns</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comments as $key => $value) : ?>
                <tr>
                    <th><?= $value['id'] ?></th>
                    <th><?= $value['name'] ?></th>
                    <td><?= $value['sl'] ?></td>
                    <td><?= $value['created_at'] ?></td>
                    <td><?= $value['updated_at'] ?></td>
                    <td>


                        <a href="<?= DOMAIN ?>/admin/comments/<?=$value['id'] ?>" class="ml-3">
                            <button class="btn btn-primary">Chi tiết</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>