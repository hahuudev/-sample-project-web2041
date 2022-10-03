
<h4 class="text-center text-light">Form Thêm Mới Sản phẩm</h4>

<form class = "addProduct" action="<?= DOMAIN ?>/admin/handleAddProduct" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Mời nhập tên sản phẩm</label>
        <input type="text" class="form-control" name="name" required>
    </div>

    <div class="mb-3">
        <label for="color" class="form-label">Mời nhập giá tiền</label>
        <input type="text" class="form-control" name="price" required>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Mời nhập số lượng</label>
        <input type="number" class="form-control" name="sl" required>
    </div>


    <div class="mb-3">
        <label for="file" class="form-label">Mời chọn hình ảnh</label>
        <input type="file" class="form-control" name="avatar" required>
    </div>

    <div class="mb-3 d-flex ">
        <select class="form-select" name="category" required>
            <option selected>Mời chọn category</option>
            <?php foreach ($categories as $key => $value) : ?>
                <option value="<?= $value['name'] ?>"><?= $value['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3 form-floating">
        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px" required></textarea>
        <label for="description" class="text-primary">Mô tả sản phẩm</label>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
</form>