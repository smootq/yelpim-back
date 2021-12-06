<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>


<section class="bg1 text-center bg-light">
        <div class="container">
        <h2><?php echo trans("featured_products"); ?></h2>
            <p><?php echo trans("featured_products_exp"); ?></p>
            <div class="pad20"></div>
            <div class="owl-carousel slide2 owl-theme noDots">
            <?php foreach ($promoted_products as $product): ?>
                <div class="item">
                    <h3><?php echo get_product_title($product); ?></h3>
                    <div class="box1">
                        <img src="<?php echo get_product_item_image($product); ?>" alt="<?php echo get_product_title($product); ?>" class="cover-img">
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <div class="pad20"></div>
            <?php if ($promoted_products_count > count($promoted_products)): ?>
            <p>
                <a  href="javascript:void(0)" class="button" onclick="load_more_promoted_products();">Poster mon annonce</a>
            </p>
            <?php endif; ?>
        </div>
    </section>
