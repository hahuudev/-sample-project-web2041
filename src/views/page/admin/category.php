<main class="main mt-2">
    <a href="<?= DOMAIN ?>/admin/addCategory" class="bg-warning">
        <button class="btn btn-primary">Thêm category</button>
    </a>

    <table class="mt-2 table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Optionns</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($categories as $key => $value) : ?>
                <tr>
                    <th scope="row"><?= $value['id'] ?></th>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['description'] ?></td>

                    <td>
                        <a href="delete_category?id=<?= $value['id'] ?>" onclick="return confirm('bạn có muốn xóa không')">
                            <button class="btn btn-primary">Delete</button>
                        </a>

                        <a href="update_category?id=<?= $value['id'] ?>" class="ml-3">
                            <button class="btn btn-primary">Update</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>