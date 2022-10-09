
<h4 class="text-center text-light">Form Thêm Mới Category</h4>

<form class = "addProduct" action="<?= DOMAIN ?>/admin/handleAddCategory" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Mời nhập tên category</label>
        <input type="text" class="form-control" name="name" required>
    </div>

    <div class="mb-3 form-floating">
        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px" required></textarea>
        <label for="description " class="text-primary">Mô tả về Category</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
</form>