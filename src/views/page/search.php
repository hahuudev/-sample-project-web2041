<div class="col l-10 m-10 grid home-product">
    <form class="d-flex align-items-center" method="GET">
        <input type="hidden" name='q' value="<?= $keyWord ?>">
        <div class="">
            <p>Mời chọn danh mục</p>
            <select class="form-select" name="category" style="max-width: 250px; height: 30px">
                <option value="" selected>Tất cả danh mục</option>
                <?php foreach ($categories as $key => $value) : ?>
                    <option value="<?= $value['name'] ?>" <?= $value['name'] == $category ? 'selected' : null ?>>
                        <?= $value['name'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="ms-5">
            <p>Khoảng giá</p>
            <div class="d-flex align-items-center" style="max-width: 250px; height: 30px">
                <input type="text" name='start' class="form-control me-2" value="<?=$start?>">-
                <input type="text" name='end' class="form-control ms-2" value="<?=$end?>">
            </div>
        </div>

        <button class="btn btn-primary ms-4 mt-4" style=" height: 40px">Lọc</button>
    </form>

    <div class="row no-gutter">
        <h4 class="mt-3 ">Kết quả tìm kiếm: <?= $keyWord ?></h4>

        <?php if (empty($products)) echo "<p>Không có kết quả cho $keyWord </p>" ?>
        <?php foreach ($products as $key => $value) : ?>
            <div class="col l-2-4 m-4 c-12">
                <a href="<?= DOMAIN ?>/product/detail/<?= $value['id'] ?>/<?= str_replace(' ', '-', $value['name']) ?>" class="home-product-item">
                    <div class="home-product-item__img">
                        <img src="<?= $value['image'] ?>" alt="" class="product__item-img">

                        <div class="home-product-item__img-logo">
                            <span class="a">43%</span>
                            <span class="b">Giảm</span>
                        </div>

                        <div class="home-product-item__img-lable">
                            <i class="fas fa-check"></i>
                            <span class="">Yêu thích</span>
                        </div>
                    </div>
                    <h4 class="home-product-item__name">
                        <?= $value['name'] ?>
                    </h4>
                    <div class="home-product-item__price">
                        <span class="a">1.200.000 đ</span>
                        <span class="b"><?= $value['price'] ?> đ</span>
                    </div>

                    <div class="product__item-action">
                        <div class="product__action-icon">
                            <div class="product__action-icon-heart">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="">
                                <i class="fas fa-star yellow-color"></i>
                                <i class="fas fa-star yellow-color"></i>
                                <i class="fas fa-star yellow-color"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="">200 đã bán</span>
                        </div>
                        <div class="product__action-note">
                            <span class=""><?= $value['category'] ?></span>
                            <span class="">Nhật Bản</span>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>