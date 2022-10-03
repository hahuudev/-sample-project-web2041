<?php

?>

<div class="home-page mt-4">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= DOMAIN ?>/public/img/banner.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= DOMAIN ?>/public/img/banner1.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="body grid">
        <div class="row app__content">
            <div class="col l-2">
                <nav class="category">
                    <h3 class="category-heading">
                        <i class="fas category-heading-icon fa-list"></i>
                        Danh mục
                    </h3>

                    <ul class="category-list">
                        <?php foreach ($categories as $key => $value) : ?>
                            <li class="category-item category-item-active">
                                <a href="#" class="category-item__link"><?= $value['name'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>

            <div class="col l-10 m-10 grid home-product">
                <div class="row no-gutter">
                    <?php foreach ($products as $key => $value) : ?>
                        <div class="col l-2-4 m-4 c-12">
                            <a href="<?= DOMAIN ?>/product/detail/tainghe" class="home-product-item">
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
                                        <span class="">Who</span>
                                        <span class="">Nhật Bản</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8 pagination d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</div>