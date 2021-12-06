<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php if(!empty($special_offers)): ?>
    <section class="bg1 bg-light">
        <div class="container">
            <div class="text-center">
                <h2><?= trans("special_offers"); ?></h2>
                <div class="pad10"></div>
            </div>
            <div class="owl-carousel slide4 owl-theme noDots">
                <?php foreach ($special_offers as $product): ?>
                <div class="item">
                    <div class="bg">
                        <a href="<?php echo generate_product_url($product); ?>">
                            <img src="<?php echo get_product_item_image($product); ?>" class="img-bar">
                            <div class="starts">
                                <?php for($i = 0; $i <= $product->wishlist_count; $i++): ?>
                                    <img src="assets/img/star.png">
                                <?php endfor; ?>
                            </div>
                            <div class="details">
                                <p><?php echo get_product_title($product); ?></p>
                                <span class="price"><?php echo price_formatted(calculate_product_price($product->price, $product->discount_rate), $product->currency, true); ?></span>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
<?php endif; ?>