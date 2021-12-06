<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<section class="bg-light text-center promos">
        <div class="container">
                <h2><a href="<?= generate_url('products'); ?>"><?= trans("new_arrivals"); ?></a></h2>
                <p><?php echo trans("latest_products_exp"); ?></p>
            <div class="pad20"></div>
            <div class="owl-carousel slide3 owl-theme noDots">
                <?php foreach ($latest_products as $product):  ?>
                <div class="item">
                        <h3><?php echo get_product_title($product); ?></h3>
                        <div class="box1">
                                <img src="<?php echo get_product_item_image($product); ?>" alt="<?php echo get_product_title($product); ?>" class="cover-img">
                        </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="pad20"></div>
        </div>
    </section>