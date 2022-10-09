<main class="main mt-2">
    <a href="<?= DOMAIN ?>/auth/resgister" class="bg-warning">
        <button class="btn btn-primary">Thêm user mới</button>
    </a>

    <table class="mt-2 table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>               
                <th scope="col">Optionns</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $key => $value) : ?>
                <tr>
                    <th scope="row"><?= $value['id'] ?></th>
                    <th scope="row"><?= $value['username'] ?></th>
                    <td><?= $value['email'] ?></td>
             
                    <td>
                        <a href="delete_user?id=<?= $value['id'] ?>" onclick="return confirm('bạn có muốn xóa không')">
                            <button class="btn btn-primary">Delete</button>
                        </a>

                        <a class="dropdown-item" href="/web204/auth/update/<?=$value['username']?>" class="ml-3">
                            <button class="btn btn-primary">Update</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>