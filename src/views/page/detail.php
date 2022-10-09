<div class="mt-4 " style="max-width: 900px; margin: 0 auto;">
    <div class="d-flex">
        <div class="home-product-item__img" style="width: 250px">
            <img src="<?= $products['image'] ?>" alt="" class="product__item-img">

            <div class="home-product-item__img-logo">
                <span class="a">43%</span>
                <span class="b">Giảm</span>
            </div>

            <div class="home-product-item__img-lable">
                <i class="fas fa-check"></i>
                <span class="">Yêu thích</span>
            </div>
        </div>

        <div class="ms-5" style="flex: 1">
            <h4 class="home-product-item__name">
                <?= $products['name'] ?>
            </h4>
            <div class="home-product-item__price">
                <span class="a">1.200.000 đ</span>
                <span class="b"><?= $products['price'] ?> đ</span>
            </div>
            <div class="">
                <button class="btn btn-primary">Mua ngay</button>
            </div>

            <div class="description mt-3">
                <p class="">h<?= $products['description'] ?></p>
            </div>
        </div>
    </div>

    <div class="">
        <input type="text">
    </div>
</div>