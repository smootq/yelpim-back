<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

    <section class="breadcrumbs">
            <div class="container">
                <ul class="clean">
                    <li><a href="<?php echo lang_base_url(); ?>"><?php echo trans("home"); ?></a></li>
                    <?php 
                        if (!empty($parent_categories)):
                            foreach ($parent_categories as $item):?>
                                <li>
                                    <img src="assets/img/go.svg" alt="">
                                </li>
                                <?php if ($item->id == $category->id):?>
                                    <li><?php echo category_name($item); ?></li>
                                <?php else: ?>

                                    <li><a href="<?php echo generate_category_url($item); ?>"><?php echo category_name($item); ?></a></li>
                                <?php endif; ?>
                            <?php endforeach;
                        else:?>
                            <li><?= trans("products"); ?></li>
                        <?php endif; ?>
                </ul>
            </div>
        </section>

        <?php //if ($this->general_settings->index_latest_products == 1 && !empty($latest_products)): ?>
            <?php $this->load->view('product/_special_offers', ['index_categories' => $index_categories]); ?>
        <?php //endif; ?>

        <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="title2 noMargTop">
                    <?php if (!empty($category)): ?>
                        <?php echo category_name($category); ?>
                    <?php else: ?>
                        <?php echo trans("products"); ?>
                    <?php endif; ?>
                    </h2>
                </div>
            </div>
            <div class="pad10"></div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <?php foreach ($products as $product): ?>
                                <div class="col-sm-4">
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
                <div class="col-sm-4">
                    <div class="pub1">
                        <?php $this->load->view("partials/_ad_spaces", ["ad_space" => "index_1", "class" => ""]); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light brands">
        <div class="container">
            <h2 class="title2"><span>Nos tops marques </span></h2>
            <div class="pad20"></div>
            <div class="row">
                <div class="col-sm-15">
                    <div class="bg">
                        <img src="assets/img/Apple-Logo.png" class="cover-img">
                    </div>
                </div>
                <div class="col-sm-15 ">
                    <div class="bg">
                        <img src="assets/img/Asus-Logo.png" class="cover-img">
                    </div>
                </div>
                <div class="col-sm-15 ">
                    <div class="bg">
                        <img src="assets/img/Microsoft_logo.png" class="cover-img">
                    </div>
                </div>
                <div class="col-sm-15 ">
                    <div class="bg">
                        <img src="assets/img/hp_logo.png" class="cover-img">
                    </div>
                </div>
                <div class="col-sm-15 ">
                    <div class="bg">
                        <img src="assets/img/download.png" class="cover-img">
                    </div>
                </div>
            </div>
        
        </div>
    </section>
    <section class="bg-light">
        <div class="container">
            <h2 class="title2">Toutes nos catégories <span><?php echo category_name($item); ?></span></h2>
            <div class="pad20"></div>
            <div class="row">
                <?php foreach($categories as $cat): ?>
                    <?php if($cat->parent_id == $category->id): ?>
                        <div class="col-sm-4">
                            <div class="info-1">
                                <img src="<?php echo $cat->image ?>" class="img-responsive">
                                <h5><?php echo category_name($cat)?></h5>
                                <p>
                                    <?php echo $cat->description ?>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="bg-light guide">
        <div class="container">
            <h2 class="title2"><span>Nos guides</span> d'achat</h2>
            <div class="pad20"></div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="bg">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="icon1">
                                    <img src="assets/img/icon09.svg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3>Choisir son disque dur ou sa clé usb</h3>
                                <p>Vos données sensibles méritent le meilleur disque dur pour les protéger.</p>
                                <p class="text-right">
                                    <a href="" class="link1">Lire la suite</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="bg">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="icon2">
                                    <img src="assets/img/icon10.svg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h3>Comment bien choisir son PC gamer ?</h3>
                                <p>Pour une expérience de jeu exceptionnelle, choisissez votre PC gamer avec soin.</p>
                                <p class="text-right">
                                    <a href="" class="link1">Lire la suite</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>