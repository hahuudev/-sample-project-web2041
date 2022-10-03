<h4 class="text-center text-light">Form Thêm Mới Sản phẩm</h4>

<form class="addProduct" action="<?= DOMAIN ?>/admin/handleUpdateCategory" method="POST">
    <input type="hidden" class="form-control" name="id" value="<?= $category['id'] ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name" value="<?= $category['name'] ?>" required>
    </div>
   

    <div class="mb-3 form-floating">
        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px" required><?= $category['description'] ?>"</textarea>
        <label for="description">Mô tả sản phẩm</label>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
</form>